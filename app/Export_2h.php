<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Export_2h extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'export_2hs';

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
    protected $fillable = ['hscode', 'product', 'html_title', 'html_data', 'json', 'scraping_date'];

    
}
