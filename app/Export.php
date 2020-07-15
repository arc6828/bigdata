<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Export extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'exports';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['a', 'declaration_type', 'year_in_yy', 'month', 'running_no', 'item_no', 'origin_code', 'destination_code', 'transportation', 'tax_id', 'company_branch', 'customs_coordinates', 'product_code', 'product_code_unit', 'privilege_code', 'duty_rate_percent', 'duty_rate_condition', 'brought_back', 'promote_investment', 'bonded_warehouse', 'claim_duty', 'reimport_reexport', 'freezone', 'epz', 'multiple_boat_declaration', 'import_export_date', 'payment_place_code', 'payment_number', 'payment_date', 'release_location_code', 'release_date', 'pickup_location_code', 'pickup_date', 'making_year', 'making_month', 'weight', 'volume', 'value_in_baht', 'value_in_other', 'currency_code', 'duty', 'vat', 'excise_tax', 'fee', 'commerce_fee', 'interior_tax', 'other_tax', 'excise_coordinate', 'excise_tax_percent', 'excise_tax_condition', 'customs_set', 'hscode'];

    
}
