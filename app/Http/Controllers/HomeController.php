<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skidki;
use App\Site;

class HomeController extends Controller
{
    public function home(){
        $skidki = Skidki::all();
        $sites = Site::all();
    
        //dd($sites);

        $arr = ['skidki'=>$skidki,'sites'=>$sites];
        return view('welcome',$arr);
    }
}
