<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Magazine;
use App\Models\MagazineReview;
use App\Models\Admin;
use App\Models\NewsFavorite;
use App\Models\StaffLogEvent;
use App\Modules\ExternalSystem;

class MagazineController extends Controller
{
    public function magazine(){
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);
        $data['title'] = "Magazine";
        $data['active'] = "magazine";
        $data['data'] = Magazine::where('status','!=',2)->where('type',1)->orderBy('position','ASC')->get();
        $data['review'] = Magazine::where('status','!=',2)->where('type',2)->orderBy('position','ASC')->get();
        $data['video'] = Magazine::where('status','!=',2)->where('type',3)->orderBy('position','ASC')->get();
        $data['event'] = Magazine::where('status','!=',2)->where('type',4)->orderBy('position','ASC')->get();
        return view('admin.magazine', $data);
    }

    public function addMagazine(Request $request){
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);
        $data['title'] = "Magazine";
        $data['active'] = "magazine";
        $id = base64_decode($request->key);
        $data['data'] = Magazine::find($id);
        return view('admin.addmagazine', $data);
    }

    public function insert_magazine(Request $request){
        $type = $request->type;
        if($type == 4){
            $contact_number = $request->contact_number;
            $website = $request->website;
            $address = $request->address;
            $facebook = $request->facebook;
            $instagram = $request->instagram;
            $linkedin = $request->linkedin;
            $twitter = $request->twitter;
        }else{
            $website = "";
            $address = "";
            $facebook = "";
            $instagram = "";
            $linkedin = "";
            $twitter = "";
            $contact_number = "";
        }
        
        if($request->id==""){
            //image upload
            if($request->images!=''){
                $new_width = 100;
                $new_height = 100;
                $file = $request->file('images');
                $fileName = $file->getRealPath();
                $uploadPath = public_path('images/');
                $fileExt = $file->getClientOriginalExtension();
                $imgname = "thump_";
                $imageName1 = ExternalSystem::saveresizeimage($new_width,$new_height,$fileName,$uploadPath,$fileExt,$imgname);
            }else{
                $imageName1 = "";
            }

            //$imageName = time().'.'.$request->image->extension();      
            //$request->image->move(public_path('images'), $imageName);                    
            //tag icon
            if($request->tag_icon!=''){                        
                $new_widtht = 100;
                $new_heightt = 100;
                $filet = $request->file('tag_icon');
                $fileNamet = $filet->getRealPath();
                $uploadPatht = public_path('images/');
                $fileExtt = $filet->getClientOriginalExtension();
                $imgnamet = "tagthump_";
                $tag_icon = ExternalSystem::saveresizeimage($new_widtht,$new_heightt,$fileNamet,$uploadPatht,$fileExtt,$imgnamet);                        
                // $tag_icon = 't'.time().'.'.$request->tag_icon->extension();      
                // $request->tag_icon->move(public_path('images'), $tag_icon);
            }else{
                $tag_icon='';
            }
            //sponser_icon
            if($request->sponser_icon!=''){
                $new_widths = 100;
                $new_heights = 100;
                $files = $request->file('sponser_icon');
                $fileNames = $files->getRealPath();
                $uploadPaths = public_path('images/');
                $fileExts = $file->getClientOriginalExtension();
                $imgnames = "sponthump_";
                $sponser_icon = ExternalSystem::saveresizeimage($new_widths,$new_heights,$fileNames,$uploadPaths,$fileExts,$imgnames);
                //$sponser_icon = 's'.time().'.'.$request->sponser_icon->extension();      
                //$request->sponser_icon->move(public_path('images'), $sponser_icon);
            }else{
                $sponser_icon='';
            }
            // //image upload                
            // $imageName1 = time().'.'.$request->images->extension();      
            // $request->images->move(public_path('images'), $imageName1);
            // //tag icon
            // if($request->tag_icon!=''){
            //     $tag_icon = 't'.time().'.'.$request->tag_icon->extension();      
            //     $request->tag_icon->move(public_path('images'), $tag_icon);
            // }else{
            //     $tag_icon='';
            // }
            // //sponser_icon
            // if($request->sponser_icon!=''){
            //     $sponser_icon = 's'.time().'.'.$request->sponser_icon->extension();      
            //     $request->sponser_icon->move(public_path('images'), $sponser_icon);
            // }else{
            //     $sponser_icon='';
            // }

            $magazine = new Magazine;
            $magazine->heading = $request->heading;
            $magazine->heading_ar = $request->headingar;
            $magazine->image = $imageName1;
            $magazine->sort_description = "";
            $magazine->sort_description_ar = "";
            $magazine->description = $request->info;
            $magazine->description_ar = $request->infoar;
            $magazine->videourl = $request->videourl;
            $magazine->postedBy = $request->postedBy;
            $magazine->postedBy_ar = $request->postedByar;
            $magazine->postedDate = $request->postedDate;
            $magazine->end_date = $request->end_date;
            $magazine->contact_number = $contact_number;
            $magazine->website = $website;
            $magazine->address = $address;
            $magazine->facebook = $facebook;
            $magazine->instagram = $instagram;
            $magazine->linkedin = $linkedin;
            $magazine->twitter = $twitter;
            $magazine->type = $request->type;
            $magazine->tag_icon = $tag_icon;
            $magazine->tag_name = $request->tag_name;
            $magazine->tag_name_ar = $request->tag_namear;
            $magazine->sponser_icon = $sponser_icon;
            $magazine->sponser_name = $request->sponser_name;
            $magazine->home = 0;
            $magazine->position = 0;
            $magazine->status = 1;                
            $magazine->save();               
            echo 1;
            if(session::get('usertype')==2){
                $log = array(
                    'staff_id'=>session::get('id'),
                    'logDate'=>date('Y-m-d'),
                    'event_name'=>"Add Magazine",
                    'event_category'=>18,
                    'event_id'=>$magazine->id,
                );
                // print_r($log);
                $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
            }
                        
        }else{  
            //image upload
            if($request->images!=''){
                $new_width = 100;
                $new_height = 100;
                $file = $request->file('images');
                $fileName = $file->getRealPath();
                $uploadPath = public_path('images/');
                $fileExt = $file->getClientOriginalExtension();
                $imgname = "thump_";
                $imageName1 = ExternalSystem::saveresizeimage($new_width,$new_height,$fileName,$uploadPath,$fileExt,$imgname);
            }else{
                $imageName1 = "";
            }

            //$imageName = time().'.'.$request->image->extension();      
            //$request->image->move(public_path('images'), $imageName);                    
            //tag icon
            if($request->tag_icon!=''){                        
                $new_widtht = 100;
                $new_heightt = 100;
                $filet = $request->file('tag_icon');
                $fileNamet = $filet->getRealPath();
                $uploadPatht = public_path('images/');
                $fileExtt = $filet->getClientOriginalExtension();
                $imgnamet = "tagthump_";
                $tag_icon = ExternalSystem::saveresizeimage($new_widtht,$new_heightt,$fileNamet,$uploadPatht,$fileExtt,$imgnamet);                        
                // $tag_icon = 't'.time().'.'.$request->tag_icon->extension();      
                // $request->tag_icon->move(public_path('images'), $tag_icon);
            }else{
                $tag_icon='';
            }
            //sponser_icon
            if($request->sponser_icon!=''){
                $new_widths = 100;
                $new_heights = 100;
                $files = $request->file('sponser_icon');
                $fileNames = $files->getRealPath();
                $uploadPaths = public_path('images/');
                $fileExts = $file->getClientOriginalExtension();
                $imgnames = "sponthump_";
                $sponser_icon = ExternalSystem::saveresizeimage($new_widths,$new_heights,$fileNames,$uploadPaths,$fileExts,$imgnames);
                //$sponser_icon = 's'.time().'.'.$request->sponser_icon->extension();      
                //$request->sponser_icon->move(public_path('images'), $sponser_icon);
            }else{
                $sponser_icon='';
            }

            $magazine = new Magazine;
            $magazine = Magazine::find($request->id);
            $magazine->heading = $request->heading;
            $magazine->heading_ar = $request->headingar;
            $magazine->sort_description = "";
            $magazine->sort_description_ar = "";
            $magazine->description = $request->info;
            $magazine->description_ar = $request->infoar;
            $magazine->videourl = $request->videourl;
            $magazine->postedBy = $request->postedBy;
            $magazine->postedBy_ar = $request->postedByar;
            $magazine->postedDate = $request->postedDate;
            $magazine->end_date = $request->end_date;
            $magazine->contact_number = $contact_number;
            $magazine->website = $website;
            $magazine->address = $address;
            $magazine->facebook = $facebook;
            $magazine->instagram = $instagram;
            $magazine->linkedin = $linkedin;
            $magazine->twitter = $twitter;
            $magazine->type = $request->type;
            if($imageName1!=''){
                $magazine->image = $imageName1;
            }
            if($tag_icon!=''){
                $magazine->tag_icon = $tag_icon;
            }
            if($sponser_icon!=''){
                $magazine->sponser_icon = $sponser_icon;
            }                   
            $magazine->tag_name = $request->tag_name;                    
            $magazine->tag_name_ar = $request->tag_namear;                    
            $magazine->sponser_name = $request->sponser_name; 
            $magazine->save();                     
            echo 1;
            if(session::get('usertype')==2){
                $log = array(
                    'staff_id'=>session::get('id'),
                    'logDate'=>date('Y-m-d'),
                    'event_name'=>"Update Magazine",
                    'event_category'=>18,
                    'event_id'=>$request->id,
                );
                // print_r($log);
                $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
            }
        }
    }

    public function delete_magazine(Request $request){
        $id = $request->id;
        $category = Magazine::find($id);
        $category->status = 2;
        $category->save();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Delete Magazine",
                'event_category'=>18,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }
    public function change_magazine_status(Request $request){
        $id = $request->id;
        $status = $request->status;
        $category = Magazine::find($id);
        $category->status = $status;
        $category->save();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Change Magazine Status",
                'event_category'=>18,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }
    public function addhomemagazine(Request $request){
        $id = $request->id;
        $status = $request->status;
        $category = Magazine::find($id);
        $category->home = $status;
        $category->save();
    }
    public function addbannermagazine(Request $request){
        $id = $request->id;
        $status = $request->status;
        $category = Magazine::find($id);
        $category->banner = $status;
        $category->save();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Add Magazine at banner",
                'event_category'=>18,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }
    
    public function updatemagzineOrder(Request $request){
        $arr=$request->allData;
        $num=0;
        for($i=0;$i<count($arr);$i++)
        {
            $brand = Magazine::find($arr[$i]);
            $brand->position = $num=$num+1;
            $brand->save();
        } 
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Update Magazine Order",
                'event_category'=>18,
                'event_id'=>0,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }

    public function magazinedata(Request $request){
        
        $magazineID = base64_decode($request->key);         
        try{ 
            $admin_id = session::get('id');
            $data['admin']=Admin::find($admin_id);
            $data['title'] = "Magazine";
            $data['active'] = "magazine";
            $data['language'] = base64_decode($request->lang);          
            $data['news'] = Magazine::where('id',$magazineID)->first();
            //review
            $data['reviews'] = MagazineReview::where('magazineID',$magazineID)->orderBy('id','DESC')->get();            
            $avgStar = MagazineReview::where('magazineID',$magazineID)->avg('rate');
            $data['rating'] = "".number_format($avgStar, 1, '.', '');
            $CarReview = MagazineReview::where('magazineID',$magazineID);
            $data['reviews'] = $CarReview->count();              
            return view('admin.magazinedata', $data);
        }catch(\Exception $e){
           echo "404";
        }
       
    }

    
}
