<?php

namespace SchemaMarkdown\Schema;

class Database
{
    /**
     * @var \Illuminate\Database\Schema\Blueprint[]
     */
    protected $blueprints = [];

    /**
     * @var \SchemaMarkdown\Schema\Table[]
     */
    protected $tables = [];

    /**
     * @var boolean
     */
    private $is_processed = false;

    /**
     * @param \Illuminate\Database\Schema\Blueprint[] $blueprints
     */
    public function __construct(array $blueprints = [])
    {
        $this->setBlueprints($blueprints);
    }

    /**
     * @param \Illuminate\Database\Schema\Blueprint[] $blueprints
     * @return void
     */
    public function setBlueprints(array $blueprints)
    {
        $this->is_processed = false;
        $this->blueprints = $blueprints;
    }

    /**
     * @return \Illuminate\Database\Schema\Blueprint[]
     */
    public function getBlueprints() : array
    {
        return $this->blueprints;
    }

    /**
     * @return void
     */
    protected function processBlueprints()
    {
        foreach ($this->blueprints as $blueprint) {
            $table_name = $blueprint->getTable();
            if (!array_key_exists($table_name, $this->tables)) {
                $this->tables[$table_name] = new Table($this, $table_name);
            }
            $this->tables[$table_name]->applyBlueprint($blueprint);
        }
    }

    /**
     * @return void
     */
    protected function checkIsProcessed()
    {
        if (!$this->is_processed) {
            $this->processBlueprints();
            $this->is_processed = true;
        }
    }

    /**
     * @param string $name
     * @return \SchemaMarkdown\Schema\Table|null
     */
    public function getTable($name) : ?Table
    {
        $this->checkIsProcessed();
        return $this->tables[$name] ?? null;
    }

    /**
     * @param string $name
     * @return void
     */
    public function dropTable($name)
    {
        $this->checkIsProcessed();
        unset($this->tables[$name]);
    }

    /**
     * @param string $name
     * @param \SchemaMarkdown\Schema\Table $table
     * @return void
     */
    public function addTable($name, Table $table)
    {
        $this->checkIsProcessed();
        $this->tables[$name] = $table;
    }
}
