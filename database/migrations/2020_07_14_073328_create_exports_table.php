<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exports', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('a')->nullable();
            $table->string('declaration_type')->nullable();
            $table->string('year_in_yy')->nullable();
            $table->string('month')->nullable();
            $table->string('running_no')->nullable();
            $table->string('item_no')->nullable();
            $table->string('origin_code')->nullable();
            $table->string('destination_code')->nullable();
            $table->string('transportation')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('company_branch')->nullable();
            $table->string('customs_coordinates')->nullable();
            $table->string('product_code')->nullable();
            $table->string('product_code_unit')->nullable();
            $table->string('privilege_code')->nullable();
            $table->string('duty_rate_percent')->nullable();
            $table->string('duty_rate_condition')->nullable();
            $table->string('brought_back')->nullable();
            $table->string('promote_investment')->nullable();
            $table->string('bonded_warehouse')->nullable();
            $table->string('claim_duty')->nullable();
            $table->string('reimport_reexport')->nullable();
            $table->string('freezone')->nullable();
            $table->string('epz')->nullable();
            $table->string('multiple_boat_declaration')->nullable();
            $table->string('import_export_date')->nullable();
            $table->string('payment_place_code')->nullable();
            $table->string('payment_number')->nullable();
            $table->string('payment_date')->nullable();
            $table->string('release_location_code')->nullable();
            $table->string('release_date')->nullable();
            $table->string('pickup_location_code')->nullable();
            $table->string('pickup_date')->nullable();
            $table->string('making_year')->nullable();
            $table->string('making_month')->nullable();
            $table->string('weight')->nullable();
            $table->string('volume')->nullable();
            $table->string('value_in_baht')->nullable();
            $table->string('value_in_other')->nullable();
            $table->string('currency_code')->nullable();
            $table->string('duty')->nullable();
            $table->string('vat')->nullable();
            $table->string('excise_tax')->nullable();
            $table->string('fee')->nullable();
            $table->string('commerce_fee')->nullable();
            $table->string('interior_tax')->nullable();
            $table->string('other_tax')->nullable();
            $table->string('excise_coordinate')->nullable();
            $table->string('excise_tax_percent')->nullable();
            $table->string('excise_tax_condition')->nullable();
            $table->string('customs_set')->nullable();
            $table->string('hscode')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exports');
    }
}
