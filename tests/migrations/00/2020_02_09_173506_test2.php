<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Test2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('c1');
            $table->bigInteger('c2')->index();
            $table->bigInteger('c3')->unique();
            $table->bigInteger('c4')->nullable();
            $table->bigInteger('c5')->default(5);
            $table->bigInteger('c6')->comment('column 6');
            $table->bigInteger('c7');
            $table->bigInteger('c8');
            $table->bigInteger('c9');
            $table->bigInteger('c0')->unsigned();
            $table->bigInteger('d1');
            $table->timestamp('t1')->current();
            $table->timestamps();

            $table->unique(['c7', 'c8', 'c9']);
            $table->foreign('c0')->references('id')->on('test0')->onUpdate('cascade')->onDelete('restrict');
            $table->index('d1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test2');
    }
}
