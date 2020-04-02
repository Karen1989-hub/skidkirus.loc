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

class SearchController extends Controller
{
    public function searchPages(Request $request){
        $name = $request->input('name');
        if($name == "инстаграм"){
            return redirect('getAllSkidkisPage');
        } else if($name == "сайты"){
            return redirect('getAllSitesPage');
        } else if($name == "рестораны"){
            return redirect('getAllRestoranPage');
        } else if($name == "отели"){
            return redirect('getAllHotelPage');
        } else if($name == "туры"){
            return redirect('getAllToursPage');
        }  else if($name == "товары по купонам"){
            return redirect('getAllCuponProductPage');
        } else if($name == "магазины" || $name == "магазин"){
            return redirect('getAllShopsPage');
        } else if($name == "красота"){
            return redirect('getBeautysPage');
        }   else if($name == "рестораны и кафе"){
            return redirect('getServicRestoranPage');
        }   else if($name == "строитьелство"){
            return redirect('getServicConstructionPage');
        }
    }
}
