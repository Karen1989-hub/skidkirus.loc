<?php

namespace App\Http\Controllers;

use App\AllTours;
use Illuminate\Http\Request;

class AllProdAdminController extends Controller
{
    public function getAllSkidkis(){
        return view('adminPages/allSkidkis');
    }
    public function getAllSites(){
        return view('adminPages/allSites');
    }
    public function getAllRestoran(){
        return view('adminPages/allRestoran');
    }
    public function getAllHotel(){
        return view('adminPages/allHotels');
    }
    
    public function getAllTours(){
        $allTours = AllTours::all();

        $arr = ['allTours'=>$allTours];
        return view('adminPages/allTours',$arr);
    }
    public function setAllTours(Request $request){
        $allTourName = $request->input('name');
        $allTourInfo = $request->input('description');
        $sitesUrl = $request->input('sitesUrl');
        $allToursCountry = $request->input('allToursCountry');
        $allToursImg = $request->file('allToursImg');

        $allToursImg->move('img/allTours', $allToursImg->getClientOriginalName());
        AllTours::create(['nameImg'=>$allToursImg->getClientOriginalName(),
            'name'=>$allTourName,'info'=>$allTourInfo,'sitesUrl'=>$sitesUrl,
            'toursCountry'=>$allToursCountry]);
        return back();
    }
    public function updateAllTours(Request $request){
        $id = $request->input('id');

        $allToursImg = $request->file('allToursImg');
        $description = $request->input('description');
        $allToursCountry = $request->input('allToursCountry');
        $name = $request->input('name');
        $sitesUrl = $request->input('sitesUrl');

        $update = AllTours::find($id);

        if( $allToursImg != null){
            if($allToursImg->getClientOriginalName() != ""){
                //delete old image
                $allTours = AllTours::find($id);
                $oldImg = $allTours->nameImg;
                unlink("img/allTours/$oldImg");
                //delete old image end

                $update -> nameImg = $allToursImg->getClientOriginalName();
                $allToursImg->move('img/allTours',$allToursImg->getClientOriginalName());
            }
        }
        if($description != ""){
            $update->info = $description;
        }
        if($name != ""){
            $update->name = $name;
        }
        if($allToursCountry != ""){
            $update->toursCountry = $allToursCountry;
        }
        if($sitesUrl != ""){
            $update->sitesUrl = $sitesUrl;
        }
        $update -> save();

        return back();
    }

    public function deleteAllTours(Request $request){
        $id = $request->input('id');
        $delete = AllTours::find($id);
        unlink("img/allTours/$delete->nameImg");
        $delete -> delete();

        return back();
    }

    public function getAllCuponProduct(){
        return view('adminPages/allCuponProduct');
    }
    public function getAllShop(){
        return view('adminPages/allShops');
    }

    public function f1(){
        $prod = "product1";
        $allTours = null;
        $PopTour = null;
        $arr = ['prod'=>$prod,'allTours'=>$allTours,'PopTour'=>$PopTour];
       return view('pages/allToursPage',$arr);
    }
}
