<?php

namespace SchemaMarkdown\Schema;

class Column
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
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
     * @var string
     */
    protected $comment;

    /**
     * @param \Illuminate\Support\Fluent $column_definition
     */
    public function __construct($column_definition)
    {
        $this->name = $column_definition['name'];
        $this->update($column_definition);
    }

    /**
     * @param \ArrayAccess $definition
     * @return string
     */
    protected function getTypeFromDefinition($definition)
    {
        $type = $definition['type'];
        switch ($type) {
            case 'bigInteger':
                $type = $definition['unsigned'] ?? false ? 'unsignedBigInteger' : 'bigInteger';
            break;
            case 'string':
                $type .= "({$definition['length']})";
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
        return array_filter($definition->getAttributes(), function ($key) {
            return !in_array($key, ['name', 'type', 'default', 'comment', 'change', 'length', 'unsigned', 'index', 'unique']);
        }, ARRAY_FILTER_USE_KEY);
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
     * @return string
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
     * @return string
     */
    public function getComment()
    {
        return $this->comment ?? '';
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
        }
    }

    /**
     * @param \Illuminate\Support\Fluent $column_definition
     * @return void
     */
    public function update($column_definition)
    {
        if (isset($column_definition['type'])) {
            $this->type = $this->getTypeFromDefinition($column_definition);
        }
        if (isset($column_definition['comment'])) {
            $this->comment = $column_definition['comment'];
        }
        if (isset($column_definition['default'])) {
            $this->default = $column_definition['default'];
        }
        $this->attributes = array_merge(
            $this->attributes,
            $this->getAttributesFromDefinition($column_definition)
        );
    }
}
