<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicRestoran extends Model
{
    protected $fillable = [
        'name', 'description', 'sitesUrl','nameImg'
    ];
}
