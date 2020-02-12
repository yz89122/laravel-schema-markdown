<?php

namespace SchemaMarkdown\Database;

use \Illuminate\Database\Schema\SQLiteBuilder;
use \Illuminate\Database\Schema\Blueprint;

class SchemaBuilder extends SQLiteBuilder
{
    protected $add_blueprint_callback;

    /**
     * Create a new database Schema manager.
     *
     * @param  \Illuminate\Database\Connection  $connection
     * @return void
     */
    public function __construct(Connection $connection, $add_blueprint_callback = null)
    {
        parent::__construct($connection);
        $this->add_blueprint_callback = $add_blueprint_callback;
    }

    /**
     * Execute the blueprint to build / modify the table.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @return void
     */
    protected function build(Blueprint $blueprint)
    {
        if ($this->add_blueprint_callback) {
            ($this->add_blueprint_callback)($blueprint);
        }
        parent::build($blueprint);
    }
}
