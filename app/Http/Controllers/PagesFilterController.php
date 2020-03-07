<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PopTour;
use App\AllTours;

class PagesFilterController extends Controller
{
    public function getArmenianTours(){
        $armAllTours = AllTours::where('toursCountry',"Armenia")->get();
        $armPopTours = PopTour::where('toursCountry',"Armenia")->get();
        //dd($armPopTours);
        $allTours = null;
        $PopTour = null;
        $arr = ['armAllTours'=>$armAllTours,'armPopTours'=>$armPopTours,
            'allTours'=>$allTours, 'PopTour'=>$PopTour];
        return view('pages/allToursPage',$arr);
    }
}
