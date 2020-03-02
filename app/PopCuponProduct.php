<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PopCuponProduct extends Model
{
    protected $fillable = ['discount','marker','description','name','count','oldPrice',
        'newPrice','sitesUrl','imageUrl'];
}
