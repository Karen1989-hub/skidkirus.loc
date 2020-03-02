<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllTours extends Model
{
    protected $fillable = [
        'name','info','nameImg','sitesUrl','toursCountry'
    ];
}
