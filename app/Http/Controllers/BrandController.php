<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Brand;
use App\Models\AllBannerImage;
use App\Models\StaffLogEvent;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Redirect;
use Illuminate\Validation\ValidationException;

class BrandController extends Controller
{
    public function brands(){
        $data['active'] = "brand";
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);
        $brandpopcount = Brand::where('status','!=',2)->where('popular',1)->count();
        if($brandpopcount!=0){
            $data['data'] = Brand::where('status','!=',2)->orderby('popular','DESC')->orderby('position','ASC')->get();
        }else{
            $data['data'] = Brand::where('status','!=',2)->orderby('name','ASC')->get();
        }                
        return view('admin.brands', $data);
    }

    public function add_allbrand($year){
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://carapi.app/api/makes?sort=&make=&year='.$year,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json'
        ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $res = json_decode($response);
        return $res->data;
    }

    public function yearlist(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://carapi.app/api/years',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'accept: application/json'
        ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    public function addBrand(Request $request){
        $data['active'] = "brand";
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);
        $data['category'] = Category::where('status',1)->get();
        $id = base64_decode($request->key);
        $data['data'] = Brand::find($id);
        $data['brandbanner'] = AllBannerImage::where('bannertype',1)->where('bannerimageID',$id)->get();
        return view('admin.addBrand', $data);
    }

    public function insert_brand(Request $request){
        $validator = Validator::make($request->all(), 
            [
                //'image' => 'mimes:jpeg,jpg,png,gif|max:2000|dimensions:max_width=100,max_height=100'
            ]
        );
        if ($validator->fails()){
            $errors = $validator->errors();
            echo 3;
        }else{
            if($request->id==""){
                $check_name = Brand::where('name',$request->name)->count();
                if($check_name==0){ 
                    //image upload
                    $imageName = time().'.'.$request->image->extension();      
                    $request->image->move(public_path('images'), $imageName);                    
                    //tag icon
                    if($request->tag_icon!=''){
                        $tag_icon = 't'.time().'.'.$request->tag_icon->extension();      
                        $request->tag_icon->move(public_path('images'), $tag_icon);
                    }else{
                        $tag_icon='';
                    }
                    //sponser_icon
                    if($request->sponser_icon!=''){
                        $sponser_icon = 's'.time().'.'.$request->sponser_icon->extension();      
                        $request->sponser_icon->move(public_path('images'), $sponser_icon);
                    }else{
                        $sponser_icon='';
                    }

                    $brand = new Brand;
                    $brand->name = $request->name;
                    $brand->name_ar = $request->namear;
                    $brand->categoryID = $request->category;
                    $brand->logo = $imageName;
                    $brand->description = $request->info;
                    $brand->description_ar = $request->infoar;
                    $brand->website = $request->website;
                    $brand->youtube = $request->youtube;
                    $brand->twitter = $request->twitter;
                    $brand->linkedin = $request->linkedin;
                    $brand->facebook = $request->facebook;
                    $brand->instagram = $request->instagram;
                    $brand->tag_icon = $tag_icon;
                    $brand->tag_name = $request->tag_name;
                    $brand->tag_name_ar = $request->tag_namear;
                    $brand->sponser_icon = $sponser_icon;
                    $brand->sponser_name = $request->sponser_name;
                    $brand->sponser_name_ar = $request->sponser_namear;
                    $brand->status = 1;
                    $brand->save();
                    //image upload
                    if(!empty($request->images)){
                        $i=1;
                        foreach($request->images as $imagevalue){
                            $imageNames = $i.time().'.'.$imagevalue->extension();      
                            $imagevalue->move(public_path('images'), $imageNames);
                            $AllBannerImage = new AllBannerImage;
                            $AllBannerImage->bannerimageID = $brand->id;
                            $AllBannerImage->image = $imageNames;
                            $AllBannerImage->bannertype = 1;
                            $AllBannerImage->save();
                            $i++;
                        }
                    }
                    if(session::get('usertype')==2){
                        $log = array(
                            'staff_id'=>session::get('id'),
                            'logDate'=>date('Y-m-d'),
                            'event_name'=>"Add Brand",
                            'event_category'=>11,
                            'event_id'=>$brand->id,
                        );
                        // print_r($log);
                        $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
                    }
                    echo 1;
                }else{
                    echo 2;
                }              
            }else{
                $check_name = Brand::where('name',$request->name)->where('id',$request->id);
                if($check_name->count() >= 1 && $request->id != $check_name->first()->id){
                    echo 2;
                }else{
                    if($request->image!=''){
                        $imageName = time().'.'.$request->image->extension();      
                        $request->image->move(public_path('images'), $imageName);
                    }else{
                        $imageName = '';
                    }
                    //tag icon
                    if($request->tag_icon!=''){
                        $tag_icon = 't'.time().'.'.$request->tag_icon->extension();      
                        $request->tag_icon->move(public_path('images'), $tag_icon);
                    }else{
                        $tag_icon='';
                    }
                    //sponser_icon
                    if($request->sponser_icon!=''){
                        $sponser_icon = 's'.time().'.'.$request->sponser_icon->extension();      
                        $request->sponser_icon->move(public_path('images'), $sponser_icon);
                    }else{
                        $sponser_icon='';
                    }
                    $brand = new Brand;
                    $brand = Brand::find($request->id);
                    $brand->name = $request->name;
                    $brand->name_ar = $request->namear;
                    $brand->categoryID = $request->category;
                    $brand->description = $request->info;
                    $brand->description_ar = $request->infoar;
                    $brand->website = $request->website;
                    $brand->youtube = $request->youtube;
                    $brand->twitter = $request->twitter;
                    $brand->linkedin = $request->linkedin;
                    $brand->facebook = $request->facebook;
                    $brand->instagram = $request->instagram;
                    if($imageName!=''){
                        $brand->logo = $imageName;
                    }
                    if($tag_icon!=''){
                        $brand->tag_icon = $tag_icon;
                    }
                    if($sponser_icon!=''){
                        $brand->sponser_icon = $sponser_icon;
                    }                   
                    $brand->tag_name = $request->tag_name;                    
                    $brand->tag_name_ar = $request->tag_namear;                    
                    $brand->sponser_name = $request->sponser_name;                
                    $brand->sponser_name_ar = $request->sponser_namear;                
                    $brand->save();
                    //images
                    if(!empty($request->images)){
                        $i=1;
                        foreach($request->images as $imagevalue){
                            $imageNames = $i.time().'.'.$imagevalue->extension();      
                            $imagevalue->move(public_path('images'), $imageNames);
                            $AllBannerImage = new AllBannerImage;
                            $AllBannerImage->bannerimageID = $request->id;
                            $AllBannerImage->image = $imageNames;
                            $AllBannerImage->bannertype = 1;
                            $AllBannerImage->save();
                            $i++;
                        }
                    }
                    if(session::get('usertype')==2){
                        $log = array(
                            'staff_id'=>session::get('id'),
                            'logDate'=>date('Y-m-d'),
                            'event_name'=>"Update Brand",
                            'event_category'=>11,
                            'event_id'=>$request->id,
                        );
                        // print_r($log);
                        $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
                    }
                    echo 1;
                }             

            }
        }
    }
    public function delete_brand(Request $request){
        $id = $request->id;
        $category = Brand::find($id);
        $category->status = 2;
        $category->save();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Delete Brand",
                'event_category'=>11,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }
    public function change_brand_status(Request $request){
        $id = $request->id;
        $status = $request->status;
        $category = Brand::find($id);
        $category->status = $status;
        $category->save();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Change Brand Status",
                'event_category'=>11,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }
    public function add_popular_brand(Request $request){
        $checkpop = Brand::where('popular',1)->count();
        if($checkpop==0){
            $position = 1;
        }else{
            $pop = Brand::where('popular',1)->limit(1)->orderBy('position','DESC')->first();
            $position = $pop->position+1;
        }
        $id = $request->id;
        $status = $request->status;
        $category = Brand::find($id);
        $category->popular = $status;
        $category->position = $position;
        $category->save();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Add Brand in Popular List",
                'event_category'=>11,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }

    public function popularBrands(Request $request){
        $data['active'] = "pbrand";
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);
        $data['data'] = Brand::where('status','!=',2)->where('popular',1)->orderBy('position','ASC')->get();
        return view('admin.popularBrands', $data);
    }
    
    public function updateBrandOrder(Request $request){
        $arr=$request->allData;
        $num=0;
        for($i=0;$i<count($arr);$i++)
        {
            $brand = Brand::find($arr[$i]);
            $brand->position = $num=$num+1;
            $brand->save();
        }
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Update Brand Order",
                'event_category'=>11,
                'event_id'=>0,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        } 
    }

    public function deleteimage(Request $request){
        AllBannerImage::where('id',$request->id)->delete();
        echo 1;
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Delete Brand Banner Image",
                'event_category'=>11,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }

    }

    

    

}
