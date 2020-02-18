<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Skidki;
use App\Site;

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
            return view('adminPage');
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
        
        $update -> discount = $discount;
        $update -> marker = $marker;
        $update -> description = $description;
        $update -> name = $name;
        $update -> count = $count;
        $update -> oldPrice = $oldPrice;
        $update -> newPrice = $newPrice;
        $update -> sitesUrl = $sitesUrl;
        $update -> imageUrl = $imageUrl;
        $update -> save();

        return back();
    }
    public function(){
        
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
        $imgName = $request->file('imgName');
        
         $imgName->move('img/skidkiImg',$imgName->getClientOriginalName());
         Skidki::create(['discount'=>$discount,'marker'=>$marker,'description'=>$description,
        'name'=>$name,'count'=>$count,'oldPrice'=>$oldPrice,'newPrice'=>$newPrice,
        'imgName'=>$imgName->getClientOriginalName()]);
        
        return back();
    }
}
