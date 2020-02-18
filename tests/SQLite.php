<?php

namespace Tests;

use \Illuminate\Database\Capsule\Manager as DB;
use \Illuminate\Database\Schema\Grammars\SQLiteGrammar;

trait SQLite
{
    protected $db;

    protected function setUpSQLite()
    {
        $this->db = $db = new DB;

        $db->addConnection([
            'driver' => 'sqlite',
            'database' => ':memory:',
        ]);

        $db->addConnection([
            'driver' => 'sqlite',
            'database' => ':memory:',
        ], 'sqlite');

        $db->setAsGlobal();
        
        $this->getSQLiteConnection()->getSchemaBuilder()->dropAllTables();
    }

    /**
     * @return \Illuminate\Database\SQLiteConnection
     */
    protected function getSQLiteConnection()
    {
        return $this->db->getConnection('sqlite');
    }

    /**
     * @return \Illuminate\Database\Schema\Grammars\SQLiteGrammar
     */
    protected function getSQLiteSchemaGrammar()
    {
        return new SQLiteGrammar;
    }
}
