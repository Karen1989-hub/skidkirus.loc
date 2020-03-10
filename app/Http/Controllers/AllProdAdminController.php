<?php

namespace App\Http\Controllers;

use App\AllTours;
use App\AllSkidkis;
use App\AllSite;
use App\AllRestoran;
use App\AllHotel;
use App\AllShop;
use App\AllCuponProduct;
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
        $allRestoran = AllRestoran::all();

        $arr = ['allRestoran'=>$allRestoran];
        return view('adminPages/allRestoran',$arr);
    }
    public function setAllRestoran(Request $request){
        $discount = $request->input('discount');
        $marker = $request->input('marker');
        $description = $request->input('description');
        $name = $request->input('name');
        $count = $request->input('count');
        $oldPrice = $request->input('oldPrice');
        $newPrice = $request->input('newPrice');
        $sitesUrl = $request->input('sitesUrl');
        $imgName = $request->file('imgName2');

        $imgName->move('img/popRestoranImg',$imgName->getClientOriginalName());
        AllRestoran::create(['discount'=>$discount,'marker'=>$marker,'description'=>$description,
        'name'=>$name,'count'=>$count,'oldPrice'=>$oldPrice,'newPrice'=>$newPrice,
        'sitesUrl'=>$sitesUrl,'imageUrl'=>$imgName->getClientOriginalName()]);


        return back();
    }
    public function updateAllRestoran(Request $request){
        $id = $request->input('id');
        $discount = $request->input('discount');
        $marker = $request->input('marker');
        $description = $request->input('description');
        $name = $request->input('name');
        $count = $request->input('count');
        $oldPrice = $request->input('oldPrice');
        $newPrice = $request->input('newPrice');
        $sitesUrl = $request->input('sitesUrl');
        $imgName = $request->file('imgName3');

        $update = AllRestoran::find($id);
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
//         if($imageUrl != ""){
//           $update -> imageUrl = $imageUrl;
//        }

        if($imgName != null){
            if($imgName->getClientOriginalName() != ""){
                //delete old image
                $popRest = AllRestoran::find($id);
                $oldImg = $popRest->imageUrl;
                unlink("img/popRestoranImg/$oldImg");
                //delete old image end

                $update -> imageUrl = $imgName->getClientOriginalName();
                $imgName->move('img/popRestoranImg',$imgName->getClientOriginalName());
            }
        }


          $update -> save();

        return back();
    }
    public function deleteAllRestoran(Request $request){
        $id = $request->input('id');
      $delete = AllRestoran::find($id);
        unlink("img/popRestoranImg/$delete->imageUrl");
      $delete -> delete();

        return back();
    }

    public function getAllHotel(){
        $allHotel = AllHotel::all();

        $arr = ['allHotel'=>$allHotel];
        return view('adminPages/allHotels',$arr);
    }
    public function setAllHotel(Request $request){
        $description = $request->input('description');
        $name = $request->input('name');
        $country = $request->input('country');
        $sitesUrl = $request->input('sitesUrl');
        $popHotel = $request->file('popHotelImg');

        $popHotel->move('img/popHotelImg',$popHotel->getClientOriginalName());
        AllHotel::create(['popHotelImg'=>$popHotel->getClientOriginalName(),
        'description'=>$description,'name'=>$name,'country'=>$country,'sitesUrl'=>$sitesUrl]);

        return back();
    }
    public function updateAllHotel(Request $request){
        $id = $request->input('id');

        $description = $request->input('description');
        $name = $request->input('name');
        $brend = $request->input('brend');
        $sitesUrl = $request->input('sitesUrl');
        $popHotelImg = $request->file('popHotelImg');

        $update = AllHotel::find($id);

        if($description != ""){
            $update -> description = $description;
        }
        if($name != ""){
            $update -> name = $name;
        }

        if($sitesUrl != ""){
            $update -> sitesUrl = $sitesUrl;
        }
        if($brend != ""){
            $update -> brend = $brend;
        }

        if($popHotelImg != null){
            if($popHotelImg->getClientOriginalName() != ""){
                //delete old image
                $popHotel = AllHotel::find($id);
                $oldImg = $popHotel->popHotelImg;
                unlink("img/popHotelImg/$oldImg");
                //delete old image end

                $update -> popHotelImg = $popHotelImg->getClientOriginalName();
                $popHotelImg->move('img/popHotelImg',$popHotelImg->getClientOriginalName());
            }
        }
        $update -> save();
        return back();
    }
    public function deleteAllHotel(Request $request){
        $id = $request->input('id');
        $delete = AllHotel::find($id);
        unlink("img/popHotelImg/$delete->popHotelImg");
        $delete -> delete();

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
        $allCuponProduct = AllCuponProduct::all();

        $arr = ['allCuponProduct'=>$allCuponProduct];
        return view('adminPages/allCuponProduct',$arr);
    }
    public function setAllCuponProduct(Request $request){
        $discount = $request->input('discount');
        $marker = $request->input('marker');
        $description = $request->input('description');
        $name = $request->input('name');
        $popCuponProductCategory = $request->input('popCuponProductCategory');
        $count = $request->input('count');
        $oldPrice = $request->input('oldPrice');
        $newPrice = $request->input('newPrice');
        $sitesUrl = $request->input('sitesUrl');
        //$imageUrl = $request->input('imageUrl');
        $popCuponProductImg = $request->file('popCuponProductImg');
        //dd($popCuponProductCategory);
        $popCuponProductImg->move('img/popCuponProductImg',$popCuponProductImg->getClientOriginalName());
        AllCuponProduct::create(['discount'=>$discount,'marker'=>$marker,'description'=>$description,
            'name'=>$name,'count'=>$count,'oldPrice'=>$oldPrice,'newPrice'=>$newPrice,
            'sitesUrl'=>$sitesUrl,'productCategory'=>$popCuponProductCategory,
            'imageUrl'=>$popCuponProductImg->getClientOriginalName()]);
        return back();
    }
    public function updateAllCuponProduct(Request $request){
        $id = $request->input('id');
        $discount = $request->input('discount');
        $marker = $request->input('marker');
        $description = $request->input('description');
        $name = $request->input('name');
        $popCuponProductCategory = $request->input('popCuponProductCategory');
        $count = $request->input('count');
        $oldPrice = $request->input('oldPrice');
        $newPrice = $request->input('newPrice');
        $sitesUrl = $request->input('sitesUrl');
        $popCuponProductImg = $request->file('popCuponProductImg');

        $update = AllCuponProduct::find($id);
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
        if($popCuponProductCategory != ""){
            $update -> popCuponProductCategory = $popCuponProductCategory;
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
        if($popCuponProductImg != null){
            if($popCuponProductImg->getClientOriginalName() != ""){
                //delete old image
                $popCupon = AllCuponProduct::find($id);
                $oldImg = $popCupon->imageUrl;
                unlink("img/popCuponProductImg/$oldImg");
                //delete old image end

                $update -> imageUrl = $popCuponProductImg->getClientOriginalName();
                $popCuponProductImg->move('img/popCuponProductImg',$popCuponProductImg->getClientOriginalName());
            }
        }

        $update -> save();
        return back();
    }
    public function deleteAllCuponProduct(){
        return back();
    }

    public function getAllShop(){
        $allShop = AllShop::all();

        $arr = ['allShop'=>$allShop];
        return view('adminPages/allShops',$arr);
    }
    public function setAllShop(Request $request){
        $description = $request->input('description');
        $name = $request->input('name');
        $brend = $request->input('brend');
        $sitesUrl = $request->input('sitesUrl');
        $popShopImg = $request->file('popShopImg');

        $popShopImg ->move('img/popShop',$popShopImg ->getClientOriginalName());
        AllShop::create(['description'=>$description,'name'=>$name,'brend'=>$brend,
            'sitesUrl'=>$sitesUrl,'imageUrl'=>$popShopImg ->getClientOriginalName()]);
        return back();
    }
    public function updateAllShop(Request $request){
        $id = $request->input('id');
        $description = $request->input('description');
        $name = $request->input('name');
        $brend = $request->input('brend');
        $sitesUrl = $request->input('sitesUrl');
        $popShopImg = $request->file('popShopImg');

        $update = AllShop::find($id);

        if($description != ""){
            $update -> description = $description;
        }
        if($name != ""){
            $update -> name = $name;
        }

        if($sitesUrl != ""){
            $update -> sitesUrl = $sitesUrl;
        }
        if($brend != ""){
            $update -> brend = $brend;
        }
        if($popShopImg != null){
            if($popShopImg->getClientOriginalName() != ""){
                //delete old image
                $popShop = AllShop::find($id);
                $oldImg = $popShop->imageUrl;
                unlink("img/popShop/$oldImg");
                //delete old image end

                $update -> imageUrl = $popShopImg->getClientOriginalName();
                $popShopImg->move('img/popShop',$popShopImg->getClientOriginalName());
            }
        }

        $update -> save();
        return back();
    }
    public function deleteAllShop(Request $request){
        $id = $request->input('id');

        $delete = AllShop::find($id);
        unlink("img/popShop/$delete->imageUrl");
        $delete -> delete();
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
