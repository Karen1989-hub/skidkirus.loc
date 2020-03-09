<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllRestoran extends Model
{
    protected $fillable = ['discount','marker','description','name','count','oldPrice',
        'newPrice','sitesUrl','imageUrl'];
}
