<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skidki;
use App\Site;
use App\PopRestoran;
use App\PopHotel;

class HomeController extends Controller
{
    public function home(){
        $skidki = Skidki::all();
        $sites = Site::all();
        $popRestoran = PopRestoran::all();
        $popHotel = PopHotel::all();

        $arr = ['skidki'=>$skidki,'sites'=>$sites,'popRestoran'=>$popRestoran,'popHotel'=>$popHotel];
        return view('welcome',$arr);
    }

    public function getBlog(){
        return view('blog');
    }
    public  function gethowWork(){
        return view('hawWork');
    }
}
