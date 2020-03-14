<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AllCuponProduct;
use App\PopCuponProduct;

class CuponsProdFilterController extends Controller
{
    public function getFurnicher_cupon(){
        $PopCuponProductCategory = null;
        $AllCuponProductCategory = null;
        $PopCuponProduct = null;
        $AllCuponProduct = null;

        return view('allCuponProductPages');
    }
}
