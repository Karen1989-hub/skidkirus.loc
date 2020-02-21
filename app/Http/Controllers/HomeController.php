<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skidki;
use App\Site;
use App\PopRestoran;

class HomeController extends Controller
{
    public function home(){
        $skidki = Skidki::all();
        $sites = Site::all();
        $popRestoran = PopRestoran::all();          

        $arr = ['skidki'=>$skidki,'sites'=>$sites,'popRestoran'=>$popRestoran];
        return view('welcome',$arr);
    }
}
