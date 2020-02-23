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
        return $value ? "`{$value}`" : '';
    }

    protected function getTableColumnMarkdownId(string $table, string $column)
    {
        return "table-{$table}-{$column}";
    }

    protected function getTableColumnMarkdown(Column $column_definition)
    {
        $table = $column_definition->getTable()->getTableName();
        $column = $column_definition->getName();
        $id = $this->getTableColumnMarkdownId($table, $column);
        $column_chip = $this->chip($column);
        return "<span id=\"{$id}\">{$column_chip}</span>";
    }

    protected function getColumnRow(Column $column_definition)
    {
        $column_name = $this->getTableColumnMarkdown($column_definition);
        $column_type = $this->chip($column_definition->getType());
        $column_nullable = $this->chip($column_definition->isNullable() ? 'true' : '');
        $column_default = $this->chip($column_definition->getDefault());
        $column_attributes = $column_definition->getAttributes();
        $column_attributes_markdown = $this->getAttributesMarkdown($column_attributes);
        $column_comment = $column_definition->getComment();
        return [$column_name, $column_type, $column_nullable, $column_default, $column_attributes_markdown, $column_comment];
    }

    protected function getDatabaseTableColumnsMarkdown(Table $table_definition)
    {
        $table = new MarkdownTable(['Column', 'Type', 'Nullable', 'Default', 'Attributes', 'Comment']);

        $table_name = $table_definition->getTableName();

        foreach ($this->getDatabaseTableColumns($table_name) as $column) {
            $column_definition = $table_definition->getColumn($column);
            $table->pushRow($column_definition
                ? $this->getColumnRow($column_definition)
                : [$this->chip($column), '', '', '', '', 'Not Defined In Blueprints']);
        }

        return "### Columns\n\n".$table."\n";
    }

    protected function getDatabaseTableIndicesMarkdown(Table $table_definition)
    {
        if (count($indices = $table_definition->getIndices()) < 1) {
            return '';
        }

        $table = new MarkdownTable(['Index Name', 'Type', 'Columns', 'Algorithm', 'Attributes']);
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
            $table->pushRow([$index_name, $index_type, $index_columns, $index_algorithm, $index_attributes]);
        }

        return "### Indices\n\n".$table."\n";
    }

    protected function getTableOfContentsColumnReferences(string $table, string $column)
    {
        $references = '';
        if (($table_definition = $this->database->getTable($table))
            && ($column_definition = $table_definition->getColumn($column))
            && ($references_column = $column_definition->getReferences())
        ) {
            $references_table_name = $references_column->getTable()->getTableName();
            $references_column_name = $references_column->getName();
            $references_column_id = $this->getTableColumnMarkdownId($references_table_name, $references_column_name);
            $references_chip = $this->chip("{$references_table_name}.{$references_column_name}");
            $references = " => [{$references_chip}](#{$references_column_id})";
        }
        return $references;
    }

    protected function getTableOfContentsTableColumns(string $table)
    {
        $result = '';

        foreach ($this->getDatabaseTableColumns($table) as $column) {
            $id = $this->getTableColumnMarkdownId($table, $column);
            $references = $this->getTableOfContentsColumnReferences($table, $column);
            $column = $this->chip($column);
            $result .= "&emsp;&emsp;[{$column}](#{$id}){$references}<br/>\n";
        }

        return $result;
    }

    protected function getTableOfContents()
    {
        $result = '';

        foreach ($this->getDatabaseTables() as $table) {
            $result .= '['.$this->chip($table)."](#table-$table)<br/>\n";
            $result .= $this->getTableOfContentsTableColumns($table);
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
