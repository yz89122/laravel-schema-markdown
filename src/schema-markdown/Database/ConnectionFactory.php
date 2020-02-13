<?php

namespace SchemaMarkdown\Database;

class ConnectionFactory
{
    protected $connection;

    protected $class;

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
            return new Connection(...$args);
        }

        if ($this->class) {
            $class = $this->class;
            return new $class(...$args);
        }

        $config = config("database.connections.{$this->connection}");
        $connection = resolve(\Illuminate\Database\Connectors\ConnectionFactory::class)->make($config);
        $schema_builder = $connection->getSchemaBuilder();

        $schema_builder_class = '\\'.get_class($schema_builder);
        $schema_builder_class_name = str_replace('\\', '_', $schema_builder_class);

        if (!class_exists($schema_builder_class_name)) {
            $code = file_get_contents(__DIR__.'/SchemaBuilder.php');
            $code = str_replace('class SchemaBuilder', "class {$schema_builder_class_name}", $code);
            $code = str_replace('extends SQLiteBuilder', "extends {$schema_builder_class}", $code);
            eval('?>'.$code);
        }

        $connection_class = '\\'.get_class($connection);
        $connection_class_name = str_replace('\\', '_', $connection_class);

        if (!class_exists($connection_class_name)) {
            $code = file_get_contents(__DIR__.'/Connection.php');
            $code = str_replace('class Connection', "class {$connection_class_name}", $code);
            $code = str_replace('extends SQLiteConnection', "extends {$connection_class}", $code);
            $code = str_replace('return new SchemaBuilder', "return new {$schema_builder_class_name}", $code);
            eval('?>'.$code);
        }

        $this->class = $class = __NAMESPACE__.'\\'.$connection_class_name;

        return new $class(...$args);
    }

    public function makeClosure()
    {
        return function (...$args) {
            return $this->make(...$args);
        };
    }
}
