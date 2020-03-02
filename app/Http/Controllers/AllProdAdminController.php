<?php

namespace App\Http\Controllers;

use App\AllTours;
use Illuminate\Http\Request;

class AllProdAdminController extends Controller
{
    public function getAllTours(){
        $allTours = AllTours::all();

        $arr = ['allTours'=>$allTours];
        return view('adminPages/allTours',$arr);
    }
    public function setAllTours(Request $request){
        $allTourName = $request->input('name');
        $allTourInfo = $request->input('description');
        $sitesUrl = $request->input('sitesUrl');
        $toursCountry = $request->input('toursCountry');
        $allToursImg = $request->file('allToursImg');

        $allToursImg->move('img/allTours', $allToursImg->getClientOriginalName());
        AllTours::create(['nameImg'=>$allToursImg->getClientOriginalName(),
            'name'=>$allTourName,'info'=>$allTourInfo,'sitesUrl'=>$sitesUrl,
            'toursCountry'=>$toursCountry]);
        return back();
    }
    public function updateAllTours(Request $request){
        $id = $request->input('id');

        $allToursImg = $request->file('allToursImg');
        $description = $request->input('description');
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
        if($sitesUrl != ""){
            $update->sitesUrl = $sitesUrl;
        }
        $update -> save();

        return back();
    }

    public function deleteAllTours(Request $request){
        $id = $request->input('id');
        $delete = AllTours::find($id);
        $delete -> delete();

        return back();
    }
}
