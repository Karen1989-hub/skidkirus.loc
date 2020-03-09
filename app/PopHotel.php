<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PopHotel extends Model
{
    protected $fillable = [
        'popHotelImg','description','name','country','sitesUrl'
    ];
}
