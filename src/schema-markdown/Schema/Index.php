<?php

namespace SchemaMarkdown\Schema;

class Index
{
    protected $type;

    protected $name;

    protected $columns;

    protected $algorithm;

    protected $attributes;

    public function __construct($index_command)
    {
        $this->type = $index_command['name'];
        $this->name = $index_command['index'];
        $this->columns = $index_command['columns'];
        $this->algorithm = $index_command['algorithm'];
        $this->attributes = $this->getCommandAttributes($index_command);
    }

    protected function getCommandAttributes($index_command)
    {
        return array_filter($index_command->getAttributes(), function ($key) {
            return !in_array($key, ['name', 'index', 'columns', 'algorithm']);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getColumns()
    {
        return $this->columns;
    }

    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function updateByCommand($command)
    {
        switch ($command['name']) {
            case 'renameIndex':
                if ($this->getName() == $command['from']) {
                    $this->name = $command['to'];
                }
            break;
        }
    }
}
