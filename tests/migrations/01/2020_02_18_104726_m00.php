<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class M00 extends Migration
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
            $table->primary(['string_255']);
        });
        Schema::table('table', function (Blueprint $table) {
            $table->dropPrimary(['string_255']);
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
        Schema::drop('table_0');
        Schema::dropIfExists('table_0');
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
