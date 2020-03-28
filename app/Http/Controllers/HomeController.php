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
use App\Beauty;
use App\ServicRestoran;
use App\ServicConstruction;

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
        $popHotelcategory = null;
        $allHotelcategory = null; 
        //$allToursCount = count($allTours)+count($PopTour);
        $arr = ['popHotel'=>$popHotel,'allHotel'=>$allHotel,
    'popHotelcategory'=>$popHotelcategory,'allHotelcategory'=>$allHotelcategory];
        return view('pages/allHotelsPage',$arr);
    }

    public function getAllCuponProductPage(){
        $PopCuponProduct =PopCuponProduct::all();
        $AllCuponProduct = allCuponProduct::all();
        $popCuponProductCategory = null;
        $allCuponProductCategory = null;
        //$allToursCount = count($allTours)+count($PopTour);
        $arr = ['PopCuponProduct'=>$PopCuponProduct,'AllCuponProduct'=>$AllCuponProduct,
    'popCuponProductCategory'=>$popCuponProductCategory,'allCuponProductCategory'=>$allCuponProductCategory];
        return view('pages/allCuponProductPages',$arr);
    }

    public function getAllShopsPage(){
        $popShop = PopShop::all();
        $allShopsPage = AllShop::all();
        $allShopsCategory = null;
        $popShopsCategory = null;
        //$allToursCount = count($allTours)+count($PopTour);
        $arr = ['allShopsPage'=>$allShopsPage,'popShop'=>$popShop,
            'allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory];
        return view('pages/allShopPage',$arr);
    }

//Services pages start

    public function getBeautysPage(){
        $beautys = Beauty::all();

        $arr = ['beautys'=>$beautys];
        return view('pages/servicesPages/beauty',$arr);
    }
    
    public function getServicRestoranPage(){
        $servicRestoran = ServicRestoran::all();

        $arr = ['servicRestoran'=>$servicRestoran];
        return view('pages/servicesPages/servicRestoran',$arr);
    }

    public function getServicConstructionPage(){
        $servicConstruction = ServicConstruction::all();

        $arr = ['servicConstruction'=>$servicConstruction];
        return view('pages/servicesPages/servicConstruction',$arr);
    }


//Services pages end









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
