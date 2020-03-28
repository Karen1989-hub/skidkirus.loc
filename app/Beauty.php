<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beauty extends Model
{
    protected $fillable = [
        'name', 'description', 'sitesUrl','nameImg'
    ];
}
