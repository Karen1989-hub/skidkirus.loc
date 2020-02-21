<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PopRestoran extends Model
{
    protected $fillable = ['discount','marker','description','name','count','oldPrice',
   'newPrice','sitesUrl','imageUrl']; 
}
