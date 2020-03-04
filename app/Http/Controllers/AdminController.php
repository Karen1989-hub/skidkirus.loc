<?php

namespace App\Http\Controllers;

use App\PopShop;
use Illuminate\Http\Request;
use App\Admin;
use App\Skidki;
use App\Site;
use App\PopRestoran;
use App\PopHotel;
use App\PopTour;
use App\PopCuponProduct;

class AdminController extends Controller
{

    public function index(){
        return view('admin');
    }

    public function checkAdmin(Request $request){
        $userName = $request->input('adminName');
        $password = $request->input('password');
        $row = Admin::all();
        if($row[0]->login==$userName && $row[0]->password==$password){
            return redirect('adminPage');
        } else {
           return back();
        }
    }

    public function setSitsPage(){
        $sites = Site::all();

        $arr = ['sites'=>$sites];
        return view('setSitsPage',$arr);
    }

    public function setSitsList(Request $request){
        $discount = $request->input('discount');
        $marker = $request->input('marker');
        $description = $request->input('description');
        $name = $request->input('name');
        $count = $request->input('count');
        $oldPrice = $request->input('oldPrice');
        $newPrice = $request->input('newPrice');
        $sitesUrl = $request->input('sitesUrl');
        $imageUrl = $request->input('imageUrl');

        Site::create(['discount'=>$discount,'marker'=>$marker,'description'=>$description,
        'name'=>$name,'count'=>$count,'oldPrice'=>$oldPrice,'newPrice'=>$newPrice,
        'sitesUrl'=>$sitesUrl,'imageUrl'=>$imageUrl]);

        return back();
    }

    public function updateSitsList(Request $request){
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

        $update = Site::find($id);
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

    public function deleteSitsList(Request $request){
      $id = $request->input('id');
      $delete = Site::find($id);

      $delete -> delete();

      return back();
    }

    public function adminPage(){
        $skidki = Skidki::all();
        $arr = ['skidki'=>$skidki];
        return view('adminPage',$arr);
    }

    public function setSkidki(Request $request){
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
         Skidki::create(['discount'=>$discount,'marker'=>$marker,'description'=>$description,
        'name'=>$name,'count'=>$count,'oldPrice'=>$oldPrice,'newPrice'=>$newPrice,
        'sitesUrl'=>$sitesUrl,'imageUrl'=>$imgName->getClientOriginalName()]);

        return back();
    }

    public function updateSkidki(Request $request){
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

        $update = Skidki::find($id);
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
                 $skidki = Skidki::find($id);
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

     public function deleteSkidki(Request $request){
      $id = $request->input('id');
      $delete = Skidki::find($id);
         unlink("img/skidkiImg/$delete->imageUrl");
      $delete -> delete();

      return back();
    }

    //popular restoran
    public function getPopularRestoran(){
       $popRestoran = PopRestoran::all();
      //dd($popRestoran);
       $arr = ['popRestoran'=>$popRestoran];
      return view('getPopRestor',$arr);
    }

    public function setPopRestoran(Request $request){
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
         PopRestoran::create(['discount'=>$discount,'marker'=>$marker,'description'=>$description,
        'name'=>$name,'count'=>$count,'oldPrice'=>$oldPrice,'newPrice'=>$newPrice,
        'sitesUrl'=>$sitesUrl,'imageUrl'=>$imgName->getClientOriginalName()]);

      return back();
    }

    public function updatePopRestoran(Request $request){
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

        $update = PopRestoran::find($id);
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
                $popRest = PopRestoran::find($id);
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

    public function deletePopRestoran(Request $request){
      $id = $request->input('id');
      $delete = PopRestoran::find($id);
        unlink("img/popRestoranImg/$delete->imageUrl");
      $delete -> delete();

      return back();
    }

    public function getPopHotel(){
        $popHotel = PopHotel::all();

        $arr = ['popHotel'=>$popHotel];
        return view('setPopHotel',$arr);
    }

    public function setPopHotel(Request $request){
        $popHotel = $request->file('popHotelImg');

        $popHotel->move('img/popHotelImg',$popHotel->getClientOriginalName());
        PopHotel::create(['popHotelImg'=>$popHotel->getClientOriginalName()]);

        return back();
    }

    public function updatePopHotel(Request $request){
        $id = $request->input('id');

        //$sitesUrl = $request->input('sitesUrl');
        $popHotelImg = $request->file('popHotelImg');

        $update = PopHotel::find($id);

        //($sitesUrl != ""){
         //   $update -> sitesUrl = $sitesUrl;
        //}
//         if($imageUrl != ""){
//           $update -> imageUrl = $imageUrl;
//        }

        if($popHotelImg != null){
            if($popHotelImg->getClientOriginalName() != ""){
                //delete old image
                $popHotel = PopHotel::find($id);
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

    public function deletePopHotel(Request $request){
        $id = $request->input('id');
        $delete = PopHotel::find($id);
        unlink("img/popHotelImg/$delete->popHotelImg");
        $delete -> delete();

        return back();
    }

    public function getPopTours(){
        $popTours = PopTour::all();

        $arr = ['popTours'=>$popTours];
        return view('popTours',$arr);
    }

    public  function  setPopTours(Request $request){
        $popTourName = $request->input('name');
        $popTourInfo = $request->input('description');
        $sitesUrl = $request->input('sitesUrl');
        $popToursImg = $request->file('popToursImg');
        $toursCountry = $request->input('toursCountry');

        $popToursImg->move('img/popToursImg', $popToursImg->getClientOriginalName());
        PopTour::create(['nameImg'=>$popToursImg->getClientOriginalName(),
            'name'=>$popTourName,'info'=>$popTourInfo,'sitesUrl'=>$sitesUrl,
            'toursCountry'=>$toursCountry]);

        return back();
    }

    public function updatePopTours(Request $request){
        $id = $request->input('id');

        $popToursImg = $request->file('popToursImg');
        $description = $request->input('description');
        $name = $request->input('name');
        $sitesUrl = $request->input('sitesUrl');

        $update = PopTour::find($id);

        if( $popToursImg != null){
            if($popToursImg->getClientOriginalName() != ""){
                //delete old image
                $popTours = PopTour::find($id);
                $oldImg = $popTours->nameImg;
                unlink("img/popToursImg/$oldImg");
                //delete old image end

                $update -> nameImg = $popToursImg->getClientOriginalName();
                $popToursImg->move('img/popToursImg',$popToursImg->getClientOriginalName());
            }
        }
        if($description != ""){
            $update->info = $description;
        }
        if($name != ""){
            $update->name = $name;
        }
        if($sitesUrl != ""){
            $update->sitesUrl = $sitesUrl;
        }
        $update -> save();


        return back();
    }

    public function deletePopTours(Request $request){
        $id = $request->input('id');
        $delete = PopTour::find($id);
        unlink("img/popToursImg/$delete->nameImg");
        $delete -> delete();

        return back();
    }

    public function getPopCuponProduct(){
        $PopCuponProduct = PopCuponProduct::all();

        $arr = ['PopCuponProduct'=>$PopCuponProduct];
        return view('popCuponProduct',$arr);
    }

    public function setPopCuponProduct(Request $request){
        $discount = $request->input('discount');
        $marker = $request->input('marker');
        $description = $request->input('description');
        $name = $request->input('name');
        $count = $request->input('count');
        $oldPrice = $request->input('oldPrice');
        $newPrice = $request->input('newPrice');
        $sitesUrl = $request->input('sitesUrl');
        //$imageUrl = $request->input('imageUrl');
        $popCuponProductImg = $request->file('popCuponProductImg');

        $popCuponProductImg->move('img/popCuponProductImg',$popCuponProductImg->getClientOriginalName());
        PopCuponProduct::create(['discount'=>$discount,'marker'=>$marker,'description'=>$description,
            'name'=>$name,'count'=>$count,'oldPrice'=>$oldPrice,'newPrice'=>$newPrice,
            'sitesUrl'=>$sitesUrl,'imageUrl'=>$popCuponProductImg->getClientOriginalName()]);
        return back();
    }

    public function updatePopCuponProduct(Request $request){
        $id = $request->input('id');
        $discount = $request->input('discount');
        $marker = $request->input('marker');
        $description = $request->input('description');
        $name = $request->input('name');
        $count = $request->input('count');
        $oldPrice = $request->input('oldPrice');
        $newPrice = $request->input('newPrice');
        $sitesUrl = $request->input('sitesUrl');
        $popCuponProductImg = $request->file('popCuponProductImg');

        $update = PopCuponProduct::find($id);
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
        if($popCuponProductImg != null){
            if($popCuponProductImg->getClientOriginalName() != ""){
                //delete old image
                $popCupon = PopCuponProduct::find($id);
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

    public function deletePopCuponProduct(Request $request){
        $id = $request->input('id');

        $delete = PopCuponProduct::find($id);
        unlink("img/popCuponProductImg/$delete->imageUrl");
        $delete -> delete();

        return back();
    }

    public function getPopShop(Request $request){
        $popShop = PopShop::all();

        $arr = ['popShop'=>$popShop];
        return view('popShop',$arr);
    }

    public function setPopShop(){
        return back();
    }
//
//    public function updatePopShop(Request $request){
//        return back();
//    }
//
//    public function deletePopShop(){
//        return back();
//    }




}
