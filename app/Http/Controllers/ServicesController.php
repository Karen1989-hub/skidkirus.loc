<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beauty;

class ServicesController extends Controller
{
    getBeauty_pages(){
        $beauty = Beauty::all()
        return view('adminServicesPages/setBeauty');
    }
}


