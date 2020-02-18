<?php

namespace SchemaMarkdown\Database;

class ConnectorFactory
{
    /**
     * @var string
     */
    protected $connection;

    /**
     * @param string $connection
     */
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    /**
     * @param mixed ...$args
     * @return \Illuminate\Database\Connectors\ConnectorInterface
     */
    public function __invoke(...$args)
    {
        return $this->make(...$args);
    }

    /**
     * @param mixed ...$args
     * @return \Illuminate\Database\Connectors\ConnectorInterface
     */
    public function make(...$args)
    {
        if ($this->connection == 'schema-markdown') {
            return new Connector(...$args);
        }

        $config = config("database.connections.{$this->connection}");
        return resolve(\Illuminate\Database\Connectors\ConnectionFactory::class)->createConnector($config);
    }

    /**
     * @return \Closure
     */
    public function makeClosure()
    {
        return \Closure::fromCallable($this);
    }
}
