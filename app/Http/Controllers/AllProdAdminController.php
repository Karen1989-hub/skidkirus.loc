<?php

namespace App\Http\Controllers;

use App\AllTours;
use App\AllSkidkis;
use App\AllSite;
use App\
use Illuminate\Http\Request;

class AllProdAdminController extends Controller
{
    public function getAllSkidkis(){
        $allSkidkis = AllSkidkis::all();

        $arr = ['allSkidkis'=>$allSkidkis];
        return view('adminPages/allSkidkis',$arr);
    }
    public function setAllSkidkis(Request $request){
        $discount = $request->input('discount');
        $marker = $request->input('marker');
        $description = $request->input('description');
        $name = $request->input('name');
        $count = $request->input('count');
        $oldPrice = $request->input('oldPrice');
        $newPrice = $request->input('newPrice');
        $sitesUrl = $request->input('sitesUrl');
        //$imageUrl = $request->input('imageUrl');
        $imgName = $request->file('imgName');

        $imgName->move('img/skidkiImg',$imgName->getClientOriginalName());
        AllSkidkis::create(['discount'=>$discount,'marker'=>$marker,'description'=>$description,
            'name'=>$name,'count'=>$count,'oldPrice'=>$oldPrice,'newPrice'=>$newPrice,
            'sitesUrl'=>$sitesUrl,'imageUrl'=>$imgName->getClientOriginalName()]);

        return back();
    }
    public function updateAllSkidkis(Request $request){
        $id = $request->input('id');
        $discount = $request->input('discount');
        $marker = $request->input('marker');
        $description = $request->input('description');
        $name = $request->input('name');
        $count = $request->input('count');
        $oldPrice = $request->input('oldPrice');
        $newPrice = $request->input('newPrice');
        $sitesUrl = $request->input('sitesUrl');
        $imgName = $request->file('imgName2');

        $update = AllSkidkis::find($id);
        if($discount != ""){
            $update -> discount = $discount;
        }
        if($marker != ""){
            $update -> marker = $marker;
        }
        if($description != ""){
            $update -> description = $description;
        }
        if($name != ""){
            $update -> name = $name;
        }
        if($count != ""){
            $update -> count = $count;
        }
        if($oldPrice != ""){
            $update -> oldPrice = $oldPrice;
        }
        if($newPrice != ""){
            $update -> newPrice = $newPrice;
        }
        if($sitesUrl != ""){
            $update -> sitesUrl = $sitesUrl;
        }
        if($imgName != null){
            if($imgName->getClientOriginalName() != ""){
                //delete old image
                $skidki = AllSkidkis::find($id);
                $oldImg = $skidki->imageUrl;
                unlink("img/skidkiImg/$oldImg");
                //delete old image end

                $update -> imageUrl = $imgName->getClientOriginalName();
                $imgName->move('img/skidkiImg',$imgName->getClientOriginalName());
            }
        }

        $update -> save();

        return back();
    }
    public function deleteAllSkidkis(Request $request){
        $id = $request->input('id');
        $delete = AllSkidkis::find($id);
        unlink("img/skidkiImg/$delete->imageUrl");
        $delete -> delete();

        return back();
    }

    public function getAllSites(){
        $allSites = AllSite::all();
        $arr = ['allSites'=>$allSites];

        return view('adminPages/allSites',$arr);
    }
    public function setAllSites(Request $request){
        $discount = $request->input('discount');
        $marker = $request->input('marker');
        $description = $request->input('description');
        $name = $request->input('name');
        $count = $request->input('count');
        $oldPrice = $request->input('oldPrice');
        $newPrice = $request->input('newPrice');
        $sitesUrl = $request->input('sitesUrl');
        $imageUrl = $request->input('imageUrl');

        AllSite::create(['discount'=>$discount,'marker'=>$marker,'description'=>$description,
            'name'=>$name,'count'=>$count,'oldPrice'=>$oldPrice,'newPrice'=>$newPrice,
            'sitesUrl'=>$sitesUrl,'imageUrl'=>$imageUrl]);
        return back();
    }
    public function updateAllSites(Request $request){
        $id = $request->input('id');
        $discount = $request->input('discount');
        $marker = $request->input('marker');
        $description = $request->input('description');
        $name = $request->input('name');
        $count = $request->input('count');
        $oldPrice = $request->input('oldPrice');
        $newPrice = $request->input('newPrice');
        $sitesUrl = $request->input('sitesUrl');
        $imageUrl = $request->input('imageUrl');

        $update = AllSite::find($id);
        if($discount != ""){
            $update -> discount = $discount;
        }
        if($marker != ""){
            $update -> marker = $marker;
        }
        if($description != ""){
            $update -> description = $description;
        }
        if($name != ""){
            $update -> name = $name;
        }
        if($count != ""){
            $update -> count = $count;
        }
        if($oldPrice != ""){
            $update -> oldPrice = $oldPrice;
        }
        if($newPrice != ""){
            $update -> newPrice = $newPrice;
        }
        if($sitesUrl != ""){
            $update -> sitesUrl = $sitesUrl;
        }
        if($imageUrl != ""){
            $update -> imageUrl = $imageUrl;
        }
        $update -> save();

        return back();
    }
    public function deleteAllSites(Request $request){
        $id = $request->input('id');
        $delete = AllSite::find($id);
        $delete -> delete();
        return back();
    }

    public function getAllRestoran(){
        return view('adminPages/allRestoran');
    }
    public function setAllRestoran(){
        return back();
    }
    public function updateAllRestoran(){
        return back();
    }
    public function deleteAllRestoran(){
        return back();
    }

    public function getAllHotel(){
        return view('adminPages/allHotels');
    }
    public function setAllHotel(){
        return back();
    }
    public function updateAllHotel(){
        return back();
    }
    public function deleteAllHotel(){
        return back();
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
    public function setAllCuponProduct(){
        return back();
    }
    public function updateAllCuponProduct(){
        return back();
    }
    public function deleteAllCuponProduct(){
        return back();
    }

    public function getAllShop(){
        return view('adminPages/allShops');
    }
    public function setAllShop(){
        return back();
    }
    public function updateAllShop(){
        return back();
    }
    public function deleteAllShop(){
        return back();
    }

    public function f1(){
        $prod = "product1";
        $allTours = null;
        $PopTour = null;
        $arr = ['prod'=>$prod,'allTours'=>$allTours,'PopTour'=>$PopTour];
       return view('pages/allToursPage',$arr);
    }
}
