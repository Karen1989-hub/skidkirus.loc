<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AllShop;
use App\PopShop;


class ShopsFilterController extends Controller
{
    public function getBOMBBARBrend(){
    $allShopsCategory = AllShop::where('brend','BOMBBAR')->get();
    $popShopsCategory = PopShop::where('brend','BOMBBAR')->get();
        $popShop = null;
        $allShopsPage = null;

    $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
        'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getMODIS_Brend(){
        $allShopsCategory = AllShop::where('brend','MODIS')->get();
        $popShopsCategory = PopShop::where('brend','MODIS')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getFiNN_FLARE_Brend(){
        $allShopsCategory = AllShop::where('brend','FiNN FLARE')->get();
        $popShopsCategory = PopShop::where('brend','FiNN FLARE')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getPampers_Brend(){
        $allShopsCategory = AllShop::where('brend','Pampers')->get();
        $popShopsCategory = PopShop::where('brend','Pampers')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getLitres_Brend(){
        $allShopsCategory = AllShop::where('brend','ЛитРес')->get();
        $popShopsCategory = PopShop::where('brend','ЛитРес')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getDomovoy_Brend(){
        $allShopsCategory = AllShop::where('brend','Домовой')->get();
        $popShopsCategory = PopShop::where('brend','Домовой')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getBook24_Brend(){
        $allShopsCategory = AllShop::where('brend','Book24')->get();
        $popShopsCategory = PopShop::where('brend','Book24')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getRayton_Brend(){
        $allShopsCategory = AllShop::where('brend','Райтон')->get();
        $popShopsCategory = PopShop::where('brend','Райтон')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getLinzmaster_Brend(){
        $allShopsCategory = AllShop::where('brend','Линзмастер')->get();
        $popShopsCategory = PopShop::where('brend','Линзмастер')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getOrmatek_Brend(){
        $allShopsCategory = AllShop::where('brend','Орматек')->get();
        $popShopsCategory = PopShop::where('brend','Орматек')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getM_Video_Brend(){
        $allShopsCategory = AllShop::where('brend','М.Видео')->get();
        $popShopsCategory = PopShop::where('brend','М.Видео')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getTOY_RU_Brend(){
        $allShopsCategory = AllShop::where('brend','TOY.RU')->get();
        $popShopsCategory = PopShop::where('brend','TOY.RU')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getFran_Brend(){
        $allShopsCategory = AllShop::where('brend','Фран')->get();
        $popShopsCategory = PopShop::where('brend','Фран')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getSvaznoy_Brend(){
        $allShopsCategory = AllShop::where('brend','Связной')->get();
        $popShopsCategory = PopShop::where('brend','Связной')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getBronickiyUvelir_Brend(){
        $allShopsCategory = AllShop::where('brend','Бронницкий ювелир')->get();
        $popShopsCategory = PopShop::where('brend','Бронницкий ювелир')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getVseInstrumenti_Brend(){
        $allShopsCategory = AllShop::where('brend','Все инструменты')->get();
        $popShopsCategory = PopShop::where('brend','Все инструменты')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getYves_Rocher_Brend(){
        $allShopsCategory = AllShop::where('brend','Yves Rocher')->get();
        $popShopsCategory = PopShop::where('brend','Yves Rocher')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getPuma_Brend(){
        $allShopsCategory = AllShop::where('brend','Puma')->get();
        $popShopsCategory = PopShop::where('brend','Puma')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getTheOutlet_Brend(){
        $allShopsCategory = AllShop::where('brend','TheOutlet')->get();
        $popShopsCategory = PopShop::where('brend','TheOutlet')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
    public function getSozvezdie_Brend(){
        $allShopsCategory = AllShop::where('brend','Созвездие красоты')->get();
        $popShopsCategory = PopShop::where('brend','Созвездие красоты')->get();
        $popShop = null;
        $allShopsPage = null;

        $arr = ['allShopsCategory'=>$allShopsCategory,'popShopsCategory'=>$popShopsCategory,
            'popShop'=>$popShop,'allShopsPage'=>$allShopsPage];
        return view('pages/allShopPage',$arr);
    }
}
