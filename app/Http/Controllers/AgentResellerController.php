<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Banner;
use App\Models\WelcomeImage;
use App\Models\AgentBanner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Agent;
use App\Models\AgentBrand;
use App\Models\ServiceType;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\AgentBranch;
use App\Models\BranchBrand;
use App\Models\ServiceBranch;
use App\Models\AllBannerImage;
use App\Models\InternalAppPage;
use App\Models\StaffLogEvent;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Redirect;
use Illuminate\Validation\ValidationException;

class AgentResellerController extends Controller
{
    public function agentBanners(Request $request){
        $admin_id = session::get('id');
        $data['active'] = "agent";
        $data['banners']=AgentBanner::orderBy('position_id', 'asc')->get();
        $data['admin']=Admin::find($admin_id);
        return view('admin.agentbanners', $data);
    }

    public function addAgentBanner(Request $request){
        $data['active'] = "agent";
        if($request->id){
            $data['banner']=AgentBanner::find($request->id);
        }
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);
        $data['InternalAppPage']=InternalAppPage::all();
        return view('admin.addAgentBanner', $data);
    }

    public function insertAgentBanner(Request $request){
        $validator = Validator::make($request->all(), 
            [
                //'image' => 'mimes:jpeg,jpg,png,gif|max:2000|dimensions:max_width=500,max_height=500',
                'name' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
            ]
        );
        if ($validator->fails()){
            $errors = $validator->errors();
            echo $errors;
        }else{
            if($request->hasFile('image')){
                $image = $request->file('image');
                $filename = time().'.'.$image->getClientOriginalExtension();
                $image->move('public/img/banners', $filename);
                $imageName = $filename;
            }else{
                if($request->banner_id){
                    $imageName = $request->pre_image;
                }
            }
            if($request->inlineRadioOptions==2){
                $page = $request->page;
            }else{
                $page = $request->url;
            }
            if($request->banner_id){
                $banner = AgentBanner::find($request->banner_id);
                $banner->image = $imageName;
                $banner->name = $request->name;
                $banner->name_ar = $request->namear;
                $banner->url = $page;
                $banner->start_date = $request->start_date;
                $banner->end_date = $request->end_date;
                $banner->internal_external = $request->inlineRadioOptions;
                $banner->update();
                echo "update";
                if(session::get('usertype')==2){
                    $log = array(
                        'staff_id'=>session::get('id'),
                        'logDate'=>date('Y-m-d'),
                        'event_name'=>"Update Agent Banner",
                        'event_category'=>14,
                        'event_id'=>$request->banner_id,
                    );
                    // print_r($log);
                    $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
                }
                // return redirect()->back()->with('message', 'Banner updated successfully.');
            }else{
                $banner = new AgentBanner;
                $banner->image = $imageName;
                $banner->name = $request->name;
                $banner->name_ar = $request->namear;
                $banner->url = $page;
                $banner->start_date = $request->start_date;
                $banner->end_date = $request->end_date;
                $banner->internal_external = $request->inlineRadioOptions;
                $banner->save();
                echo "add";
                if(session::get('usertype')==2){
                    $log = array(
                        'staff_id'=>session::get('id'),
                        'logDate'=>date('Y-m-d'),
                        'event_name'=>"Add Agent Banner",
                        'event_category'=>14,
                        'event_id'=>$banner->id,
                    );
                    // print_r($log);
                    $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
                }
                // return redirect()->back()->with('message', 'Banner added successfully.');
            }
        }
        
    }

    public function update_Agentstatus($id, $table){
        $model = 'App\Models\\'.$table;
        $item = $model::find($id);
        if($item->status == 1){ $update=0; }else if($item->status == 0){ $update=1; }
        $model::where('id', $id)->update([ 'status' => $update ]);
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Change Status of Agent Banner",
                'event_category'=>14,
                'event_id'=>$id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
        return redirect()->back()->with('message', 'Status changed successfully.');
    }

    public function deleteAgent($id, $table){
        $model = 'App\Models\\'.$table;
        $model::destroy($id);
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Delete Agent Banner",
                'event_category'=>14,
                'event_id'=>$id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
        // $item = $model::find($id);
        // $item->delete();
        return redirect()->back()->with('message', 'Deleted successfully.');
    }

    public function updateAgentBannerOrder(Request $request){
        $arr=$request->allData;
        $num=0;
        for($i=0;$i<count($arr);$i++)
        {
            $banner = AgentBanner::find($arr[$i]);
            $banner->position_id = $num=$num+1;
            $banner->save();
            if(session::get('usertype')==2){
                $log = array(
                    'staff_id'=>session::get('id'),
                    'logDate'=>date('Y-m-d'),
                    'event_name'=>"Update Agent Banner Order",
                    'event_category'=>14,
                    'event_id'=>0,
                );
                // print_r($log);
                $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
            }
        } 
    }

    public function change_agentbanner_status(Request $request){
        $id = $request->id;
        $status = $request->status;
        $category = AgentBanner::find($id);
        $category->status = $status;
        $category->save();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Change Agent Banner Status",
                'event_category'=>14,
                'event_id'=>$id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }
    //////////////////////////
    public function agent(){
        $data['active'] = "agent";
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);
        $data['title'] = "Agent/Reseller";
        //$data['brand'] = Brand::where('status','!=',2)->get();
        //$data['data'] = Agent::where('status','!=',2)->get();
        $agentpopcount = Agent::where('status','!=',2)->where('popular',1)->count();
        if($agentpopcount!=0){
            //$data['data'] = Agent::where('status','!=',2)->orderby('popular','DESC')->get();
            $data['data'] = Agent::where('status','!=',2)->orderBy('position', 'asc')->get();
        }else{
            $data['data'] = Agent::where('status','!=',2)->orderby('name','ASC')->get();
        }
        return view('admin.agent', $data);
    }
    public function addAgent(Request $request){
        $data['active'] = "agent";
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);
        $data['category'] = Category::where('status','!=',2)->get();
        $data['title'] = "Agent/Reseller";
        $id = base64_decode($request->key);
        $data['data'] = Agent::find($id);
        $data['brand'] = Brand::where('status','!=',2)->get();
        $data['agentbrand'] = AgentBrand::where('agentID',$id)->get();
        $data['brandbanner'] = AllBannerImage::where('bannertype',2)->where('bannerimageID',$id)->get();
        return view('admin.addagent', $data);
    }

    public function insert_agent(Request $request){ 
        $validator = Validator::make($request->all(), 
            [
                //'image' => 'mimes:jpeg,jpg,png,gif|max:2000|dimensions:max_width=100,max_height=100',
                //'images' => 'mimes:jpeg,jpg,png,gif|max:2000|dimensions:max_width=500,max_height=500',
            ]
        );
        if ($validator->fails()){
            $errors = $validator->errors();
            echo $errors;
        }else{       
            if($request->id==""){
                $check_name = Agent::where('name',$request->name)->count();
                if($check_name==0){ 
                    //image upload
                    $imageName = 'logo'.time().'.'.$request->image->extension();      
                    $request->image->move(public_path('images'), $imageName);
                    
                    $imageName1 = 'im'.time().'.'.$request->imagess->extension();      
                    $request->imagess->move(public_path('images'), $imageName1);
                    
                    //tag icon
                    if($request->tag_icon!=''){
                        $tag_icon = 't'.time().'.'.$request->tag_icon->extension();      
                        $request->tag_icon->move(public_path('images'), $tag_icon);
                    }else{
                        $tag_icon='';
                    }

                    $agent = new Agent;
                    $agent->name = $request->name;
                    $agent->name_ar = $request->namear;
                    $agent->logo = $imageName;
                    $agent->images = $imageName1;
                    $agent->description = $request->info;
                    $agent->discription_ar = $request->infoar;
                    $agent->email = $request->email;
                    $agent->contact = $request->mobile;
                    $agent->youtube = $request->youtube;
                    $agent->twitter = $request->twitter;
                    $agent->linkedin = $request->linkedin;
                    $agent->facebook = $request->facebook;
                    $agent->instagram = $request->instagram;
                    $agent->snap_chat = $request->snapchat;
                    $agent->type = $request->type;
                    $agent->tag_icon = $tag_icon;
                    $agent->tag_name = $request->tag_name;
                    $agent->tag_name_ar = $request->tag_namear;
                    $agent->status = 1;
                    $agent->save();
                    foreach($request->brands as $val){
                        $agentBrand = new AgentBrand;
                        $agentBrand->agentID = $agent->id;
                        $agentBrand->brandID = $val;
                        $agentBrand->save();
                    }
                    //image upload
                    if(!empty($request->images)){
                        $i=1;
                        foreach($request->images as $imagevalue){
                            $imageNames = $i.time().'.'.$imagevalue->extension();      
                            $imagevalue->move(public_path('images'), $imageNames);
                            $AllBannerImage = new AllBannerImage;
                            $AllBannerImage->bannerimageID = $agent->id;
                            $AllBannerImage->image = $imageNames;
                            $AllBannerImage->bannertype = 2;
                            $AllBannerImage->save();
                            $i++;
                        }
                    }

                    if(session::get('usertype')==2){
                        $log = array(
                            'staff_id'=>session::get('id'),
                            'logDate'=>date('Y-m-d'),
                            'event_name'=>"Add Agent",
                            'event_category'=>15,
                            'event_id'=>$agent->id,
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
                    
                    if($request->imagess!=''){
                        $imageName1 = time().'.'.$request->imagess->extension();      
                        $request->imagess->move(public_path('images'), $imageName1);
                    }else{
                        $imageName1 = '';
                    }

                    //tag icon
                    if($request->tag_icon!=''){
                        $tag_icon = 't'.time().'.'.$request->tag_icon->extension();      
                        $request->tag_icon->move(public_path('images'), $tag_icon);
                    }else{
                        $tag_icon='';
                    }

                    $agent = new Agent;
                    $agent = Agent::find($request->id);
                    $agent->name = $request->name;
                    $agent->name_ar = $request->namear;
                    $agent->description = $request->info;
                    $agent->discription_ar = $request->infoar;
                    $agent->email = $request->email;
                    $agent->contact = $request->mobile;
                    $agent->youtube = $request->youtube;
                    $agent->twitter = $request->twitter;
                    $agent->linkedin = $request->linkedin;
                    $agent->facebook = $request->facebook;
                    $agent->instagram = $request->instagram;
                    $agent->snap_chat = $request->snapchat;
                    $agent->type = $request->type;
                    $agent->tag_name = $request->tag_name;
                    $agent->tag_name_ar = $request->tag_namear;
                    if($imageName!=''){
                        $agent->logo = $imageName;
                    }
                    if($imageName1!=''){
                        $agent->images = $imageName1;
                    }
                    if($tag_icon!=''){
                        $agent->tag_icon = $tag_icon;
                    }
                    $agent->save();
                    $brandagent = AgentBrand::select('brandID')->where('agentID',$request->id)->get();
                    $brandarray = array();
                    foreach($brandagent as $val){
                        array_push($brandarray,$val->brandID);
                    }
                    $result=array_diff($brandarray,$request->brands);
                    foreach($request->brands as $valb){
                        $checkbrandid = AgentBrand::where('brandID',$valb)->where('agentID',$request->id)->count();
                        if($checkbrandid==0){
                            $agentBrand = new AgentBrand;
                            $agentBrand->agentID = $request->id;
                            $agentBrand->brandID = $valb;
                            $agentBrand->save();
                        }                    
                    }
                    foreach($result as $rval){
                        AgentBrand::where('brandID',$rval)->where('agentID',$request->id)->delete();
                    }
                    
                    //image upload
                    if(!empty($request->images)){
                        $i=1;
                        foreach($request->images as $imagevalue){
                            $imageNames = $i.time().'.'.$imagevalue->extension();      
                            $imagevalue->move(public_path('images'), $imageNames);
                            $AllBannerImage = new AllBannerImage;
                            $AllBannerImage->bannerimageID = $request->id;
                            $AllBannerImage->image = $imageNames;
                            $AllBannerImage->bannertype = 2;
                            $AllBannerImage->save();
                            $i++;
                        }
                    }
                    echo 1;
                    if(session::get('usertype')==2){
                        $log = array(
                            'staff_id'=>session::get('id'),
                            'logDate'=>date('Y-m-d'),
                            'event_name'=>"Update Agent",
                            'event_category'=>15,
                            'event_id'=>$request->id,
                        );
                        // print_r($log);
                        $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
                    }
                }             

            }
        }
    }
    public function delete_agent(Request $request){
        $id = $request->id;
        $category = Agent::find($id);
        $category->status = 2;
        $category->save();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Delete Agent",
                'event_category'=>15,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }
    public function change_agent_status(Request $request){
        $id = $request->id;
        $status = $request->status;
        $category = Agent::find($id);
        $category->status = $status;
        $category->save();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Change Agent Status",
                'event_category'=>15,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }
    public function add_popular_agent(Request $request){
        $id = $request->id;
        $status = $request->status;
        $category = Agent::find($id);
        $category->popular = $status;
        $category->save();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Add Agent in popular list",
                'event_category'=>15,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }

    public function popularAgent(Request $request){
        $data['active'] = "agent";
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);
        $data['data'] = Agent::where('status','!=',2)->where('popular',1)->orderBy('position','ASC')->get();
        return view('admin.popularAgents', $data);
    }
    
    public function updateAgentOrder(Request $request){
        $arr=$request->allData;
        $num=0;
        for($i=0;$i<count($arr);$i++)
        {
            $brand = Agent::find($arr[$i]);
            $brand->position = $num=$num+1;
            $brand->update();
            
        } 
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Update Agent Order",
                'event_category'=>15,
                'event_id'=>0,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }

    public function branch(Request $request){
        $data['active'] = "agent";
        $data['id'] = $request->key; 
        $admin_id = session::get('id');
        $data['title'] = "Branch";
        $data['data']=AgentBranch::where('agentID', base64_decode($request->key))->get();
        $data['admin']=Admin::find($admin_id);
        
        return view('admin.branch', $data);
    }

    public function addBranch(Request $request){
        $data['active'] = "agent";
        $admin_id = session::get('id');
        $data['title'] = "Branch";
        $data['agentid'] = base64_decode($request->key);
        $branchid = base64_decode($request->id);
        $data['admin']=Admin::find($admin_id);
        $data['servicetype'] = ServiceType::where('status',1)->get();
        $data['country'] = Country::where('status',1)->get();
        $data['brand'] = AgentBrand::where('agentID',base64_decode($request->key))->get();
        if($branchid!='') {      
        $data['data'] = AgentBranch::where('id',$branchid)->first();
        $data['state'] = State::where('country_id',$data['data']->country)->get();
        $data['city'] = City::where('state_id',$data['data']->state)->get();
        $data['agentbrand'] = BranchBrand::where('branchId',$branchid)->get();
        $data['service'] = ServiceBranch::where('branchId',$branchid)->get();
        }
        return view('admin.addBranch', $data);
    }

    public function getState(Request $request){
        $country_id = $request->country_id;
        $state = State::where('country_id',$country_id)->get();
        foreach($state as $value){
            echo "<option value='".$value->id."'>".$value->name."</option>";
        }
    }

    public function getCity(Request $request){
        $state_id = $request->state_id;
        $city = City::where('state_id',$state_id)->get();
        foreach($city as $value){
            echo "<option value='".$value->id."'>".$value->name."</option>";
        }
    }

    public function insert_branch(Request $request){ 
       // Google Maps API Key 
    //     $GOOGLE_API_KEY = 'AIzaSyA_VxG35IaFz_h_F0G_786p77XvwRKG_WM'; 
            
    //     // Address from which the latitude and longitude will be retrieved 
    //     $address = 'White House, Pennsylvania Avenue Northwest, Washington, DC, United States'; 
        
    //     // Formatted address 
    //     $formatted_address = str_replace(' ', '+', $address); 
        
    //     // Get geo data from Google Maps API by address 
    //     $geocodeFromAddr = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address={$formatted_address}&key={$GOOGLE_API_KEY}"); 
        
    //     // Decode JSON data returned by API 
    //     $apiResponse = json_decode($geocodeFromAddr);
    //     print_r($apiResponse);
        
    //    // Retrieve latitude and longitude from API data 
    //     $latitude  = $apiResponse->results[0]->geometry->location->lat;  
    //     $longitude = $apiResponse->results[0]->geometry->location->lng; 
    //     die; 
        if($request->image!=''){
            $image = 't'.time().'.'.$request->image->extension();      
            $request->image->move(public_path('images'), $image);
        }else{
            $image='';
        }      
        if($request->id==""){
            
            $check_name = AgentBranch::where('name',$request->name)->count();
            if($check_name==0){                              
                $insert = new AgentBranch;
                $insert->name = $request->name;
                $insert->name_ar = $request->namear;
                $insert->agentID = $request->agentid;
                $insert->servicetypeID = 0;
                $insert->contact = $request->mobile;
                $insert->start_day = $request->start_day;
                $insert->end_day = $request->end_day;
                $insert->start_time = $request->start_time;
                $insert->end_time = $request->end_time;
                $insert->country = $request->country;
                $insert->state = $request->state;
                $insert->city = $request->city;
                $insert->address = $request->address;
                $insert->image = $image;
                $insert->email = $request->email;
                $insert->latitude = 0;
                $insert->longitude = 0;
                $insert->status = 1;
                $insert->save();
                //BranchBrand
                foreach($request->brands as $val){
                    $agentBrand = new BranchBrand;
                    $agentBrand->branchId = $insert->id;
                    $agentBrand->agentId = $request->agentid;
                    $agentBrand->brandId = $val;
                    $agentBrand->save();
                }
                //Branch Services
                foreach($request->servicetypeID as $serval){
                    $ServiceBranch = new ServiceBranch;
                    $ServiceBranch->branchId = $insert->id;
                    $ServiceBranch->agentId = $request->agentid;
                    $ServiceBranch->serviceID = $serval;
                    $ServiceBranch->save();
                }
                
                echo 1;
                if(session::get('usertype')==2){
                    $log = array(
                        'staff_id'=>session::get('id'),
                        'logDate'=>date('Y-m-d'),
                        'event_name'=>"Add Branch in an agent",
                        'event_category'=>16,
                        'event_id'=>$insert->id,
                    );
                    // print_r($log);
                    $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
                }
            }else{
                echo 2;
            }              
        }else{
            $check_name = AgentBranch::where('name',$request->name)->where('id',$request->id);
            if($check_name->count() >= 1 && $request->id != $check_name->first()->id){
                echo 2;
            }else{
                               
                $insert = new AgentBranch;
                $insert = AgentBranch::find($request->id);
                $insert->name = $request->name;
                $insert->name_ar = $request->namear;
                $insert->agentID = $request->agentid;
                $insert->servicetypeID = 0;
                $insert->contact = $request->mobile;
                $insert->email = $request->email;
                $insert->start_day = $request->start_day;
                $insert->end_day = $request->end_day;
                $insert->start_time = $request->start_time;
                $insert->end_time = $request->end_time;
                $insert->country = $request->country;
                $insert->state = $request->state;
                $insert->city = $request->city;
                $insert->address = $request->address;
                if($image!=""){
                    $insert->image = $image;
                }                
                $insert->latitude = 0;
                $insert->longitude = 0;
                $insert->save();
                //branchbrand
                $brandagent = BranchBrand::select('brandId')->where('branchId',$request->id)->get();
                $brandarray = array();
                foreach($brandagent as $val){
                    array_push($brandarray,$val->brandId);
                }
                $result=array_diff($brandarray,$request->brands);
                foreach($request->brands as $valb){
                    $checkbrandid = BranchBrand::where('brandId',$valb)->where('branchId',$request->id)->count();
                    if($checkbrandid==0){
                        $agentBrand = new BranchBrand;
                        $agentBrand->branchId = $request->id;
                        $agentBrand->agentId = $request->agentid;
                        $agentBrand->brandId = $valb;
                        $agentBrand->save();
                    }                    
                }
                foreach($result as $rval){
                    BranchBrand::where('brandId',$rval)->where('branchId',$request->id)->delete();
                }
                //Branch Services
                $branchservice = ServiceBranch::select('serviceID')->where('branchId',$request->id)->get();
                $branchservicearray = array();
                foreach($branchservice as $vals){
                    array_push($branchservicearray,$vals->serviceID);
                }
                $results=array_diff($branchservicearray,$request->servicetypeID);
                foreach($request->servicetypeID as $valbs){
                    $checkserviceid = ServiceBranch::where('serviceID',$valbs)->where('branchId',$request->id)->count();
                    if($checkserviceid==0){
                        $ServiceBranch = new ServiceBranch;
                        $ServiceBranch->branchId = $request->id;
                        $ServiceBranch->agentId = $request->agentid;
                        $ServiceBranch->serviceID = $valbs;
                        $ServiceBranch->save();
                    }                    
                }
                foreach($results as $rvals){
                    ServiceBranch::where('serviceID',$rvals)->where('branchId',$request->id)->delete();
                } 
                if(session::get('usertype')==2){
                    $log = array(
                        'staff_id'=>session::get('id'),
                        'logDate'=>date('Y-m-d'),
                        'event_name'=>"Update Branch in an agent",
                        'event_category'=>16,
                        'event_id'=>$request->id,
                    );
                    // print_r($log);
                    $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
                }           
                echo 1;
            }             

        }
    }

    public function change_branch_status(Request $request){
        $id = $request->id;
        $status = $request->status;
        $data = AgentBranch::find($id);
        $data->status = $status;
        $data->save();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Change Branch Status",
                'event_category'=>16,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }

    public function delete_branch(Request $request){
        $id = $request->id;
        $category = AgentBranch::find($id);
        $category->status = 2;
        $category->save();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Delete Branch",
                'event_category'=>16,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }
    
    
}
