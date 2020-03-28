<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicConstruction extends Model
{
    protected $fillable = [
        'name', 'description', 'sitesUrl','nameImg'
    ];
}
