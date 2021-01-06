<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('iso_code')->nullable();
            $table->string('iso_name')->nullable();
            $table->string('parentCode')->nullable();
            $table->string('parentName')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('countries');
    }
}
