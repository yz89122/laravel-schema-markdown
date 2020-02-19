<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class M01 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_0', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->uuid('uuid')->unique()->comment('UUID');
        });
        Schema::rename('table_0', 'table');
        Schema::table('table', function (Blueprint $table) {
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::table('table', function (Blueprint $table) {
            $table->string('string_127', 127)->nullable();
        });
        Schema::table('table', function (Blueprint $table) {
            $table->renameColumn('string_127', 'string_255');
        });
        Schema::table('table', function (Blueprint $table) {
            $table->string('string_255', 255)->change();
        });
        Schema::table('table', function (Blueprint $table) {
            $table->dropPrimary(['id']);
            $table->unsignedBigInteger('id')->change();
            $table->primary(['id', 'uuid']);
        });
        Schema::table('table', function (Blueprint $table) {
            $table->unique(['string_255']);
        });
        Schema::table('table', function (Blueprint $table) {
            $table->dropUnique(['string_255']);
        });
        Schema::table('table', function (Blueprint $table) {
            $table->index(['string_255'], 'index_00');
        });
        Schema::table('table', function (Blueprint $table) {
            $table->dropIndex('index_00');
        });
        Schema::create('table_0', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('table_id')->index();
            $table->foreign('table_id')->references('id')->on('table')
                ->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('table_0', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->geometry('g');
            $table->index(['name'], 'index_abc');
            $table->spatialIndex(['g']);
        });
        Schema::table('table_0', function (Blueprint $table) {
            $table->renameIndex('index_abc', 'iii');
            $table->dropSpatialIndex(['g']);
        });
        Schema::table('table_0', function (Blueprint $table) {
            $table->dropIndex('iii');
            $table->spatialIndex(['g']);
            $table->dropForeign(['table_id']);
        });
        Schema::create('table_1', function (Blueprint $table) {
            $table->bigIncrements('id');
        });
        Schema::drop('table_1');
        Schema::dropIfExists('table_1');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table');
    }
}
