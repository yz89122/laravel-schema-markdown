<?php

namespace SchemaMarkdown;

use \Illuminate\Console\Command;
use \Illuminate\Console\ConfirmableTrait;
use \Illuminate\Support\Facades\Config;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Database\Connection;

use \SchemaMarkdown\Database\ConnectionFactory;
use \SchemaMarkdown\Database\ConnectorFactory;
use \SchemaMarkdown\Exceptions\ExitTransactionException;
use \SchemaMarkdown\Schema\Database;
use \SchemaMarkdown\Markdown\SchemaMarkdownGenerator;

class MakeSchemaMarkdownCommand extends Command
{
    use ConfirmableTrait;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:schema-md
        {--force : Force the operation to run when in production}
        {--database=schema-markdown : The database connection to use}
        {--path=* : The path(s) to the migrations files to be executed}
        {--realpath : Indicate any provided migration file paths are pre-resolved absolute paths}
        {--step : Force the migrations to be run so they can be rolled back individually}
        {--o|output=./schema.md : The output path for the generated markdown}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a markdown documentations of migration files';

    protected $blueprints = [];

    /**
     * Create a new console command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $config = Config::get("database.connections.{$this->option('database')}");
        if ($config['driver'] == 'mysql' && !$this->confirmToProceed(
            'DDL causes commit in MySQL',
            function () {
                return true;
            }
        )) {
            return;
        } else {
            $this->resetDatabase();
        }

        try {
            DB::transaction(function () {
                $this->prepareDatabase();
                $this->runMigrations();
                $this->makeMarkdown();
                throw new ExitTransactionException;
            });
        } catch (ExitTransactionException $e) {
        }
    }

    protected function resetDatabase()
    {
        $this->call('migrate:reset', array_filter([
            '--database' => $this->option('database'),
            '--path' => $this->option('path'),
            '--realpath' => $this->option('realpath'),
            '--force' => true,
        ]));
    }

    protected function prepareDatabase()
    {
        if (($connection = $this->option('database')) == 'schema-markdown') {
            $config = [
                'database' => ':memory:',
                'prefix' => '',
            ];
        } else {
            $config = Config::get("database.connections.{$connection}");
        }
        $config = array_merge($config, [
            'driver' => 'schema-markdown',
            'add_blueprint_callback' => function ($blueprint) {
                array_push($this->blueprints, $blueprint);
            }
        ]);
        Config::set('database.connections.schema-markdown', $config);
        $connection_factory = new ConnectionFactory($connection);
        $connector_factory = new ConnectorFactory($connection);
        Connection::resolverFor('schema-markdown', $connection_factory->makeClosure());
        app()->singleton('db.connector.schema-markdown', $connector_factory->makeClosure());
    }

    protected function runMigrations()
    {
        $this->call('migrate', array_filter([
            '--database' => 'schema-markdown',
            '--path' => $this->option('path'),
            '--realpath' => $this->option('realpath'),
            '--step' => $this->option('step'),
            '--force' => true,
        ]));
    }

    protected function makeMarkdown()
    {
        $schema = new Database($this->blueprints);
        $generator = new SchemaMarkdownGenerator('schema-markdown', $schema);
        file_put_contents($this->option('output'), $generator->getDatabaseSchemaMarkdown());
    }
}
