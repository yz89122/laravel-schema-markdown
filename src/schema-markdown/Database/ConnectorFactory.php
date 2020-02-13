<?php

namespace SchemaMarkdown\Database;

class ConnectorFactory
{
    protected $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function __invoke(...$args)
    {
        return $this->make(...$args);
    }

    public function make(...$args)
    {
        if ($this->connection == 'schema-markdown') {
            return new Connector(...$args);
        }

        $config = config("database.connections.{$this->connection}");
        return resolve(\Illuminate\Database\Connectors\ConnectionFactory::class)->createConnector($config);
    }

    public function makeClosure()
    {
        return function (...$args) {
            return $this->make(...$args);
        };
    }
}
