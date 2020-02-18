<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skidki extends Model
{
   protected $fillable = ['discount','marker','description','name','count','oldPrice','newPrice','imgName']; 
}
