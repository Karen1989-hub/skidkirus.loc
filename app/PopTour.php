<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PopTour extends Model
{
    protected $fillable = [
        'name','info','nameImg','sitesUrl','toursCountry'
    ];
}
