<?php

namespace SchemaMarkdown;

use \Illuminate\Support\Facades\DB;

use \Tests\BaseTestCase;

class CommandIntegrationTest extends BaseTestCase
{
    protected static $MIGRATIONS_BASE_PATH = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'migrations'.DIRECTORY_SEPARATOR;

    protected function getMigrationPath($dir) : string
    {
        return realpath(implode(DIRECTORY_SEPARATOR, [
            static::$MIGRATIONS_BASE_PATH,
            $dir,
        ]));
    }

    protected function getTempFilePath() : string
    {
        return tempnam(sys_get_temp_dir(), 'laravel-schema-markdown');
    }

    public function testMysqlWarning()
    {
        $command = $this->artisan('make:schema-md', [
            '--database' => 'mysql',
        ]);
        $command->expectsQuestion('Do you really wish to run this command?', '');
        $command->assertExitCode(1);
    }

    public function testMigrate00()
    {
        $getSchemaBuilder = 'getSchemaBuilder';
        DB::connection('sqlite')->$getSchemaBuilder()->dropAllTables();
        $this->artisan('make:schema-md', [
            '--output' => $this->getTempFilePath(),
            '--path' => $this->getMigrationPath('00'),
            '--realpath' => true,
        ]);
    }

    public function testMigrate00OnSQLite()
    {
        $getSchemaBuilder = 'getSchemaBuilder';
        DB::connection('sqlite')->$getSchemaBuilder()->dropAllTables();
        $this->artisan('make:schema-md', [
            '--database' => 'sqlite',
            '--output' => $this->getTempFilePath(),
            '--path' => $this->getMigrationPath('00'),
            '--realpath' => true,
        ]);
    }

    public function testMigrate01()
    {
        $getSchemaBuilder = 'getSchemaBuilder';
        DB::connection('sqlite')->$getSchemaBuilder()->dropAllTables();
        $this->artisan('make:schema-md', [
            '--output' => $this->getTempFilePath(),
            '--path' => $this->getMigrationPath('01'),
            '--realpath' => true,
        ]);
    }

    public function testMigrate02OnMysql()
    {
        $getSchemaBuilder = 'getSchemaBuilder';
        DB::connection('mysql')->$getSchemaBuilder()->dropAllTables();
        $this->artisan('make:schema-md', [
            '--database' => 'mysql',
            '--output' => $this->getTempFilePath(),
            '--path' => $this->getMigrationPath('02'),
            '--realpath' => true,
            '--force' => true,
        ]);
    }
}
