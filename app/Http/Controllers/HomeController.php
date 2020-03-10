<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Skidki;
use App\AllSkidkis;
use App\Site;
use App\AllSite;
use App\PopRestoran;
use App\AllRestoran;
use App\PopHotel;
use App\AllHotel;
use App\PopTour;
use App\AllTours;
use App\PopCuponProduct;
use App\AllCuponProduct;
use App\PopShop;
use App\AllShop;

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
        $allSkidki = AllSkidkis::all();
        //$allToursCount = count($allTours)+count($PopTour);
        $arr = ['Skidki'=>$Skidki,'allSkidki'=>$allSkidki];
        return view('pages/allSkidkisPage',$arr);
    }

    public function getAllSitesPage(){
        $Sites = Site::all();
        $AllSite = AllSite::all();
        //$allToursCount = count($allTours)+count($PopTour);
        $arr = ['Sites'=>$Sites,'AllSite'=>$AllSite];
        return view('pages/allSitesPage',$arr);
    }

    public function getAllRestoranPage(){
        $PopRestoran = PopRestoran::all();
        $AllRestoran = AllRestoran::all();
        //$allToursCount = count($allTours)+count($PopTour);
        $arr = ['PopRestoran'=>$PopRestoran,'AllRestoran'=>$AllRestoran];
        return view('pages/allRestoranPage',$arr);
    }

    public function getAllHotelPage(){
        $popHotel = PopHotel::all();  
        $allHotel = AllHotel::all();     
        //$allToursCount = count($allTours)+count($PopTour);
        $arr = ['popHotel'=>$popHotel,'allHotel'=>$allHotel];
        return view('pages/allHotelsPage',$arr);
    }

    public function getAllCuponProductPage(){
        $PopCuponProduct =PopCuponProduct::all();
        $allCuponProduct = allCuponProduct::all();
        //$allToursCount = count($allTours)+count($PopTour);
        $arr = ['PopCuponProduct'=>$PopCuponProduct,'allCuponProduct'=>$allCuponProduct];
        return view('pages/allCuponProductPages',$arr);
    }

    public function getAllShopsPage(){
        $popShop = PopShop::all();
        $getAllShopsPage = AllShop::all();
        //$allToursCount = count($allTours)+count($PopTour);
        $arr = ['getAllShopsPage'=>$getAllShopsPage,'popShop'=>$popShop];
        return view('pages/allShopPage',$arr);
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
