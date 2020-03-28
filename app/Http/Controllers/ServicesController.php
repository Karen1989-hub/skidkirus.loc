<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beauty;
use App\ServicRestoran;
use App\ServicConstruction;
use Validator;
use Session;

class ServicesController extends Controller
{
    public function getBeauty(Request $request){
        $beauty = Beauty::all();
        if ($request->session()->has('nameImgError')) {
            $nameImgError = $request->session()->get('nameImgError');           
        } else {
            $nameImgError = null;
            
        }
            
        $arr = ['beautys'=>$beauty,'nameImgError'=>$nameImgError];
        return view('adminServicesPages/setBeauty',$arr);
    }

    public function setBeauty(Request $request){
        $name = $request->input('name');
        $description = $request->input('description');
        $sitesUrl = $request->input('sitesUrl');
        $nameImg = $request->file('nameImg');      
        //validation start
        $validator = Validator::make($request->all(),
            [
                'name' => 'max:30',
                'description' => 'max:70',
                'sitesUrl' => 'max:100',
                'nameImg' => 'file'
            ], [                
                'name.max' => 'это поле не может быть больше 30 символов',                
                'description.max' => 'это поле не может быть больше 70 символов',                
                'sitesUrl.max' => 'это поле не может быть больше 100 символов',
                'nameImg.file' => 'это поле не может быть пустым'      
                                
            ]
        );    

        if ($validator->fails()) {
            if($nameImg == null){            
                $request->session()->put('nameImgError','картинка обязательна');                     
                      
            } else {
                $request->session()->forget('nameImgError');              
            }
            return back()->withErrors($validator)->withInput();
        }   
        //validation end 
        if($nameImg == null){            
            $request->session()->put('nameImgError','картинка обязательна'); 
            return back();                    
                  
        } else {
            $request->session()->forget('nameImgError');              
        }    


        $nameImg->move('img/beautysImg',$nameImg->getClientOriginalName());
        Beauty::create(['name'=>$name,'description'=>$description,'sitesUrl'=>$sitesUrl,'nameImg'=>$nameImg->getClientOriginalName()]);

        return back();
    }

    public function updateBeauty(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $description = $request->input('description');
        $sitesUrl = $request->input('sitesUrl');
        $nameImg = $request->file('nameImg');

        //validation start
        $validator = Validator::make($request->all(),
        [
            'name' => 'max:30',
            'description' => 'max:70',
            'sitesUrl' => 'max:100',
            'nameImg' => 'file'
        ], [                
            'name.max' => 'это поле не может быть больше 30 символов',                
            'description.max' => 'это поле не может быть больше 70 символов',                
            'sitesUrl.max' => 'это поле не может быть больше 100 символов',
            'nameImg.file' => 'это поле не может быть пустым'                              
        ]
    );  

    if ($validator->fails()) {
        if($nameImg == null){            
            $request->session()->put('nameImgError','картинка обязательна');                     
                  
        } else {
            $request->session()->forget('nameImgError');              
        }
        return back()->withErrors($validator)->withInput();
    }    
    //validation end

        $update = Beauty::find($id);        
         
         if($description != ""){
           $update -> description = $description;
        }
         if($name != ""){
           $update -> name = $name;
        }
         
         if($sitesUrl != ""){
           $update -> sitesUrl = $sitesUrl;
        }
         if($nameImg != null){
             if($nameImg->getClientOriginalName() != ""){
                 //delete old image
                 $beauty = Beauty ::find($id);
                 $oldImg = $beauty->nameImg;
                 unlink("img/beautysImg/$oldImg");
                 //delete old image end

                 $update -> nameImg = $nameImg->getClientOriginalName();
                 $nameImg->move('img/beautysImg',$nameImg->getClientOriginalName());
             }
         }

          $update -> save();
        return back();
    }

    public function deleteBeauty(Request $request){
        $id = $request->input('id');
//delete  image
$beauty = Beauty ::find($id);
$oldImg = $beauty->nameImg;
unlink("img/beautysImg/$oldImg");
//delete  image end
        $delete = Beauty::find($id);
        $delete->delete();
        return back();
    }

    public function getServicRestorans(Request $request){
        $servicRestoran = ServicRestoran::all();
        if ($request->session()->has('nameImgError')) {
            $nameImgError = $request->session()->get('nameImgError');           
        } else {
            $nameImgError = null;
            
        }
            
        $arr = ['servicRestoran'=>$servicRestoran,'nameImgError'=>$nameImgError];
        return view('adminServicesPages/setRestorans',$arr);
    }

    public function setServicRestorans(Request $request){
        $name = $request->input('name');
        $description = $request->input('description');
        $sitesUrl = $request->input('sitesUrl');
        $nameImg = $request->file('nameImg');      
        //validation start
        $validator = Validator::make($request->all(),
            [
                'name' => 'max:30',
                'description' => 'max:70',
                'sitesUrl' => 'max:100',
                'nameImg' => 'file'
            ], [                
                'name.max' => 'это поле не может быть больше 30 символов',                
                'description.max' => 'это поле не может быть больше 70 символов',                
                'sitesUrl.max' => 'это поле не может быть больше 100 символов',
                'nameImg.file' => 'это поле не может быть пустым'      
                                
            ]
        );    

        if ($validator->fails()) {
            if($nameImg == null){            
                $request->session()->put('nameImgError','картинка обязательна');                     
                      
            } else {
                $request->session()->forget('nameImgError');              
            }
            return back()->withErrors($validator)->withInput();
        }   
        //validation end 
        if($nameImg == null){            
            $request->session()->put('nameImgError','картинка обязательна'); 
            return back();                    
                  
        } else {
            $request->session()->forget('nameImgError');              
        }    


        $nameImg->move('img/servicRestorans',$nameImg->getClientOriginalName());
        ServicRestoran::create(['name'=>$name,'description'=>$description,'sitesUrl'=>$sitesUrl,'nameImg'=>$nameImg->getClientOriginalName()]);

        return back();
    }

    public function updateServicRestorans(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $description = $request->input('description');
        $sitesUrl = $request->input('sitesUrl');
        $nameImg = $request->file('nameImg');

        //validation start
        $validator = Validator::make($request->all(),
        [
            'name' => 'max:30',
            'description' => 'max:70',
            'sitesUrl' => 'max:100',
            'nameImg' => 'file'
        ], [                
            'name.max' => 'это поле не может быть больше 30 символов',                
            'description.max' => 'это поле не может быть больше 70 символов',                
            'sitesUrl.max' => 'это поле не может быть больше 100 символов',
            'nameImg.file' => 'это поле не может быть пустым'                              
        ]
    );  

    if ($validator->fails()) {
        if($nameImg == null){            
            $request->session()->put('nameImgError','картинка обязательна');                     
                  
        } else {
            $request->session()->forget('nameImgError');              
        }
        return back()->withErrors($validator)->withInput();
    }    
    //validation end

        $update = ServicRestoran::find($id);        
         
         if($description != ""){
           $update -> description = $description;
        }
         if($name != ""){
           $update -> name = $name;
        }
         
         if($sitesUrl != ""){
           $update -> sitesUrl = $sitesUrl;
        }
         if($nameImg != null){
             if($nameImg->getClientOriginalName() != ""){
                 //delete old image
                 $beauty = ServicRestoran ::find($id);
                 $oldImg = $beauty->nameImg;
                 unlink("img/servicRestorans/$oldImg");
                 //delete old image end

                 $update -> nameImg = $nameImg->getClientOriginalName();
                 $nameImg->move('img/servicRestorans',$nameImg->getClientOriginalName());
             }
         }

          $update -> save();
        return back();
    }

    public function deleteServicRestorans(Request $request){
        $id = $request->input('id');
//delete  image
$beauty = ServicRestoran ::find($id);
$oldImg = $beauty->nameImg;
unlink("img/servicRestorans/$oldImg");
//delete  image end
        $delete = ServicRestoran::find($id);
        $delete->delete();
        return back();
    }
    public function getServicConstruction(Request $request){
        $servicConstruction = ServicConstruction::all();
        if ($request->session()->has('nameImgError')) {
            $nameImgError = $request->session()->get('nameImgError');           
        } else {
            $nameImgError = null;            
        }
            
        $arr = ['servicConstruction'=>$servicConstruction,'nameImgError'=>$nameImgError];
        return view('adminServicesPages/setConstruction',$arr);
    }

    public function setServicConstruction(Request $request){
        $name = $request->input('name');
        $description = $request->input('description');
        $sitesUrl = $request->input('sitesUrl');
        $nameImg = $request->file('nameImg');      
        //validation start
        $validator = Validator::make($request->all(),
            [
                'name' => 'max:30',
                'description' => 'max:70',
                'sitesUrl' => 'max:100',
                'nameImg' => 'file'
            ], [                
                'name.max' => 'это поле не может быть больше 30 символов',                
                'description.max' => 'это поле не может быть больше 70 символов',                
                'sitesUrl.max' => 'это поле не может быть больше 100 символов',
                'nameImg.file' => 'это поле не может быть пустым'      
                                
            ]
        );    

        if ($validator->fails()) {
            if($nameImg == null){            
                $request->session()->put('nameImgError','картинка обязательна');                     
                      
            } else {
                $request->session()->forget('nameImgError');              
            }
            return back()->withErrors($validator)->withInput();
        }   
        //validation end 
        if($nameImg == null){            
            $request->session()->put('nameImgError','картинка обязательна'); 
            return back();                    
                  
        } else {
            $request->session()->forget('nameImgError');              
        }    


        $nameImg->move('img/servicConstructionImg',$nameImg->getClientOriginalName());
        ServicConstruction::create(['name'=>$name,'description'=>$description,'sitesUrl'=>$sitesUrl,'nameImg'=>$nameImg->getClientOriginalName()]);

        return back();
    }

    public function updateServicConstruction(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $description = $request->input('description');
        $sitesUrl = $request->input('sitesUrl');
        $nameImg = $request->file('nameImg');

        //validation start
        $validator = Validator::make($request->all(),
        [
            'name' => 'max:30',
            'description' => 'max:70',
            'sitesUrl' => 'max:100',
            'nameImg' => 'file'
        ], [                
            'name.max' => 'это поле не может быть больше 30 символов',                
            'description.max' => 'это поле не может быть больше 70 символов',                
            'sitesUrl.max' => 'это поле не может быть больше 100 символов',
            'nameImg.file' => 'это поле не может быть пустым'                              
        ]
    );  

    if ($validator->fails()) {
        if($nameImg == null){            
            $request->session()->put('nameImgError','картинка обязательна');                     
                  
        } else {
            $request->session()->forget('nameImgError');              
        }
        return back()->withErrors($validator)->withInput();
    }    
    //validation end

        $update = ServicConstruction::find($id);        
         
         if($description != ""){
           $update -> description = $description;
        }
         if($name != ""){
           $update -> name = $name;
        }
         
         if($sitesUrl != ""){
           $update -> sitesUrl = $sitesUrl;
        }
         if($nameImg != null){
             if($nameImg->getClientOriginalName() != ""){
                 //delete old image
                 $beauty = ServicConstruction ::find($id);
                 $oldImg = $beauty->nameImg;
                 unlink("img/servicConstructionImg/$oldImg");
                 //delete old image end

                 $update -> nameImg = $nameImg->getClientOriginalName();
                 $nameImg->move('img/servicConstructionImg ',$nameImg->getClientOriginalName());
             }
         }

          $update -> save();
        return back();
    }

    public function deleteServicConstruction(Request $request){
        $id = $request->input('id');
        //delete  image
        $beauty = ServicConstruction ::find($id);
        $oldImg = $beauty->nameImg;
        unlink("img/servicConstructionImg/$oldImg");
        //delete  image end
        $delete = ServicConstruction::find($id);
        $delete->delete();
        return back();
    }

}

