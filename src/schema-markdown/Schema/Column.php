<?php

namespace SchemaMarkdown\Schema;

class Column
{
    protected $name;

    protected $type;

    protected $default;

    protected $attributes = [];

    protected $is_index;

    protected $is_unique;

    protected $comment;

    public function __construct($column_definition)
    {
        $this->name = $column_definition['name'];
        $this->update($column_definition);
    }

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

    protected function getAttributesFromDefinition($definition)
    {
        return array_filter($definition->getAttributes(), function ($key) {
            return !in_array($key, ['name', 'type', 'default', 'comment', 'change', 'length', 'unsigned']);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getDefault()
    {
        return $this->default;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function getComment()
    {
        return $this->comment ?? '';
    }

    public function updateByCommand($command)
    {
        switch ($command['name']) {
            case 'renameColumn':
                $this->name = $command['to'];
            break;
        }
    }

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
