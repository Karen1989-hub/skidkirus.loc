<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PopTour;
use App\AllTours;

class PagesFilterController extends Controller
{
    public function getArmenianTours(){
        $allToursCategory = AllTours::where('toursCountry',"Armenia")->get();
        $popToursCategory = PopTour::where('toursCountry',"Armenia")->get();
        //dd($armPopTours);
        $allTours = null;
        $PopTour = null;
        $arr = ['allToursCategory'=>$allToursCategory,'popToursCategory'=>$popToursCategory,
            'allTours'=>$allTours, 'PopTour'=>$PopTour];
        return view('pages/allToursPage',$arr);
    }

    public function getRussianTours(){
        $allToursCategory = AllTours::where('toursCountry',"Russia")->get();
        $popToursCategory = PopTour::where('toursCountry',"Russia")->get();
        //dd($armPopTours);
        $allTours = null;
        $PopTour = null;
        $arr = ['allToursCategory'=>$allToursCategory,'popToursCategory'=>$popToursCategory,
            'allTours'=>$allTours, 'PopTour'=>$PopTour];
        return view('pages/allToursPage',$arr);
    }
}
