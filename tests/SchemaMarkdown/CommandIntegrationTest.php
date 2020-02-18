<?php

namespace SchemaMarkdown;

use \Tests\BaseTestCase;
use \Tests\SQLite;

class CommandIntegrationTest extends BaseTestCase
{
    use SQLite;

    protected static $MIGRATIONS_BASE_PATH = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'migrations'.DIRECTORY_SEPARATOR;

    protected function setUp() : void
    {
        parent::setUp();
        $this->setUpSQLite();
    }

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

    public function testMigrate00()
    {
        $this->artisan('make:schema-md', [
            '--output' => $this->getTempFilePath(),
            '--path' => $this->getMigrationPath('00'),
            '--realpath' => true,
        ]);
    }

    public function testMigrate00OnSQLite()
    {
        $this->artisan('make:schema-md', [
            '--database' => 'sqlite',
            '--output' => $this->getTempFilePath(),
            '--path' => $this->getMigrationPath('00'),
            '--realpath' => true,
        ]);
    }
}
