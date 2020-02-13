<?php

namespace SchemaMarkdown\Database;

use \Illuminate\Database\SQLiteConnection;

class Connection extends SQLiteConnection
{
    /**
     * Get a schema builder instance for the connection.
     *
     * @return \Illuminate\Database\Schema\SQLiteBuilder
     */
    public function getSchemaBuilder()
    {
        parent::getSchemaBuilder();
        return new SchemaBuilder($this, $this->config['add_blueprint_callback']);
    }
}
