<?php

namespace SchemaMarkdown;

use \Illuminate\Console\Command;

use \Illuminate\Support\Facades\Config;

use \SchemaMarkdown\Database\Connection;
use \SchemaMarkdown\Database\Connector;

use \SchemaMarkdown\Schema\Database;

use \SchemaMarkdown\Markdown\SchemaMarkdownGenerator;

class MakeSchemaMarkdownCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:schema-md
        {--path=* : The path(s) to the migrations files to be executed}
        {--realpath : Indicate any provided migration file paths are pre-resolved absolute paths}
        {--step : Force the migrations to be run so they can be rolled back individually}';

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
        $this->prepareDatabase();
        $this->runMigrations();
        $this->makeMarkdown();
    }

    protected function prepareDatabase()
    {
        Config::set('database.connections.schema-markdown', [
            'driver' => 'schema-markdown',
            'database' => ':memory:',
            'prefix' => '',
            'add_blueprint_callback' => function ($blueprint) {
                array_push($this->blueprints, $blueprint);
            }
        ]);
        Connection::resolverFor('schema-markdown', function ($connection, $database, $prefix, $config) {
            return new Connection($connection, $database, $prefix, $config);
        });
        app()->singleton('db.connector.schema-markdown', function () {
            return new Connector;
        });
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
        file_put_contents('schema.md', $generator->getDatabaseSchemaMarkdown());
    }
}
