<?php

namespace SchemaMarkdown\Schema;

class Index
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $columns;

    /**
     * @var string
     */
    protected $algorithm;

    /**
     * @var array
     */
    protected $attributes;

    /**
     * @param \Illuminate\Support\Fluent $index_command
     */
    public function __construct($index_command)
    {
        $this->type = $index_command['name'];
        $this->name = $index_command['index'];
        $this->columns = $index_command['columns'];
        $this->algorithm = $index_command['algorithm'];
        $this->attributes = $this->getCommandAttributes($index_command);
    }

    /**
     * @param \Illuminate\Support\Fluent $index_command
     * @return array
     */
    protected function getCommandAttributes($index_command)
    {
        return array_filter($index_command->getAttributes(), function ($key) {
            return !in_array($key, ['name', 'index', 'columns', 'algorithm']);
        }, ARRAY_FILTER_USE_KEY);
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param \Illuminate\Support\Fluent $command
     * @return void
     */
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
