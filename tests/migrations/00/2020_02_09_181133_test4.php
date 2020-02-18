<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Test4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('test3', function (Blueprint $table) {
            $table->integer('c2')->nullable();
        });
        Schema::table('test3', function (Blueprint $table) {
            $table->integer('c2')->default(3)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('test3', function (Blueprint $table) {
            $table->dropColumn('c2');
        });
    }
}
