<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AllHotel;
use App\PopHotel;

class HotelsFilterController extends Controller
{
    public function getMosskow_hotels(){
        $popHotelcategory = PopHotel::where('')
        $allHotelcategory =
        $popHotel = null;
        $allHotel = null;

        $arr = ['popHotel'=>$popHotel,'allHotel'=>$allHotel];
        return view('pages/allHotelsPage',$arr);
    }
}
