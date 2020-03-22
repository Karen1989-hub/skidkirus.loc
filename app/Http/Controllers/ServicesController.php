<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beauty;

class ServicesController extends Controller
{
    public function getBeauty(){
        $beauty = Beauty::all();

        $arr = ['beautys'=>$beauty];
        return view('adminServicesPages/setBeauty',$arr);
    }

    public function setBeauty(Request $request){
        $name = $request->input('name');
        $description
        $sitesUrl
        $

        return view('adminServicesPages/setBeauty');
    }

    public function updateBeauty(){
        return view('adminServicesPages/setBeauty');
    }

    public function deleteBeauty(){
        return view('adminServicesPages/setBeauty');
    }
}


