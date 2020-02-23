<?php

namespace SchemaMarkdown\Schema;

class Column
{
    /**
     * @var \SchemaMarkdown\Schema\Table
     */
    protected $table;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var boolean
     */
    protected $nullable = false;

    /**
     * @var string|null
     */
    protected $default;

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var boolean
     */
    protected $is_index;

    /**
     * @var boolean
     */
    protected $is_unique;

    /**
     * @var string|null
     */
    protected $comment;

    /**
     * @var \SchemaMarkdown\Schema\Column|null
     */
    protected $references;

    /**
     * @param \Illuminate\Support\Fluent $column_definition
     */
    public function __construct(Table $table, $column_definition)
    {
        $this->table = $table;
        $this->name = $column_definition['name'];
        $this->update($column_definition);
    }

    /**
     * @param \ArrayAccess $definition
     * @return string
     */
    protected function getTypeFromDefinition($definition)
    {
        $type = $definition['type'] ?? '';
        switch ($type) {
            case 'float':
            case 'double':
            case 'decimal':
                $type .= "({$definition['total']}, {$definition['places']})";
                // no break
            case 'integer':
            case 'tinyInteger':
            case 'smallInteger':
            case 'mediumInteger':
            case 'bigInteger':
                $type .= ($definition['unsigned'] ?? false) ? '(unsigned)' : '';
            break;
            case 'string':
            case 'char':
                $type .= "({$definition['length']})";
            break;
            case 'dateTime':
            case 'dateTimeTz':
            case 'time':
            case 'timeTz':
            case 'timestamp':
            case 'timestampTz':
                $type .= "({$definition['precision']})";
            break;
        }
        return $type;
    }

    /**
     * @param \Illuminate\Support\Fluent $definition
     * @return array
     */
    protected function getAttributesFromDefinition($definition)
    {
        return array_filter($definition->getAttributes(), function ($value, $key) {
            return ($key == 'autoIncrement' && $value)
                || !in_array($key, [
                    'name',
                    'type',
                    'nullable',
                    'default',
                    'comment',
                    'change',
                    'length',
                    'precision',
                    'total',
                    'places',
                    'unsigned',
                    'index',
                    'unique',
                    'autoIncrement',
                ]);
        }, ARRAY_FILTER_USE_BOTH);
    }

    /**
     * @return \SchemaMarkdown\Schema\Table
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return boolean
     */
    public function isNullable()
    {
        return $this->nullable;
    }

    /**
     * @return string|null
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment ?? '';
    }

    /**
     * @return \SchemaMarkdown\Schema\Column|null
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * @param \ArrayAccess $command
     * @return void
     */
    public function updateByCommand($command)
    {
        switch ($command['name']) {
            case 'renameColumn':
                $this->name = $command['to'];
            break;
            case 'foreign':
                [$table, $column] = [$command['on'], $command['references']];
                if ($table_definition = $this->getTable()->getDatabase()->getTable($table)) {
                    if ($column_definition = $table_definition->getColumn($column)) {
                        $this->references = $column_definition;
                    }
                }
            break;
            case 'dropForeign':
                $this->references = null;
            break;
        }
    }

    /**
     * @param \Illuminate\Support\Fluent $column_definition
     * @return void
     */
    public function update($column_definition)
    {
        $this->type = $this->getTypeFromDefinition($column_definition);
        $this->comment = $column_definition['comment'] ?? null;
        $this->default = $column_definition['default'] ?? null;
        $this->nullable = $column_definition['nullable'] ?? false;
        $this->attributes = array_merge(
            $this->attributes,
            $this->getAttributesFromDefinition($column_definition)
        );
    }
}
