<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExport2hsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('export_2hs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('hscode')->nullable();
            $table->string('product')->nullable();
            $table->text('html_title')->nullable();
            $table->mediumText('html_data')->nullable();
            $table->mediumText('json')->nullable();
            $table->timestamp('scraping_date')->useCurrent()->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('export_2hs');
    }
}
