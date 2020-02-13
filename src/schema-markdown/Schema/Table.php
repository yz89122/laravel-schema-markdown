<?php

namespace SchemaMarkdown\Schema;

use \Illuminate\Database\Schema\Blueprint;
use \Illuminate\Support\Fluent;

class Table
{
    protected $database;

    protected $name;

    protected $columns = [];

    protected $indices = [];

    public function __construct(Database $database, string $name)
    {
        $this->database = $database;
        $this->name = $name;
    }

    public function getTableName()
    {
        return $this->name;
    }

    public function setTableName(string $name)
    {
        $this->name = $name;
    }

    public function getColumn($column)
    {
        return $this->columns[$column];
    }

    public function getIndices()
    {
        return $this->indices;
    }

    public function applyBlueprint(Blueprint $blueprint)
    {
        foreach ($blueprint->getCommands() as $command) {
            $this->runCommand($command, $blueprint);
        }
    }

    protected function runCommand(Fluent $command, Blueprint $blueprint)
    {
        $method = 'command_'.$command['name'];
        if (method_exists($this, $method)) {
            $this->{$method}($command, $blueprint);
        }
    }

    protected function command_create(Fluent $command, Blueprint $blueprint)
    {
        foreach ($blueprint->getColumns() as $column) {
            $this->columns[$column->get('name')] = new Column($column);
        }
    }

    protected function command_drop(Fluent $command, Blueprint $blueprint)
    {
        $this->database->dropTable($this->name);
    }

    protected function command_dropIfExists(Fluent $command, Blueprint $blueprint)
    {
        $this->database->dropTable($this->name);
    }

    protected function command_dropColumn(Fluent $command, Blueprint $blueprint)
    {
        $columns = $command['columns'];
        foreach ($columns as $column) {
            unset($this->columns[$column]);
        }
    }

    protected function command_renameColumn(Fluent $command, Blueprint $blueprint)
    {
        [$from, $to] = [$command['from'], $command['to']];
        $column = $this->columns[$from];
        unset($this->columns[$from]);
        $column->updateByCommand($command);
        $this->columns[$to] = $column;
    }

    protected function command_dropPrimary(Fluent $command, Blueprint $blueprint)
    {
        $this->indices = array_filter($this->indices, function ($entry) use ($command) {
            return !$entry->getName() == $command['index'];
        });
    }

    protected function command_dropUnique(Fluent $command, Blueprint $blueprint)
    {
        $this->indices = array_filter($this->indices, function ($entry) use ($command) {
            return !$entry->getName() == $command['index'];
        });
    }

    protected function command_dropIndex(Fluent $command, Blueprint $blueprint)
    {
        $this->indices = array_filter($this->indices, function ($entry) use ($command) {
            return !$entry->getName() == $command['index'];
        });
    }

    protected function command_dropSpatialIndex(Fluent $command, Blueprint $blueprint)
    {
        $this->indices = array_filter($this->indices, function ($entry) use ($command) {
            return !$entry->getName() == $command['index'];
        });
    }

    protected function command_dropForeign(Fluent $command, Blueprint $blueprint)
    {
        $this->indices = array_filter($this->indices, function ($entry) use ($command) {
            return !$entry->getName() == $command['index'];
        });
    }

    protected function command_renameIndex(Fluent $command, Blueprint $blueprint)
    {
        foreach ($this->indices as $index) {
            if ($index->getName() == $command['from']) {
                $index->updateByCommand($command);
            }
        }
    }

    protected function command_rename(Fluent $command, Blueprint $blueprint)
    {
        [$from, $to] = [$command['from'], $command['to']];
        $this->database->dropTable($from);
        $this->name = $to;
        $this->database->addTable($to, $this);
    }

    protected function command_primary(Fluent $command, Blueprint $blueprint)
    {
        array_push($this->indices, new Index($command));
    }

    protected function command_unique(Fluent $command, Blueprint $blueprint)
    {
        array_push($this->indices, new Index($command));
    }

    protected function command_index(Fluent $command, Blueprint $blueprint)
    {
        array_push($this->indices, new Index($command));
    }

    protected function command_spatialIndex(Fluent $command, Blueprint $blueprint)
    {
        array_push($this->indices, new Index($command));
    }

    protected function command_foreign(Fluent $command, Blueprint $blueprint)
    {
        array_push($this->indices, new Index($command));
    }

    protected function command_add(Fluent $command, Blueprint $blueprint)
    {
        foreach ($blueprint->getAddedColumns() as $column) {
            $this->columns[$column->get('name')] = new Column($column);
        }
    }

    protected function command_change(Fluent $command, Blueprint $blueprint)
    {
        foreach ($blueprint->getChangedColumns() as $column) {
            $this->columns[$column->get('name')]->update($column);
        }
    }
}
