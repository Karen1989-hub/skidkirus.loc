<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllCuponProduct extends Model
{
    protected $fillable = ['discount','marker','description','name','count','oldPrice',
    'newPrice','sitesUrl','imageUrl','productCategory'];
}
