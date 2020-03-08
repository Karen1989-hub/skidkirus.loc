<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skidki;
use App\Site;
use App\PopRestoran;
use App\PopHotel;
use App\PopTour;
use App\AllTours;
use App\PopCuponProduct;
use App\PopShop;

class HomeController extends Controller
{
    public function home(){
        $skidki = Skidki::all();
        $sites = Site::all();
        $popRestoran = PopRestoran::all();
        $popHotel = PopHotel::all();
        $PopTour = PopTour::all();
        $PopCuponProduct = PopCuponProduct::all();
        $PopShop = PopShop::all();

        $arr = ['skidki'=>$skidki,'sites'=>$sites,'popRestoran'=>$popRestoran,'popHotel'=>$popHotel,
            'PopTour'=>$PopTour,'PopCuponProduct'=>$PopCuponProduct,'popShop'=>$PopShop];
        return view('welcome',$arr);
    }
    public function getAllToursPage(){
        $allTours = AllTours::all();
        $PopTour = PopTour::all();
        $allToursCategory = null;
        $popToursCategory = null;
        //$allToursCount = count($allTours)+count($PopTour);
        $arr = ['allTours'=>$allTours,'PopTour'=>$PopTour,'allToursCategory'=>$allToursCategory,
            'popToursCategory'=>$popToursCategory];
        return view('pages/allToursPage',$arr);
    }
    //get turs category
//    public function getArmenianTurs(){
//        $allArmenianTours = AllTours::where('toursCountry','');
//        $PopArmenianTour
//        return view('pages/allToursPage',$arr);
//    }
    //get turs category end

    public function getAllSkidkisPage(){
        $Skidki = Skidki::all();
        //$allToursCount = count($allTours)+count($PopTour);
        $arr = ['Skidki'=>$Skidki];
        return view('pages/allSkidkisPage',$arr);
    }

    public function getAllSitesPage(){
        $Sites = Site::all();
        //$allToursCount = count($allTours)+count($PopTour);
        $arr = ['Sites'=>$Sites];
        return view('pages/allSitesPage',$arr);
    }

    public function getAllRestoranPage(){
        $PopRestoran = PopRestoran::all();
        //$allToursCount = count($allTours)+count($PopTour);
        $arr = ['PopRestoran'=>$PopRestoran];
        return view('pages/allRestoranPage',$arr);
    }

    public function getBlog(){
        return view('pages/blog');
    }
    public  function gethowWork(){
        return view('pages/hawWork');
    }
    public  function getForBisnes(){
        return view('pages/forBisnes');
    }
}
