<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllSkidkis extends Model
{
    protected $fillable = ['discount','marker','description','name','count','oldPrice',
        'newPrice','sitesUrl','imageUrl'];
}
