<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AllCuponProduct;
use App\PopCuponProduct;

class CuponsProdFilterController extends Controller
{
    public function getFurnicher_cupon(){
        $popCuponProductCategory = PopCuponProduct::where('productCategory','furniture')->get();
        $allCuponProductCategory = AllCuponProduct::where('productCategory','furniture')->get();
        $PopCuponProduct = null;
        $AllCuponProduct = null;

        $arr = ['popCuponProductCategory'=>$popCuponProductCategory,'allCuponProductCategory'=>$allCuponProductCategory,
        'PopCuponProduct'=>$PopCuponProduct,'AllCuponProduct'=>$AllCuponProduct];
        return view('pages/allCuponProductPages',$arr);
    }

    public function getForHome_cupon(){
        $popCuponProductCategory = PopCuponProduct::where('productCategory','forHome')->get();
        $allCuponProductCategory = AllCuponProduct::where('productCategory','forHome')->get();
        $PopCuponProduct = null;
        $AllCuponProduct = null;

        $arr = ['popCuponProductCategory'=>$popCuponProductCategory,'allCuponProductCategory'=>$allCuponProductCategory,
        'PopCuponProduct'=>$PopCuponProduct,'AllCuponProduct'=>$AllCuponProduct];
        return view('pages/allCuponProductPages',$arr);
    }
    
    public function getElectronics_cupon(){
        $popCuponProductCategory = PopCuponProduct::where('productCategory','Electronics')->get();
        $allCuponProductCategory = AllCuponProduct::where('productCategory','Electronics')->get();
        $PopCuponProduct = null;
        $AllCuponProduct = null;

        $arr = ['popCuponProductCategory'=>$popCuponProductCategory,'allCuponProductCategory'=>$allCuponProductCategory,
        'PopCuponProduct'=>$PopCuponProduct,'AllCuponProduct'=>$AllCuponProduct];
        return view('pages/allCuponProductPages',$arr);
    }

    public function getHealth_cupon(){
        $popCuponProductCategory = PopCuponProduct::where('productCategory','Health')->get();
        $allCuponProductCategory = AllCuponProduct::where('productCategory','Health')->get();
        $PopCuponProduct = null;
        $AllCuponProduct = null;

        $arr = ['popCuponProductCategory'=>$popCuponProductCategory,'allCuponProductCategory'=>$allCuponProductCategory,
        'PopCuponProduct'=>$PopCuponProduct,'AllCuponProduct'=>$AllCuponProduct];
        return view('pages/allCuponProductPages',$arr);
    }

    public function getFood_cupon(){
        $popCuponProductCategory = PopCuponProduct::where('productCategory','Food')->get();
        $allCuponProductCategory = AllCuponProduct::where('productCategory','Food')->get();
        $PopCuponProduct = null;
        $AllCuponProduct = null;

        $arr = ['popCuponProductCategory'=>$popCuponProductCategory,'allCuponProductCategory'=>$allCuponProductCategory,
        'PopCuponProduct'=>$PopCuponProduct,'AllCuponProduct'=>$AllCuponProduct];
        return view('pages/allCuponProductPages',$arr);
    }

    public function getBeauty_cupon(){
        $popCuponProductCategory = PopCuponProduct::where('productCategory','beauty')->get();
        $allCuponProductCategory = AllCuponProduct::where('productCategory','beauty')->get();
        $PopCuponProduct = null;
        $AllCuponProduct = null;

        $arr = ['popCuponProductCategory'=>$popCuponProductCategory,'allCuponProductCategory'=>$allCuponProductCategory,
        'PopCuponProduct'=>$PopCuponProduct,'AllCuponProduct'=>$AllCuponProduct];
        return view('pages/allCuponProductPages',$arr);
    }

    public function getClothes_cupon(){
        $popCuponProductCategory = PopCuponProduct::where('productCategory','clothes')->get();
        $allCuponProductCategory = AllCuponProduct::where('productCategory','clothes')->get();
        $PopCuponProduct = null;
        $AllCuponProduct = null;

        $arr = ['popCuponProductCategory'=>$popCuponProductCategory,'allCuponProductCategory'=>$allCuponProductCategory,
        'PopCuponProduct'=>$PopCuponProduct,'AllCuponProduct'=>$AllCuponProduct];
        return view('pages/allCuponProductPages',$arr);
    }

    public function getForChildren_cupon(){
        $popCuponProductCategory = PopCuponProduct::where('productCategory','forChildren')->get();
        $allCuponProductCategory = AllCuponProduct::where('productCategory','forChildren')->get();
        $PopCuponProduct = null;
        $AllCuponProduct = null;

        $arr = ['popCuponProductCategory'=>$popCuponProductCategory,'allCuponProductCategory'=>$allCuponProductCategory,
        'PopCuponProduct'=>$PopCuponProduct,'AllCuponProduct'=>$AllCuponProduct];
        return view('pages/allCuponProductPages',$arr);
    }

    public function getSuvenirs_cupon(){
        $popCuponProductCategory = PopCuponProduct::where('productCategory','Suvenirs')->get();
        $allCuponProductCategory = AllCuponProduct::where('productCategory','Suvenirs')->get();
        $PopCuponProduct = null;
        $AllCuponProduct = null;

        $arr = ['popCuponProductCategory'=>$popCuponProductCategory,'allCuponProductCategory'=>$allCuponProductCategory,
        'PopCuponProduct'=>$PopCuponProduct,'AllCuponProduct'=>$AllCuponProduct];
        return view('pages/allCuponProductPages',$arr);
    }

    public function getFlowers_cupon(){
        $popCuponProductCategory = PopCuponProduct::where('productCategory','Flowers')->get();
        $allCuponProductCategory = AllCuponProduct::where('productCategory','Flowers')->get();
        $PopCuponProduct = null;
        $AllCuponProduct = null;

        $arr = ['popCuponProductCategory'=>$popCuponProductCategory,'allCuponProductCategory'=>$allCuponProductCategory,
        'PopCuponProduct'=>$PopCuponProduct,'AllCuponProduct'=>$AllCuponProduct];
        return view('pages/allCuponProductPages',$arr);
    }

    public function getBalloons_cupon(){
        $popCuponProductCategory = PopCuponProduct::where('productCategory','Balloons')->get();
        $allCuponProductCategory = AllCuponProduct::where('productCategory','Balloons')->get();
        $PopCuponProduct = null;
        $AllCuponProduct = null;

        $arr = ['popCuponProductCategory'=>$popCuponProductCategory,'allCuponProductCategory'=>$allCuponProductCategory,
        'PopCuponProduct'=>$PopCuponProduct,'AllCuponProduct'=>$AllCuponProduct];
        return view('pages/allCuponProductPages',$arr);
    }

    public function getPlus18_cupon(){
        $popCuponProductCategory = PopCuponProduct::where('productCategory','plus18')->get();
        $allCuponProductCategory = AllCuponProduct::where('productCategory','plus18')->get();
        $PopCuponProduct = null;
        $AllCuponProduct = null;

        $arr = ['popCuponProductCategory'=>$popCuponProductCategory,'allCuponProductCategory'=>$allCuponProductCategory,
        'PopCuponProduct'=>$PopCuponProduct,'AllCuponProduct'=>$AllCuponProduct];
        return view('pages/allCuponProductPages',$arr);
    }
}
