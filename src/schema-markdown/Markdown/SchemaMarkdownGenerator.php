<?php

namespace SchemaMarkdown\Markdown;

use \Illuminate\Support\Facades\DB;

use \SchemaMarkdown\Schema\Database;
use \SchemaMarkdown\Schema\Table;
use \SchemaMarkdown\Schema\Column;
use \SchemaMarkdown\Utils\LazyLoading;

class SchemaMarkdownGenerator
{
    use LazyLoading;

    protected $connection;

    protected $database;

    public function __construct(string $connection, Database $database)
    {
        $this->connection = $connection;
        $this->database = $database;
    }

    protected function getDatabaseTables()
    {
        return $this->lazyLoad('tables', function () {
            $getDoctrineSchemaManager = 'getDoctrineSchemaManager'; // suppress warning
            return DB::connection($this->connection)->$getDoctrineSchemaManager()->listTableNames();
        });
    }

    protected function getDatabaseTableColumns($table)
    {
        return $this->lazyLoad("table-columns-$table", function () use ($table) {
            $getSchemaBuilder = 'getSchemaBuilder'; // suppress warning
            return DB::connection($this->connection)->$getSchemaBuilder()->getColumnListing($table);
        });
    }

    protected function getAttributesMarkdown($attributes)
    {
        $result = [];

        foreach ($attributes as $key => $value) {
            $value = json_encode($value);
            array_push($result, "`{$key}:{$value}`");
        }

        return implode('<br/>', $result);
    }

    protected function chip($value)
    {
        if ($value) {
            return '`'.$value.'`';
        }
        return '';
    }

    protected function getColumnMarkdown(Column $column_definition)
    {
        $column_name = $this->chip($column_definition->getName());
        $column_type = $this->chip($column_definition->getType());
        $column_default = $this->chip($column_definition->getDefault());
        $column_attributes = $column_definition->getAttributes();
        $column_attributes_markdown = $this->getAttributesMarkdown($column_attributes);
        $column_comment = $column_definition->getComment();
        return "| $column_name | $column_type | $column_default | $column_attributes_markdown | $column_comment |\n";
    }

    protected function getDatabaseTableColumnsMarkdown(Table $table_definition)
    {
        $result = "### Columns\n";
        $result .= "| Column | Type | Default | Attributes  | Comment |\n";
        $result .= "| --- | --- | --- | --- | --- |\n";

        $table = $table_definition->getTableName();

        foreach ($this->getDatabaseTableColumns($table) as $column) {
            $column_definition = $table_definition->getColumn($column);
            $result .= $column_definition
                ? $this->getColumnMarkdown($column_definition)
                : "| `$column` | | | | Not Defined In Blueprints |\n";
        }

        return $result."\n";
    }

    protected function getDatabaseTableIndicesMarkdown(Table $table_definition)
    {
        if (count($indices = $table_definition->getIndices()) < 1) {
            return '';
        }

        $result = "### Indices\n\n";
        $result .= "| Index Name | Type | Columns | Algorithm | Attributes |\n";
        $result .= "| --- | --- | --- | --- | --- |\n";
        foreach ($indices as $index_definition) {
            $index_name = $this->chip($index_definition->getName());
            $index_type = $this->chip($index_definition->getType());
            $index_columns = $index_definition->getColumns();
            foreach ($index_columns as $i => $column) {
                $index_columns[$i] = $this->chip($column);
            }
            $index_columns = implode('<br/>', $index_columns);
            $index_algorithm = $this->chip($index_definition->getAlgorithm());
            $index_attributes = $this->getAttributesMarkdown($index_definition->getAttributes());
            $result .= "| $index_name | $index_type | $index_columns | $index_algorithm | $index_attributes |\n";
        }

        return $result."\n";
    }

    protected function getTableOfContents()
    {
        $result = '';

        foreach ($this->getDatabaseTables() as $table) {
            $result .= '- ['.$this->chip($table)."](#table-$table)\n";
        }

        return $result."\n";
    }

    protected function getDatabaseTableMarkdown(string $table) : string
    {
        $result = '## Table: '.$this->chip($table)."\n\n";

        if ($table_definition = $this->database->getTable($table)) {
            $result .= $this->getDatabaseTableColumnsMarkdown($table_definition);

            $result .= $this->getDatabaseTableIndicesMarkdown($table_definition);
        }

        return $result;
    }

    public function getDatabaseSchemaMarkdown() : string
    {
        $result = "# Schema\n\n";

        $result .= $this->getTableOfContents();

        foreach ($this->getDatabaseTables() as $table) {
            if ($table == 'migrations') {
                continue;
            }

            $result .= $this->getDatabaseTableMarkdown($table) . "\n";
        }

        return $result;
    }
}
