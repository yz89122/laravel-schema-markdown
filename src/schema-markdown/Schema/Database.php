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
        $this->resetLoadingKey('is_processed');
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
        $this->lazyLoad('processs_blueprints', function () {
            foreach ($this->blueprints as $blueprint) {
                $table_name = $blueprint->getTable();
                $table = $this->tables[$table_name] ?? new Table($this, $table_name);
                $table->applyBlueprint($blueprint);
            }
        });
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
        unset($this->tables[$name]);
    }

    /**
     * @param string $name
     * @param \SchemaMarkdown\Schema\Table $table
     * @return void
     */
    public function setTable($name, Table $table)
    {
        $this->tables[$name] = $table;
    }
}
