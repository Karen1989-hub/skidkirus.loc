<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllHotel extends Model
{
    protected $fillable = [
        'popHotelImg','description','name','country','sitesUrl'
    ];
}
