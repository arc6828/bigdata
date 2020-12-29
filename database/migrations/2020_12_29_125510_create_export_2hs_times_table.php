<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExport2hsTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('export_2hs_time', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('year_at')->nullable();
            $table->string('exporter')->nullable();
            $table->string('importer')->nullable();
            $table->string('hscode')->nullable();
            $table->float('value')->nullable();
            $table->string('unit')->nullable();
            $table->string('trade_type')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('export_2hs_times');
    }
}
