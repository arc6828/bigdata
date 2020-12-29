<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Export_2hs_time extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'export_2hs_time';

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
    protected $fillable = ['year_at', 'exporter', 'importer', 'hscode', 'value', 'unit', 'trade_type'];

    
}
