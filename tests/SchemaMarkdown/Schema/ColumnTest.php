<?php

namespace Tests\SchemaMarkdown\Schema;

use \Tests\BaseTestCase;
use \Mockery;

use \Illuminate\Support\Fluent;

use \SchemaMarkdown\Schema\Column;
use \SchemaMarkdown\Schema\Table;

class ColumnTest extends BaseTestCase
{
    public function testGetTypeDecimal()
    {
        $table = Mockery::mock(Table::class);
        $column = new Column($table, new Fluent([
            'type' => 'decimal',
            'name' => 'column_decimal',
            'total' => 8,
            'places' => 2,
        ]));
        $this->assertEquals('decimal(8, 2)', $column->getType());
    }

    public function testGetTypeDouble()
    {
        $table = Mockery::mock(Table::class);
        $column = new Column($table, new Fluent([
            'type' => 'double',
            'name' => 'column_double',
            'total' => null,
            'places' => null,
        ]));
        $this->assertEquals('double(, )', $column->getType());
    }

    public function testGetTypeString()
    {
        $table = Mockery::mock(Table::class);
        $column = new Column($table, new Fluent([
            'type' => 'string',
            'name' => 'column_string',
            'length' => 255
        ]));
        $this->assertEquals('string(255)', $column->getType());
    }

    public function testGetTypeDateTime()
    {
        $table = Mockery::mock(Table::class);
        $column = new Column($table, new Fluent([
            'type' => 'dateTime',
            'name' => 'column_dateTime',
            'precision' => 0
        ]));
        $this->assertEquals('dateTime(0)', $column->getType());
    }
}
