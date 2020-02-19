<?php

namespace SchemaMarkdown\Database;

use \SchemaMarkdown\Utils\LazyLoading;

class ConnectionFactory
{
    use LazyLoading;

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
     * @return \Illuminate\Database\ConnectionInterface
     */
    public function __invoke(...$args)
    {
        return $this->make(...$args);
    }

    /**
     * @param mixed ...$args
     * @return \Illuminate\Database\ConnectionInterface
     */
    public function make(...$args)
    {
        if ($this->connection == 'schema-markdown') {
            return new Connection(...$args);
        }

        $class = $this->lazyLoad('class', function () {
            $config = config("database.connections.{$this->connection}");
            $connection = resolve(\Illuminate\Database\Connectors\ConnectionFactory::class)->make($config);
            $schema_builder = $connection->getSchemaBuilder();
    
            $builder_parent_class = '\\'.get_class($schema_builder);
            $builder_class = str_replace('\\', '_', $builder_parent_class);
    
            if (!class_exists(__NAMESPACE__.'\\'.$builder_class)) {
                $code = file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'SchemaBuilder.php');
                $code = str_replace('class SchemaBuilder', "class {$builder_class}", $code);
                $code = str_replace('extends SQLiteBuilder', "extends {$builder_parent_class}", $code);
                eval('?>'.$code);
            }
    
            $connection_parent_class = '\\'.get_class($connection);
            $connection_class = str_replace('\\', '_', $connection_parent_class);
    
            if (!class_exists(__NAMESPACE__.'\\'.$connection_class)) {
                $code = file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'Connection.php');
                $code = str_replace('class Connection', "class {$connection_class}", $code);
                $code = str_replace('extends SQLiteConnection', "extends {$connection_parent_class}", $code);
                $code = str_replace('return new SchemaBuilder', "return new {$builder_class}", $code);
                eval('?>'.$code);
            }
    
            return __NAMESPACE__.'\\'.$connection_class;
        });

        return new $class(...$args);
    }

    /**
     * @return \Closure
     */
    public function makeClosure()
    {
        return \Closure::fromCallable($this);
    }
}
