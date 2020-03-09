<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllSite extends Model
{
    protected $fillable = ['discount','marker','description','name','count','oldPrice','newPrice','imgName',
        'sitesUrl','imageUrl'];
}
