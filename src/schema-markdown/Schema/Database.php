<?php

namespace SchemaMarkdown\Schema;

class Database
{
    private $blueprints = [];

    private $tables = [];

    public function __construct(array $blueprints = [])
    {
        $this->blueprints = $blueprints;
    }

    public function setBlueprints(array $blueprints)
    {
        $this->blueprints = $blueprints;
    }

    public function getBlueprints()
    {
        return $this->blueprints;
    }

    public function processBlueprints()
    {
        foreach ($this->blueprints as $blueprint) {
            $table_name = $blueprint->getTable();
            if (!array_key_exists($table_name, $this->tables)) {
                $this->tables[$table_name] = new Table($this, $table_name);
            }
            $this->tables[$table_name]->applyBlueprint($blueprint);
        }
    }

    public function getTable($name)
    {
        return $this->tables[$name] ?? null;
    }

    public function dropTable($name)
    {
        unset($this->tables[$name]);
    }

    public function addTable($name, Table $table)
    {
        $this->tables[$name] = $table;
    }
}
