<?php

namespace Tests\SchemaMarkdown\Schema;

use \Illuminate\Database\Schema\Blueprint;
use \Illuminate\Database\Schema\Grammars\SQLiteGrammar;
use \Illuminate\Support\Facades\DB;

use \SchemaMarkdown\Schema\Database;

use \Tests\BaseTestCase;

class DatabaseTest extends BaseTestCase
{
    public function testDatabase()
    {
        $blueprint = new Blueprint('test');
        $blueprint->create();
        $blueprint->bigIncrements('id')->comment('ID');
        $blueprint->string('column_0')->unique()->comment('Column 0');
        $blueprint->string('column_1')->index()->default('default')->comment('Column 1');
        $blueprint->timestamps();
        $blueprint->softDeletes();
        $blueprint->toSql(DB::connection('sqlite'), new SQLiteGrammar);
        $blueprints = [$blueprint];
        $database = new Database($blueprints);

        $this->assertEquals(1, count($database->getBlueprints()));
        $this->assertEquals($blueprints, $database->getBlueprints());
        $this->assertNotNull($table = $database->getTable('test'));
        $this->assertEquals('test', $table->getTableName());
        $this->assertEquals(2, count($indices = $table->getIndices()));
        $index = $indices[0];
        $this->assertNotNull($index->getName());
        $this->assertNotNull($index->getType());
        $this->assertEquals(1, count($index->getColumns()));
        $this->assertNull($index->getAlgorithm());
        $this->assertNotNull($index->getAttributes());
        $this->assertNotNull($column = $table->getColumn('column_0'));
        $this->assertEquals('column_0', $column->getName());
        $this->assertEquals('string(255)', $column->getType());
        $this->assertEquals(null, $column->getDefault());
        $this->assertNotNull($column->getAttributes());
        $this->assertEquals('Column 0', $column->getComment());
    }
}
