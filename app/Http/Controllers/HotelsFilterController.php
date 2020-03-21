<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AllHotel;
use App\PopHotel;

class HotelsFilterController extends Controller
{
    public function getMosskow_hotels(){
        $popHotelcategory = PopHotel::where('country','Моссква')->get();
        $allHotelcategory = AllHotel::where('country','Моссква')->get();
        $popHotel = null;
        $allHotel = null;

        $arr = ['popHotel'=>$popHotel,'allHotel'=>$allHotel,
            'popHotelcategory'=>$popHotelcategory,'allHotelcategory'=>$allHotelcategory];
        return view('pages/allHotelsPage',$arr);
    }

    public function getErevan_hotels(){
        $popHotelcategory = PopHotel::where('country','Ереван')->get();
        $allHotelcategory = AllHotel::where('country','Ереван')->get();
        $popHotel = null;
        $allHotel = null;

        $arr = ['popHotel'=>$popHotel,'allHotel'=>$allHotel,
            'popHotelcategory'=>$popHotelcategory,'allHotelcategory'=>$allHotelcategory];
        return view('pages/allHotelsPage',$arr);
    }

    public function getPodmoskowe_hotels(){
        $popHotelcategory = PopHotel::where('country','Подмосковье')->get();
        $allHotelcategory = AllHotel::where('country','Подмосковье')->get();
        $popHotel = null;
        $allHotel = null;

        $arr = ['popHotel'=>$popHotel,'allHotel'=>$allHotel,
            'popHotelcategory'=>$popHotelcategory,'allHotelcategory'=>$allHotelcategory];
        return view('pages/allHotelsPage',$arr);
    }
}
