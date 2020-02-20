<?php

namespace SchemaMarkdown\Schema;

use \SchemaMarkdown\Utils\LazyLoading;

class Database
{
    use LazyLoading;
    
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
    protected $is_processing_blueprints = false;

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
        $this->resetLoadingKey('processed_blueprints');
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
    public function processBlueprints()
    {
        if ($this->is_processing_blueprints) {
            return;
        }
        $this->is_processing_blueprints = true;
        $this->lazyLoad('processed_blueprints', function () {
            foreach ($this->blueprints as $blueprint) {
                $table_name = $blueprint->getTable();
                $table = $this->tables[$table_name] ?? new Table($this, $table_name);
                $table->applyBlueprint($blueprint);
            }
        });
        $this->is_processing_blueprints = false;
    }

    /**
     * @param string $name
     * @return \SchemaMarkdown\Schema\Table|null
     */
    public function getTable($name) : ?Table
    {
        $this->processBlueprints();
        return $this->tables[$name] ?? null;
    }

    /**
     * @param string $name
     * @return void
     */
    public function dropTable($name)
    {
        $this->processBlueprints();
        unset($this->tables[$name]);
    }

    /**
     * @param string $name
     * @param \SchemaMarkdown\Schema\Table $table
     * @return void
     */
    public function setTable($name, Table $table)
    {
        $this->processBlueprints();
        $this->tables[$name] = $table;
    }
}
