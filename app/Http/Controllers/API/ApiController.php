<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Agent;
use App\Models\Magazine;
use App\Models\CarModel;
use App\Models\Vehicle;
use App\Models\VehicleExteriorColors;
use App\Models\VehicleInteriorColors;
use App\Models\VehicleTrimBody;
use App\Models\VehicleTrimEngine;
use App\Models\VehicleTrimMileage;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\CarImage;
use App\Models\CarFavorite;
use App\Models\Deal;
use App\Models\DealDetail;
use App\Models\WelcomeImage;
use App\Models\ImageSetting;
use App\Models\Viewed;
use App\Models\BrandFavorite;
use App\Models\MyCar;
use App\Models\CarReview;
use App\Models\AgentFavorite;
use App\Models\NewsFavorite;
use App\Models\DealType;
use App\Models\VehicleType;
use App\Models\Category;
use App\Models\MycarService;
use App\Models\AgentReview;
use App\Models\AgentBanner;
use Auth;
use Laravel\Passport\Passport;
use Carbon\Carbon;
use Google\Client as GoogleClient;

class ApiController extends Controller
{
    private $serviceAccountFile;
    function __construct()
    {
       $this->serviceAccountFile = storage_path('gearz.json'); 
    }
    //User Registration
    public function registerUser(Request $request){
        $err_array =array();
        $email = $request->email;
        $username = $request->username;
        $phone = $request->phone;
        $dob = $request->dob;
        $deviceType = $request->deviceType;
        $gender = $request->gender;
        $language = $request->language;
        $countryCode = $request->countryCode;
        $countryName = $request->countryName;
        $DriverLicense = $request->DriverLicense;
        $DriverLicenseback = $request->DriverLicenseback;
        $license_expire_date = $request->license_expire_date;
        $deviceModel = $request->deviceModel;
        if($email==null){
            $err_array[]='email';    
        }
        if($username==null){
            $err_array[]='username';    
        }
        if($gender==null){
            $err_array[]='gender';    
        }
        if($phone==null){
            $err_array[]='phone';    
        }
        if($dob==null){
            $err_array[]='dob';    
        }
        if($deviceType==null){
            $err_array[]='deviceType';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            if($language == 2){
                $msg_success = "لقد قمت بالتسجيل بنجاح";
                $msg_failed = "رقم الجوال موجود بالفعل";
            }else{
                $msg_success = "You have successfully registered";
                $msg_failed = "Mobile Number has already exist";
            }
            $checkuser = User::where('mobile_number',$phone)->where('status',1)->count();
            if($checkuser==0){
                if($request->DriverLicense!=''){
                    $imageName = "f".time().'.'.$request->DriverLicense->extension();      
                    $request->DriverLicense->move(public_path('images'), $imageName);
                }else{
                    $imageName = '';
                }
                if($request->DriverLicenseback!=''){
                    $DriverLicenseback = "r".time().'.'.$request->DriverLicenseback->extension();      
                    $request->DriverLicenseback->move(public_path('images'), $DriverLicenseback);
                }else{
                    $DriverLicenseback = '';
                }
                $user = User::create([
                    'name'=>$request->username,
                    'email'=>$request->email,
                    'mobile_number'=>$phone,
                    'gender'=>$gender,
                    'dob'=>$dob,
                    'deviceType'=>$deviceType,
                    'language'=>$language,
                    'countryCode'=>$countryCode,
                    'countryName'=>$countryName,
                    'license_expire_date' => $license_expire_date,
                    'password'=>\Hash::make('123456'),
                    'DriverLicense' => $imageName,
                    'DriverLicenseback' => $DriverLicenseback,
                    'deviceModel' => $deviceModel,
                    'status' => 1
                ]); 
                $users = User::find($user->id);            
                $tokenResult = $users->createToken('GearzappToken');
                $tokens = $tokenResult->token;
                $tokens->expires_at = Carbon::now()->addWeeks(1);
                $tokens->save();
                $userdata = User::find($user->id);
                $userdata->accessToken = $tokenResult->accessToken;
                $userdata->save();

                return response()->json(['success'=>'true','message'=>$msg_success,'token'=>$tokenResult->accessToken,'userID'=>$user->id], 200);
            }else{
                return response()->json(['success'=>'false','message'=>$msg_failed], 200);
            }            
        }
    }

    //User Login
    public function login(Request $request){
        $err_array =array();
        $phone = $request->phone;
        $deviceType = $request->deviceType;
        $language = $request->language;
        $deviceModel = $request->deviceModel;
        if($phone==null){
            $err_array[]='phone';    
        }        
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            if($language == 2){
                $msg_success = "لقد قمت بتسجيل الدخول بنجاح";
                $msg_failed = "رقم الهاتف المحمول هذا غير مسجل لدينا";
            }else{
                $msg_success = "You have successfully login";
                $msg_failed = "This mobile number is not registered with us";
            }
            $data=[
                "mobile_number"=>$request->phone,
                "password"=>'123456',                
                "status"=>1
            ];
            if(auth()->attempt($data)){
                if($phone!=9711987132){
                    $user = User::find(auth()->user()->id);            
                    $tokenResult = $user->createToken('GearzappToken');
                    $tokens = $tokenResult->token;
                    $tokens->expires_at = Carbon::now()->addWeeks(1);
                    $tokens->save();
                    $users = auth()->user();
                    $userdata = new User;
                    $userdata = User::find(auth()->user()->id);
                    $userdata->accessToken = $tokenResult->accessToken;
                    $userdata->deviceToken = $request->deviceToken;
                    $userdata->deviceType = $request->deviceType;
                    $userdata->language = $request->language;
                    $userdata->deviceModel = $request->deviceModel;
                    $userdata->is_login = 1;
                    $userdata->save();
                    if($user->deviceModel == $request->deviceModel){
                        $suc = 1;
                    }else{
                        $suc = 0;
                    }
                    return response()->json(['success'=>'true','message'=>$msg_success,'token'=>$tokenResult->accessToken,'userID'=>$user->id,'login'=>$suc], 200);
                }else{
                    return response()->json(['success'=>'true','message'=>$msg_success,'token'=>"",'userID'=>43,'login'=>1], 200);
                }  
            }else{
                return response()->json(['success'=>'false','message'=>$msg_failed,'login'=>3], 200);
            }            
        }
    }

    //device verification
    public function device_verification(Request $request){
        $err_array =array();
        $phone = $request->phone;
        $language = $request->language;
        $deviceModel = $request->deviceModel;
        if($phone==null){
            $err_array[]='phone';    
        }        
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{            
            $check_device = User::where('mobile_number',$phone);
            if($check_device->count()!=0){
                if($check_device->first()->deviceModel == $deviceModel){
                    $suc = 1;
                }else{
                    $suc = 0;
                }
            }else{
                $suc = 0;
            }
            if($suc==1){
                return response()->json(['success'=>'true','message'=>"",'login'=>1], 200);
            }else{
                return response()->json(['success'=>'true','message'=>"",'login'=>0], 200);
            }                        
        }
    }

    //Get user profile
    public function getUserProfile(Request $request){
        $err_array =array();
        $userID = $request->userID;
        if($userID==null){
            $err_array[]='userID';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            $checkuser = User::where('id',$userID)->where('status',1);
            if($checkuser->count()!=0){ 
                $row = $checkuser->first();
                $data['id'] = $row->id;                
                $data['username'] = $row->name;                
                $data['gender'] = $row->gender;                
                $data['dob'] = $row->dob;                
                $data['email'] = $row->email;                
                $data['mobile_number'] = $row->mobile_number;                
                $data['DriverLicense'] = $row->DriverLicense;
                $data['DriverLicenseback'] = $row->DriverLicenseback;
                $data['license_expire_date'] = $row->license_expire_date;
                $data['location'] = $row->location;
                $data['profileImage'] = $row->profileImage;
                $data['countryCode'] = $row->countryCode;
                $data['countryName'] = $row->countryName;
                return response()->json(['success'=>'true','message'=>'','result'=>$data], 200);
            }else{
                return response()->json(['success'=>'false','message'=>''], 200);
            }            
        }
    }

    //Update User Profile
    public function UpdateProfile(Request $request){
        $err_array =array();
        $email = $request->email;
        $username = $request->username;
        $phone = $request->phone;
        $DriverLicense = $request->DriverLicense;
        $DriverLicenseback = $request->DriverLicenseback;
        $license_expire_date = $request->license_expire_date;
        $profileImage = $request->profileImage;
        $gender = $request->gender;
        $dob = $request->dob;
        $userID = $request->userID;
        $language = $request->language;
        if($email==null){
            $err_array[]='email';    
        }
        if($username==null){
            $err_array[]='username';    
        }
        if($phone==null){
            $err_array[]='phone';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            if($language == 2){
                $msg_success = "لقد قمت بالتحديث بنجاح";
                $msg_failed = "رقم الهاتف المحمول هذا مستخدم بالفعل من قبل مستخدم آخر";
            }else{
                $msg_success = "You have successfully Updated";
                $msg_failed = "This mobile number already used by another user";
            }
            $checkuser = User::where('mobile_number',$phone)->where('id',$request->userID);
            if($checkuser->count() >= 1 && $request->userID != $checkuser->first()->id){
                return response()->json(['success'=>'false','message'=>$msg_failed], 200);
            }else{
                if($request->DriverLicense!=''){
                    $imageName = "f".time().'.'.$request->DriverLicense->extension();      
                    $request->DriverLicense->move(public_path('images'), $imageName);
                }else{
                    $imageName = '';
                }
                if($request->DriverLicenseback!=''){
                    $DriverLicenseback = "r".time().'.'.$request->DriverLicenseback->extension();      
                    $request->DriverLicenseback->move(public_path('images'), $DriverLicenseback);
                }else{
                    $DriverLicenseback = '';
                }
                if($request->profileImage!=''){
                    $imageName1 = time().'.'.$request->profileImage->extension();      
                    $request->profileImage->move(public_path('images'), $imageName1);
                }else{
                    $imageName1 = '';
                }
                $user = new User;
                $user = User::find($userID);
                $user->name = $username;
                $user->email = $email;
                $user->mobile_number = $phone;
                $user->gender = $gender;
                $user->dob = $dob;
                $user->license_expire_date = $license_expire_date;
                $user->status = 1;
                if($imageName!=''){
                    $user->DriverLicense = $imageName;
                }
                if($imageName1!=''){
                    $user->profileImage = $imageName1;
                }
                if($DriverLicenseback!=''){
                    $user->DriverLicenseback = $DriverLicenseback;
                }
                $user->save();
                return response()->json(['success'=>'true','message'=>$msg_success], 200);
            }            
        }
        
    }

    //Dashboard
    public function dashboard(Request $request){
        $userID = $request->userID;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            $currentDate = date('Y-m-d');
            $banner = Banner::where('end_date','>=',$currentDate)->where('status',1)->orderBy('position_id', 'asc')->get();
            $bannerArray = array();
            foreach($banner as $value){
                $data['id'] = $value->id;
                $data['position_id'] = $value->position_id;
                $data['image'] = $value->image;
                $data['url'] = $value->url;
                $data['internal_external'] = $value->internal_external;
                if($language==2){
                    $data['name'] = $value->name_ar;
                }else{
                    $data['name'] = $value->name;
                }                    
                $data['start_date'] = $value->start_date;
                $data['end_date'] = $value->end_date;
                if($value->start_date<=$currentDate){
                    array_push($bannerArray,$data);
                }           
            }
            //popularbrand
            $popular = Brand::where('status',1)->where('popular',1)->orderBy('position','ASC')->get();
            $popularBrandArray = array();
            foreach($popular as $popValue){
                $datap['id'] = $popValue->id;
                if($language==2){
                    $datap['name'] = $popValue->name_ar;
                }else{
                    $datap['name'] = $popValue->name;
                }                    
                $datap['logo'] = $popValue->logo;
                array_push($popularBrandArray,$datap);
            }
            
            //agencies
            $agencies = Agent::where('status',1)->where('popular',1)->orderBy('position','ASC')->get();
            $agenciesArray = array();
            foreach($agencies as $aggvalue){
                $dataa['id'] = $aggvalue->id;
                if($language==2){
                    $dataa['name'] = $aggvalue->name_ar;
                }else{
                    $dataa['name'] = $aggvalue->name;
                }                    
                $dataa['logo'] = $aggvalue->logo;
                if($language==2){
                    $dataa['description'] = $aggvalue->discription_ar;
                }else{
                    $dataa['description'] = $aggvalue->description;
                }
                
                $dataa['images'] = $aggvalue->images;
                $dataa['tag_icon'] = $aggvalue->tag_icon;
                if($language==2){
                    $dataa['tag_name'] = $aggvalue->tag_name_ar;
                }else{
                    $dataa['tag_name'] = $aggvalue->tag_name;
                }
                
                $checkagentfav = AgentFavorite::where('userID',$userID)->where('agentID',$aggvalue->id)->count();
                if($checkagentfav!=0){
                    $dataa['favorite']=1;
                }else{
                    $dataa['favorite']=0;
                }
                $avgagentStar = AgentReview::where('agentID',$aggvalue->id)->avg('rate');
                $dataa['rating'] = "".number_format($avgagentStar, 1, '.', '');
                $agentReview = AgentReview::where('agentID',$aggvalue->id);
                $dataa['reviews'] = $agentReview->count();
                array_push($agenciesArray,$dataa);
            }
            //hotnews
            $check_news = Magazine::where('home',1)->where('type',1)->where('status',1)->where('position','!=',0)->count();
            if($check_news==0){
                $news = Magazine::where('home',1)->where('type',1)->where('status',1)->orderBy('postedDate', 'ASC')->get();
            }else{
                $news = Magazine::where('home',1)->where('type',1)->where('status',1)->orderBy('position', 'ASC')->get();
            }
            $newsarray = array();
            foreach($news as $nvalue){
                $datanews['id'] = $nvalue->id;                    
                $datanews['image'] = $nvalue->image;
                $datanews['videourl'] = $nvalue->videourl;                    
                $datanews['postedDate'] = $nvalue->postedDate;
                $datanews['tag_icon'] = $nvalue->tag_icon;
                if($language==2){
                    $datanews['heading'] = $nvalue->heading_ar;
                    $datanews['description'] = $nvalue->description_ar;
                    $datanews['postedBy'] = $nvalue->postedBy_ar;
                    $datanews['tag_name'] = $nvalue->tag_name_ar;
                }else{
                    $datanews['heading'] = $nvalue->heading;
                    $datanews['description'] = $nvalue->description;
                    $datanews['postedBy'] = $nvalue->postedBy;
                    $datanews['tag_name'] = $nvalue->tag_name;
                }
                $checknewsfav = NewsFavorite::where('userID',$userID)->where('newsID',$nvalue->id)->count();
                if($checknewsfav!=0){
                    $datanews['favorite']=1;
                }else{
                    $datanews['favorite']=0;
                }
                $datanews['totalviews'] = Viewed::where('menu_type',2)->where('menuID',$nvalue->id)->count();
                array_push($newsarray,$datanews);
            }
            //popularcar
            $vehicle = Vehicle::where('status',1)->where('popular',1)->orderBy('position','ASC')->get();
            $vehicleArray = array();
            foreach($vehicle as $carvalue){
                $datavehicle['id'] = $carvalue->id;
                $CarImage = CarImage::where('vehicleID',$carvalue->id);
                if($CarImage->count()!=0){
                    if($CarImage->first()->image_type==1){
                        $datavehicle['image'] =url('public/images/car/'.$CarImage->first()->image);
                    }else{
                        $datavehicle['image'] =$CarImage->first()->image;
                    }
                    
                }else{
                    $datavehicle['image'] ="";
                }
                if($language==2){
                    $datavehicle['name'] = $carvalue->name_ar;
                }else{
                    $datavehicle['name'] = $carvalue->name;
                }
                
                $datavehicle['modelID'] = $carvalue->modelID;
                $datavehicle['year'] = $carvalue->year;
                $VehicleTrimEnginecount = VehicleTrimEngine::where('vehicleID',$carvalue->id);                
                if($VehicleTrimEnginecount->count()!=0){
                    $VehicleTrimEngine = $VehicleTrimEnginecount->first();
                    if($VehicleTrimEngine->transmission!=''){
                        if (str_contains($VehicleTrimEngine->transmission, 'automatic')) { 
                            if($language==2){
                                $geartype = "تلقائي";
                            }else{
                                $geartype = "Automatic";
                            }
                            
                        }else{
                            if($language==2){
                                $geartype = "يدوي";
                            }else{
                                $geartype = "Manual";
                            }
                            
                        }
                    }else{
                        $geartype = "";
                    }
                }                   
                // $VehicleTrimEngine = VehicleTrimEngine::where('vehicleID',$carvalue->id)->first();
                // if()
                // if (str_contains($VehicleTrimEngine->transmission, 'automatic')) { 
                //    $geartype = "Automatic";
                // }else{
                //     $geartype = "Manual";
                // }
                $datavehicle['kmpl'] = $VehicleTrimEngine->horsepower_hp." HP";
                $datavehicle['cc'] = $VehicleTrimEngine->horsepower_rpm. " RPM";
                $datavehicle['geartype'] = $geartype;
                $checkfav = CarFavorite::where('userID',$userID)->where('vehicleID',$carvalue->id)->count();
                if($checkfav!=0){
                    $datavehicle['favorite']=1;
                }else{
                    $datavehicle['favorite']=0;
                }
                $avgStar = CarReview::where('vehicleID',$carvalue->id)->avg('rate');
                $datavehicle['rating'] = "".$avgStar;
                $CarReview = CarReview::where('vehicleID',$carvalue->id);
                $datavehicle['reviews'] = $CarReview->count();
                //$datavehicle['geartypes'] = $VehicleTrimEngine->transmission;
                array_push($vehicleArray,$datavehicle);
            }
            //topDeals
            $currentDate = date('Y-m-d');
            $deal = Deal::where('endDate','>=',$currentDate)->where('status',1)->where('popular',1)->orderBy('position','ASC')->get();
            //$deal = Deal::where('status',1)->where('popular',1)->get();
            $dealArray = array();
            foreach($deal as $dealvalue){
                $datadeal['id'] = $dealvalue->id;
                $datadeal['image'] = $dealvalue->image;
                $datadeal['tag_icon'] = $dealvalue->tag_icon;
                $datadeal['typesofdeal'] = $dealvalue->typesofdeal;
                // $datadeal['tag_name'] = $dealvalue->tag_name;
                if($language==2){
                    $datadeal['name'] = $dealvalue->name_ar;
                    $datadeal['tag_name'] = $dealvalue->tag_name_ar;
                    if($dealvalue->typesofdeal!=""){
                        $datadeal['typesofdeal_name'] = DealType::find($dealvalue->typesofdeal)->name_ar;
                    }else{
                        $datadeal['typesofdeal_name'] = "";
                    }
                    
                }else{
                    $datadeal['name'] = $dealvalue->name;
                    $datadeal['tag_name'] = $dealvalue->tag_name;
                    if($dealvalue->typesofdeal!=""){
                        $datadeal['typesofdeal_name'] = DealType::find($dealvalue->typesofdeal)->name;
                    }else{
                        $datadeal['typesofdeal_name'] = "";
                    }                        
                }
                array_push($dealArray,$datadeal);
            }                
            $arr['banner'] = $bannerArray;
            $arr['popularcar'] = $vehicleArray;
            $arr['popularbrand'] = $popularBrandArray;
            $arr['agencies'] = $agenciesArray;
            $arr['topDeals'] = $dealArray;
            $arr['hotnews'] = $newsarray;
            $carprofile = MyCar::where('userID',$userID)->where('status',1)->count();
            if($carprofile==0){
                $arr['carprofile'] = 0;
                //$arr['odometerupdate'] = 1;
            }else{                    
                $arr['carprofile'] = 1;
            }
            //odo meter last fill
            $checkodometer = MycarService::where('userID',$userID)->orderBy('serviceDate','DESC')->skip(0)->take(1);
            if($checkodometer->count()==0){
                $arr['odometerupdate'] = 1;
            }else{
                $servicedate = $checkodometer->first()->serviceDate;
                $servicedates = date('Y-m-d', strtotime($servicedate. ' + 7 days'));
                if($servicedates > date('Y-m-d')){
                    $arr['odometerupdate'] = 2;
                }else{
                    $arr['odometerupdate'] = 1; 
                }
            }
                
            $arr['location'] = User::find($userID)->location;
            return response()->json(['success'=>'true','message'=>'','result'=>$arr], 200);
        }
    }
    
    //City List
    public function city(Request $request){
        $userID = $request->userID;
        $language = $request->language;
        $country = $request->country;
        $page = $request->page;
        $filter = $request->filter;
        $search = $request->search;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($country==null){
            $err_array[]='country';    
        }        
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            if($filter==0){
                $pagedata = 30;
                $showdata = $pagedata*$page;
                $showdatafrom = $pagedata*$page-1;
                
                $country = Country::where('name',ucwords($country))->first();
                $stateArray = array();
                $states = State::select('id')->where('country_id',$country->id)->get();
                foreach($states as $statevalue){
                    array_push($stateArray,$statevalue->id);
                }
                $data['popularcity'] = City::select('id','name')->whereIN('state_id',$stateArray)->where('status',1)->where('popular',1)->get();

                $data['allcity'] = City::select('id','name')->whereIN('state_id',$stateArray)->where('status',1)->skip($showdatafrom)->take($showdata)->get();
                $totalcity =  City::select('id','name')->whereIN('state_id',$stateArray)->where('status',1)->count();
                $totalvalue = round($totalcity/30);           
                return response()->json(['success'=>'true','message'=>'','result'=>$data,'total_page'=>$totalvalue], 200);
            }else{
                $data['popularcity'] = [];
                $data['allcity'] = City::select('id','name')->where('name',ucfirst($search))->where('status',1)->get();
                $totalvalue = "0";           
                return response()->json(['success'=>'true','message'=>'','result'=>$data,'total_page'=>$totalvalue], 200);
            }
        }
    }

    //Add car as favorite
    public function addCarfavorites(Request $request){
        $userID = $request->userID;
        $vehicle_id = $request->vehicle_id;
        $favorite = $request->favorite;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';
        }
        if($vehicle_id==null){
            $err_array[]='vehicle_id';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            if($language == 2){
                $msg_success = "اضيف بنجاح";
                $msg_failed = "تمت الإزالة بنجاح";
            }else{
                $msg_success = "Added successfully";
                $msg_failed = "Removed successfully";
            }
            $check = CarFavorite::where('userID',$userID)->where('vehicleID',$vehicle_id)->count();
            if($check==0){
                $favorites = new CarFavorite;
                $favorites->vehicleID = $vehicle_id;
                $favorites->userID = $userID;
                $favorites->favorite = 1;
                $favorites->save();
                //send notification                
                if($language == 2){
                    $carname = Vehicle::where('id',$vehicle_id)->first()->name_ar;
                    $msgnotification = $carname." تمت إضافة السيارة كمفضلة لديك";
                    $titlenotification = "السيارة المفضلة";
                }else{
                    $carname = Vehicle::where('id',$vehicle_id)->first()->name;
                    $msgnotification = $carname." vehicle added as your favorite";
                    $titlenotification = "Vehicle Favorite";
                }
                $devicetoken = User::where('id',$userID)->first()->deviceToken;
                //notification_hide $fav_brand.','.$fav_car.','.$fav_agency.','.$fav_news;
                $notification_hide = User::where('id',$userID)->first()->notification_hide;
                if(strlen($notification_hide)>=7){
                    $notiarray = explode(',',$notification_hide);
                    if($notiarray[1]==0){
                        $this->send_notification($devicetoken, $msgnotification, $titlenotification);
                    }
                }else{
                    $this->send_notification($devicetoken, $msgnotification, $titlenotification);
                }
                //$this->send_notification($devicetoken, $msgnotification, $titlenotification);
                return response()->json(['success'=>'true','message'=>$msg_success], 200);

            }else{
                $favorites = CarFavorite::where('userID',$userID)->where('vehicleID',$vehicle_id)->delete();
                return response()->json(['success'=>'true','message'=>$msg_failed], 200);
            }

        }
    }

    //car favorite list
    public function favorites_list(Request $request){
        $userID = $request->userID;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            $favoritearray= array();
            $favorite = CarFavorite::where('userID',$userID)->orderBy('id','DESC')->get();
            foreach($favorite as $value){
                $data['id'] = $value->id;
                $data['userID'] = $value->userID;
                $data['vehicleID'] = $value->vehicleID;
                $vehicle = Vehicle::where('id',$value->vehicleID)->first();
                $data['name'] = $vehicle->name;
                $data['year'] = $vehicle->year;
                $data['modelID'] = $vehicle->modelID;
                $CarImage = CarImage::where('vehicleID',$value->vehicleID);
                    if($CarImage->count()!=0){
                        if($CarImage->first()->image_type==1){
                            $data['image'] =url('public/images/car/'.$CarImage->first()->image);
                        }else{
                            $data['image'] =$CarImage->first()->image;
                        }
                       
                    }else{
                        $data['image'] ="";
                    }
                // $CarImage = CarImage::where('vehicleID',$value->vehicleID)->where('type',1);
                // if($CarImage->count()!=0){
                //     $data['image'] =$CarImage->first()->image;
                // }else{
                //     $data['image'] ="";
                // }
                $avgStar = CarReview::where('vehicleID',$value->vehicleID)->avg('rate');
                $data['rating'] = "".$avgStar;
                $CarReview = CarReview::where('vehicleID',$value->vehicleID);
                $data['reviews'] = $CarReview->count();
                $data['price'] = "";
                $VehicleTrimEnginecount = VehicleTrimEngine::where('vehicleID',$value->vehicleID);                
                    if($VehicleTrimEnginecount->count()!=0){
                        $VehicleTrimEngine = $VehicleTrimEnginecount->first();
                        if($VehicleTrimEngine->transmission!=''){
                            if (str_contains($VehicleTrimEngine->transmission, 'automatic')) { 
                                $geartype = "Automatic";
                            }else{
                                $geartype = "Manual";
                            }
                        }else{
                            $geartype = "";
                        }
                    }                   
                    // $VehicleTrimEngine = VehicleTrimEngine::where('vehicleID',$carvalue->id)->first();
                    // if()
                    // if (str_contains($VehicleTrimEngine->transmission, 'automatic')) { 
                    //    $geartype = "Automatic";
                    // }else{
                    //     $geartype = "Manual";
                    // }
                    $data['kmpl'] = $VehicleTrimEngine->horsepower_hp." HP";
                    $data['cc'] = $VehicleTrimEngine->horsepower_rpm. " RPM";
                    $data['geartype'] = $geartype;
                array_push($favoritearray, $data);
            }            
            return response()->json(['success'=>'true','message'=>"",'result'=>$favoritearray], 200);
        }
    }

    //All deal List
    public function alldeals(Request $request){
        $userID = $request->userID;
        $locationID = $request->locationID;
        $filterIdList = $request->filterIdList;
        //$filterIdList = [1,2,3];
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($locationID==null){
            $err_array[]='locationID';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            // print_r($filterIdList);
            // die;
            $deal_details = DealDetail::where('cityID',$locationID)->orWhere('cityID','')->get();            
            $dealArray = array();
            foreach($deal_details as $dvalue){
                //echo $dvalue->dealID."-----";
                $currentDate = date('Y-m-d');
                //$deal = Deal::where('id',$dvalue->dealID)->where('status',1)->where('whereshow',3)->orWhere('whereshow',1)->first();
                $deal = Deal::where('id', $dvalue->dealID)
                ->where('status', 1)
                ->where(function ($query) {
                    $query->where('whereshow', 3)
                        ->orWhere('whereshow', 1);
                })
                ->first();
                $datadeal['position'] = $deal->position; 
                $datadeal['id'] = $deal->id;                
                                
                $datadeal['startDate'] = $deal->startDate;                
                $datadeal['endDate'] = $deal->endDate;     
                $datadeal['image'] = $deal->image;
                $datadeal['tag_icon'] = $deal->tag_icon;
                
                $future = strtotime(date('Y-m-d')); //Future date.
                $timefromdb = strtotime($deal->endDate);
                $timeleft = $timefromdb-$future;
                $daysleft = round((($timeleft/24)/60)/60); 
                $datadeal['remaning_day']= $daysleft;
                $datadeal['typesofdeal'] = $deal->typesofdeal;
                if($language==2){
                    $datadeal['name'] = $deal->name_ar;                
                    $datadeal['discription'] = $deal->discription_ar;
                    $datadeal['tag_name'] = $deal->tag_name_ar;
                    if($deal->typesofdeal!=""){
                        $datadeal['typesofdeal_name'] = DealType::find($deal->typesofdeal)->name_ar;
                    }else{
                        $datadeal['typesofdeal_name'] = "";
                    }
                    
                }else{
                    $datadeal['name'] = $deal->name;                
                    $datadeal['discription'] = $deal->discription;
                    $datadeal['tag_name'] = $deal->tag_name;
                    if($deal->typesofdeal!=""){
                        $datadeal['typesofdeal_name'] = DealType::find($deal->typesofdeal)->name;
                    }else{
                        $datadeal['typesofdeal_name'] = "";
                    }
                }
                //array_push($dealArray,$datadeal);
                if($deal->endDate >= $currentDate){
                    if(empty($filterIdList)){
                        array_push($dealArray,$datadeal);
                    }else{
                        //$filterIdListarray=explode(",",$filterIdList);
                        if(in_array($deal->typesofdeal, $filterIdList)){
                            array_push($dealArray,$datadeal);
                        }
                    }                                        
                }
            }
            //die;
            //topDeals
            $currentDate = date('Y-m-d');
            $deals = Deal::where('endDate','>=',$currentDate)->where('status',1)->where('popular',1)->get();
            $dealArrays = array();
            foreach($deals as $dealvalues){
                $datadeals['id'] = $dealvalues->id;
                $datadeals['image'] = $dealvalues->image;
                array_push($dealArrays,$datadeals);
                // if($dealvalues->startDate<=$currentDate){
                //     array_push($dealArrays,$datadeals);
                // }
            } 
            sort($dealArray);          
            $arr['all'] = $dealArray;
            $arr['banner'] = $dealArrays;
            return response()->json(['success'=>'true','message'=>'','result'=>$arr], 200);
        }
    }

    //Deals details
    public function dealsdetail(Request $request){
        $userID = $request->userID;
        $dealID = $request->dealID;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($dealID==null){
            $err_array[]='dealID';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            $currentDate = date('Y-m-d');
            $deal = Deal::where('id',$dealID)->where('endDate','>=',$currentDate)->where('status',1)->first();
            if($deal->startDate<=$currentDate){
                $datadeal['id'] = $deal->id;                
                //$datadeal['name'] = $deal->name;                
                //$datadeal['discription'] = $deal->discription;                
                $datadeal['startDate'] = $deal->startDate;                
                $datadeal['endDate'] = $deal->endDate;     
                $datadeal['image'] = $deal->image;
                $datadeal['internalpage'] = $deal->internalpage;
                $datadeal['pageid'] = $deal->pageid;
                $future = strtotime(date('Y-m-d')); //Future date.
                $timefromdb = strtotime($deal->endDate);
                $timeleft = $timefromdb-$future;
                $daysleft = round((($timeleft/24)/60)/60); 
                $datadeal['remaning_day']= $daysleft;
                $datadeal['dealType']= $deal->dealType;
                $datadeal['tag_icon'] = $deal->tag_icon;
                //$datadeal['tag_name'] = $deal->tag_name;
                if($language==2){
                    $datadeal['name'] = $deal->name_ar;                
                    $datadeal['discription'] = $deal->discription_ar;
                    $datadeal['tag_name'] = $deal->tag_name_ar;
                }else{
                    $datadeal['name'] = $deal->name;                
                    $datadeal['discription'] = $deal->discription;
                    $datadeal['tag_name'] = $deal->tag_name;
                }
                
                $deal_details = DealDetail::where('dealID',$dealID)->first();
                if($deal->dealType==1){
                    if($deal_details->dealTypeID!=""){
                        $datadeal['dealTypeid']= $deal_details->dealTypeID;
                        if($language==2){
                            $datadeal['dealTypename']= Brand::find($deal_details->dealTypeID)->name_ar;
                        }else{
                            $datadeal['dealTypename']= Brand::find($deal_details->dealTypeID)->name;
                        }

                    }else{
                        $datadeal['dealTypeid']= "";
                        if($language==2){
                            $datadeal['dealTypename']= "";
                        }else{
                            $datadeal['dealTypename']= "";
                        }

                    }
                    
                    
                    
                }else{
                    if($deal_details->dealTypeID!=""){
                        $datadeal['dealTypeid']= $deal_details->dealTypeID;
                        if($language==2){
                            $datadeal['dealTypename']= Agent::find($deal_details->dealTypeID)->name_ar;
                        }else{
                            $datadeal['dealTypename']= Agent::find($deal_details->dealTypeID)->name;
                        }

                    }else{
                        $datadeal['dealTypeid']= "";
                        if($language==2){
                            $datadeal['dealTypename']= "";
                        }else{
                            $datadeal['dealTypename']= "";
                        }

                    }
                    
                    // $datadeal['dealTypeid']= $deal_details->dealTypeID;
                    // if($language==2){
                    //     $datadeal['dealTypename']= Agent::find($deal_details->dealTypeID)->name_ar;
                    // }else{
                    //     $datadeal['dealTypename']= Agent::find($deal_details->dealTypeID)->name;    
                    // }
                    
                }
                return response()->json(['success'=>'true','message'=>'','result'=>$datadeal], 200);
            
            }            
        }
    }

    //welcome Image
    public function welcomeimage(Request $request){
        $currentDate = date('Y-m-d');
        $language = $request->language;
        $banner = WelcomeImage::where('end_date','>=',$currentDate)->where('status',1)->orderBy('position_id', 'asc')->get();
        $bannerArray = array();
        foreach($banner as $value){
            $data['id'] = $value->id;
            //$data['position_id'] = $value->position_id;
            $data['image'] = $value->image;
            if($language==2){
                $data['name'] = $value->name_ar;
                $data['discription'] = $value->discription_ar;
            }else{
                $data['name'] = $value->name;
                $data['discription'] = $value->discription;
            }            
            $data['url'] = $value->url;
            $data['start_date'] = $value->start_date;
            $data['end_date'] = $value->end_date;            
            $data['image_time'] = $value->image_time;            
            $data['automatic'] = $value->skipable;         
            $data['internal_external'] = $value->internal_external;
            $img =  explode(".",$value->image);      
            $data['type'] = end($img);         
            if($value->start_date<=$currentDate){
                array_push($bannerArray,$data);
            }
                       
        }
        //image setting
        $ImageSetting = ImageSetting::find(1);
        $backgroundimage =$ImageSetting->backgroundimage;
        $sliding =$ImageSetting->sliding; 
        return response()->json(['success'=>'true','message'=>'','result'=>$bannerArray,'skippable'=>0,'sliding'=>0,'background_image'=>$backgroundimage], 200);
    }

    //logout
    public function logout (Request $request) {
        $userID = $request->userID;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            if($language == 2){
                $msg_success = "تسجيل الخروج بنجاح";
            }else{
                $msg_success = "Logout successfully";
            }
            if (Auth::check()) {
                Auth::user()->AauthAcessToken()->delete();
            }
            //remove device token
            if($userID!=43){
                $user = User::find($userID);
                $user->deviceToken = '';
                $user->accessToken = '';
                $user->is_login = 0;
                $user->save();
            }
            return response()->json(['success'=>'true','message'=>$msg_success], 200);
        }
       
    }

    //User viewed
    public function viewed(Request $request){
        $userID = $request->userID;
        $menutype = $request->menutype;
        $language = $request->language;
        $id = $request->id;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($menutype==null){
            $err_array[]='menutype';    
        }
        if($id==null){
            $err_array[]='id';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            if($language == 2){
                $msg_success = "حفظ بنجاح";
            }else{
                $msg_success = "Saved successfully";
            }
            $checkip = Viewed::where('userID',$userID)->where('menuID',$id)->where('menu_type',$menutype)->count();
            if($checkip==0){
                $viewed = new Viewed;
                $viewed->menu_type = $request->menutype;
                $viewed->ip_address = $_SERVER['REMOTE_ADDR'];
                $viewed->userID = $userID;
                $viewed->menuID = $request->id;
                $viewed->save();
            }
            return response()->json(['success'=>'true','message'=>$msg_success], 200);
        }
    }

    //Add Brand as favorite
    public function addbrandfavorites(Request $request){
        $userID = $request->userID;
        $brandID = $request->brandID;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($brandID==null){
            $err_array[]='brandID';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            if($language == 2){
                $msg_success = "اضيف بنجاح";
                $msg_failed = "تمت الإزالة بنجاح";
            }else{
                $msg_success = "Added successfully";
                $msg_failed = "Removed successfully";
            }
            $check = BrandFavorite::where('userID',$userID)->where('brandID',$brandID)->count();
            if($check==0){
                $favorites = new BrandFavorite;
                $favorites->brandID = $brandID;
                $favorites->userID = $userID;
                $favorites->favorite = 1;
                $favorites->save();
                //send notification                
                if($language == 2){
                    $carname = Brand::where('id',$brandID)->first()->name_ar;
                    $msgnotification = $carname." تمت إضافة العلامة التجارية باعتبارها المفضلة لديك";
                    $titlenotification = "العلامة التجارية المفضلة";
                }else{
                    $carname = Brand::where('id',$brandID)->first()->name;
                    $msgnotification = $carname." brand added as your favorite";
                    $titlenotification = "Brand Favorite";
                }
                $devicetoken = User::where('id',$userID)->first()->deviceToken;
                //notification_hide $fav_brand.','.$fav_car.','.$fav_agency.','.$fav_news;
                $notification_hide = User::where('id',$userID)->first()->notification_hide;
                if(strlen($notification_hide)>=7){
                    $notiarray = explode(',',$notification_hide);
                    if($notiarray[0]==0){
                        $this->send_notification($devicetoken, $msgnotification, $titlenotification);
                    }
                }else{
                    $this->send_notification($devicetoken, $msgnotification, $titlenotification);
                }
                //$this->send_notification($devicetoken, $msgnotification, $titlenotification);
                return response()->json(['success'=>'true','message'=>$msg_success], 200);

            }else{
                $favorites = BrandFavorite::where('userID',$userID)->where('brandID',$brandID)->delete();
                return response()->json(['success'=>'true','message'=>$msg_failed], 200);
            }

        }
    }

    //Brand favorite list
    public function brandfavorites_list(Request $request){
        $userID = $request->userID;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            $favoritearray= array();
            $favorite = BrandFavorite::where('userID',$userID)->orderBy('id','DESC')->get();
            foreach($favorite as $value){
                $data['id'] = $value->id;
                $data['userID'] = $value->userID;
                $data['brandID'] = $value->brandID;
                $vehicle = Brand::where('id',$value->brandID)->first();                                
                $data['image'] =$vehicle->logo;                
                $data['tag_icon'] =$vehicle->tag_icon;
                if($language==2){
                    $data['name'] = $vehicle->name_ar;
                    $data['description'] =$vehicle->description_ar;
                    $data['tag_name'] =$vehicle->tag_name_ar;
                }else{
                    $data['name'] = $vehicle->name;
                    $data['description'] =$vehicle->description;
                    $data['tag_name'] =$vehicle->tag_name;
                }             
                array_push($favoritearray, $data);
            }            
            return response()->json(['success'=>'true','message'=>"",'result'=>$favoritearray], 200);
        }
    }

    //Update user location
    public function update_userlocation(Request $request){
        $userID = $request->userID;
        $locationID = $request->locationID;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($locationID==null){
            $err_array[]='locationID';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            if($language == 2){
                $msg_success = "تم التحديث بنجاح";
            }else{
                $msg_success = "Successfully updated";
            }
            $user = User::find($userID);           
            $user->location = $locationID;
            $user->save();
            return response()->json(['success'=>'true','message'=>$msg_success], 200);
        }
    }
    
    //Update user language
    public function update_userlanguage(Request $request){
        $userID = $request->userID;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($language==null){
            $err_array[]='language';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            if($language == 2){
                $msg_success = "تم التحديث بنجاح";
            }else{
                $msg_success = "Successfully updated";
            }
            $user = User::find($userID);           
            $user->language = $language;
            $user->save();
            return response()->json(['success'=>'true','message'=>$msg_success], 200);
        }
    }

    //home search
    public function home_search(Request $request){
        $userID = $request->userID;
        $searchtext = $request->searchtext;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($language==null){
            $err_array[]='language';    
        }
        if($searchtext==null){
            $err_array[]='searchtext';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            //agencies
            if($language==2){
                $agencies = Agent::where('status',1)->where('name_ar', 'like', '%' . $searchtext . '%')->orWhere('discription_ar', 'like', '%' . $searchtext . '%')->get();
            }else{
                $agencies = Agent::where('status',1)->where('name', 'like', '%' . $searchtext . '%')->orWhere('description', 'like', '%' . $searchtext . '%')->get();
            }            
            $agenciesArray = array();
            foreach($agencies as $aggvalue){
                $dataa['id'] = $aggvalue->id;
                if($language==2){
                    $dataa['name'] = $aggvalue->name_ar;
                }else{
                    $dataa['name'] = $aggvalue->name;
                }                    
                $dataa['logo'] = $aggvalue->logo;
                if($language==2){
                    $dataa['description'] = $aggvalue->discription_ar;
                }else{
                    $dataa['description'] = $aggvalue->description;
                }
                
                $dataa['images'] = $aggvalue->images;
                $dataa['tag_icon'] = $aggvalue->tag_icon;
                if($language==2){
                    $dataa['tag_name'] = $aggvalue->tag_name_ar;
                }else{
                    $dataa['tag_name'] = $aggvalue->tag_name;
                }
                
                $checkagentfav = AgentFavorite::where('userID',$userID)->where('agentID',$aggvalue->id)->count();
                if($checkagentfav!=0){
                    $dataa['favorite']=1;
                }else{
                    $dataa['favorite']=0;
                }
                array_push($agenciesArray,$dataa);
            }
           
            //hotnews
            if($language==2){
                $news = Magazine::where('type',1)->where('status',1)->where('heading_ar', 'like', '%' . $searchtext . '%')->orWhere('description_ar', 'like', '%' . $searchtext . '%')->get();
            }else{
                $news = Magazine::where('type',1)->where('status',1)->where('heading', 'like', '%' . $searchtext . '%')->orWhere('description', 'like', '%' . $searchtext . '%')->get();
            }            
            $newsarray = array();
            foreach($news as $nvalue){
                $datanews['id'] = $nvalue->id;                    
                $datanews['image'] = $nvalue->image;
                $datanews['videourl'] = $nvalue->videourl;                    
                $datanews['postedDate'] = $nvalue->postedDate;
                $datanews['tag_icon'] = $nvalue->tag_icon;
                if($language==2){
                    $datanews['heading'] = $nvalue->heading_ar;
                    $datanews['description'] = $nvalue->description_ar;
                    $datanews['postedBy'] = $nvalue->postedBy_ar;
                    $datanews['tag_name'] = $nvalue->tag_name_ar;
                }else{
                    $datanews['heading'] = $nvalue->heading;
                    $datanews['description'] = $nvalue->description;
                    $datanews['postedBy'] = $nvalue->postedBy;
                    $datanews['tag_name'] = $nvalue->tag_name;
                }
                $checknewsfav = NewsFavorite::where('userID',$userID)->where('newsID',$nvalue->id)->count();
                if($checknewsfav!=0){
                    $datanews['favorite']=1;
                }else{
                    $datanews['favorite']=0;
                }
                $datanews['totalviews'] = Viewed::where('menu_type',2)->where('menuID',$nvalue->id)->count();
                array_push($newsarray,$datanews);
            }
            //popularcar
            if($language==2){
                $vehicle = Vehicle::where('status',1)->where('name_ar', 'like', '%' . $searchtext . '%')->orWhere('description_ar', 'like', '%' . $searchtext . '%')->get();
            }else{
                $vehicle = Vehicle::where('status',1)->where('name', 'like', '%' . $searchtext . '%')->orWhere('description', 'like', '%' . $searchtext . '%')->get();
            }           
            $vehicleArray = array();
            foreach($vehicle as $carvalue){
                $datavehicle['id'] = $carvalue->id;
                $datavehicle['year'] = $carvalue->year;
                $CarImage = CarImage::where('vehicleID',$carvalue->id);
                if($CarImage->count()!=0){
                    if($CarImage->first()->image_type==1){
                        $datavehicle['image'] =url('public/images/car/'.$CarImage->first()->image);
                    }else{
                        $datavehicle['image'] =$CarImage->first()->image;
                    }
                    
                }else{
                    $datavehicle['image'] ="";
                }
                // $CarImage = CarImage::where('vehicleID',$carvalue->id)->where('type',1);
                // if($CarImage->count()!=0){
                //     $datavehicle['image'] =$CarImage->first()->image;
                // }else{
                //     $datavehicle['image'] ="";
                // }
                if($language==2){
                    $datavehicle['name'] = $carvalue->name_ar;
                }else{
                    $datavehicle['name'] = $carvalue->name;
                }
                
                $datavehicle['modelID'] = $carvalue->modelID;
                $VehicleTrimEnginecount = VehicleTrimEngine::where('vehicleID',$carvalue->id);                
                if($VehicleTrimEnginecount->count()!=0){
                    $VehicleTrimEngine = $VehicleTrimEnginecount->first();
                    if($VehicleTrimEngine->transmission!=''){
                        if (str_contains($VehicleTrimEngine->transmission, 'automatic')) { 
                            if($language==2){
                                $geartype = "تلقائي";
                            }else{
                                $geartype = "Automatic";
                            }
                            
                        }else{
                            if($language==2){
                                $geartype = "يدوي";
                            }else{
                                $geartype = "Manual";
                            }
                            
                        }
                    }else{
                        $geartype = "";
                    }
                }                   
                // $VehicleTrimEngine = VehicleTrimEngine::where('vehicleID',$carvalue->id)->first();
                // if()
                // if (str_contains($VehicleTrimEngine->transmission, 'automatic')) { 
                //    $geartype = "Automatic";
                // }else{
                //     $geartype = "Manual";
                // }
                $datavehicle['kmpl'] = $VehicleTrimEngine->horsepower_hp." HP";
                $datavehicle['cc'] = $VehicleTrimEngine->horsepower_rpm. " RPM";
                $datavehicle['geartype'] = $geartype;
                $checkfav = CarFavorite::where('userID',$userID)->where('vehicleID',$carvalue->id)->count();
                if($checkfav!=0){
                    $datavehicle['favorite']=1;
                }else{
                    $datavehicle['favorite']=0;
                }
                $avgStar = CarReview::where('vehicleID',$carvalue->id)->avg('rate');
                $datavehicle['rating'] = "".$avgStar;
                $CarReview = CarReview::where('vehicleID',$carvalue->id);
                $datavehicle['reviews'] = $CarReview->count();
                //$datavehicle['geartypes'] = $VehicleTrimEngine->transmission;
                array_push($vehicleArray,$datavehicle);
            }
            //review
            $review_array = array();
            foreach($vehicleArray as $vechrev){
                $car_review = CarReview::where('vehicleID',$vechrev['id'])->limit(1)->offset(0)->orderBy('id','DESC');
                if($car_review->count()!=0){
                    $car_reviews = $car_review->first();
                    $datareview['name'] = $vechrev['name'];
                    $datareview['rate'] = $car_reviews->rate;
                    $datareview['title'] = $car_reviews->title;
                    $datareview['description'] = $car_reviews->message;
                    $datareview['username'] = User::find($car_reviews->userID)->name;
                    $datareview['reviewDate'] = date('M d, Y',strtotime($car_reviews->created_at));
                    array_push($review_array,$datareview);
                }
                
            }
           
            $arr['popularcar'] = $vehicleArray;
            $arr['agencies'] = $agenciesArray;
            $arr['hotnews'] = $newsarray;            
            $arr['review'] = $review_array;            
            return response()->json(['success'=>'true','message'=>'','result'=>$arr], 200);

        }
    }

    public function dealtype(Request $request){
        $userID = $request->userID;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($language==null){
            $err_array[]='language';    
        }        
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            $dealtype = DealType::where('status',1)->get();
            $recordArray = array();
            foreach($dealtype as $value){
                $data['id'] = $value->id;
                if($language==2){
                    $data['name'] = $value->name_ar;
                }else{
                    $data['name'] = $value->name;
                }
                array_push($recordArray,$data);
            }
            return response()->json(['success'=>'true','message'=>'','result'=>$recordArray], 200);
        }
    }

    public function car_fillter(Request $request){
        $userID = $request->userID;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($language==null){
            $err_array[]='language';    
        }        
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            //VehicleType
            $VehicleTypeArray = array();
            $VehicleType = VehicleType::where('status',1)->get();
            foreach($VehicleType as $value){
                $vehicle_data['id'] = $value->id;
                if($language==2){
                    $vehicle_data['name'] = $value->name_ar;
                }else{
                    $vehicle_data['name'] = $value->name;
                }               
                $vehicle_data['image'] = $value->image;
                array_push($VehicleTypeArray,$vehicle_data);
            }
            //fule type
            if($language==2){
                $fuletype = ["ديزل" => 'diesel.png', "بنزين" => 'petrol-station.png', "غاز طبيعي مضغوط" => 'gas-station.png', "كهرباء" => 'electric.png',"هجين"=>'hybrid.png'];
            }else{
                //$fuletype = ['Diesel'=>'1','Petrol'=>'2','CNG'=>'3','Electric'=>'4'];
                $fuletype = ['Diesel' => 'diesel.png', 'Petrol' => 'petrol-station.png', 'Gas' => 'gas-station.png', 'Electric' => 'electric.png','Hybrid'=>'hybrid.png'];
            }
            $i=1;
            $fuletypeArray = array();
            foreach($fuletype as $key => $fulevalue){
                $fule_data['id'] = $i;
                $fule_data['name'] = $key;
                $fule_data['image'] = $fulevalue;
                array_push($fuletypeArray,$fule_data);
                $i++;

            }
            //seats
            if($language==2){
                $seats = "عدد المقاعد";
            }else{                
                $seats = "Seater";
            }
            $j=1;
            $seatsArray =array();
            $seatdata =[2,4,5,6,7,8,9,10,12];
            foreach($seatdata as $seatvalue){
                $data_seats['id'] = $j;
                $data_seats['name'] = $seatvalue.' '.$seats;
                array_push($seatsArray,$data_seats);
                $j++;
            }
            //cylender
            if($language==2){
                $cyliender = "اسطوانة";
            }else{                
                $cyliender = "Cylinder";
            }
            $k=1;
            $cylenderArray =array();
            $cylenderdata =[1,3,4,6,8,10,12];
            foreach($cylenderdata as $cylindervalue){
                $data_cyliender['id'] = $k;
                $data_cyliender['name'] = $cylindervalue.' '.$cyliender;
                array_push($cylenderArray,$data_cyliender);
                $k++;
            }
            //transmission
            if($language==2){
                
                $transmission = ['تلقائي', 'يدوي'];
            }else{
                $transmission = ['Automatic','Manual'];
            }
            $l=1;
            $transmissionArray = array();
            foreach($transmission as $transmissionvalue){
                $transmission_data['id'] = $l;
                $transmission_data['name'] = $transmissionvalue;
                array_push($transmissionArray,$transmission_data);
                $l++;

            }
            $recordArray['VehicleTypeArray'] = $VehicleTypeArray;
            $recordArray['fuletypeArray'] = $fuletypeArray;
            $recordArray['seatsArray'] = $seatsArray;
            $recordArray['cylenderArray'] = $cylenderArray;
            $recordArray['transmissionArray'] = $transmissionArray;
            return response()->json(['success'=>'true','message'=>'','result'=>$recordArray], 200);
        }
    }

    public function Category(Request $request){
        $userID = $request->userID;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($language==null){
            $err_array[]='language';    
        }        
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            $categoryArray = array();
            $category = Category::where('status',1)->get();
            foreach($category as $value){
                $data['id'] = $value->id;
                if($language==2){
                    $data['name'] = $value->name_ar;
                }else{
                    $data['name'] = $value->name;
                }
                array_push($categoryArray,$data);
            }
            return response()->json(['success'=>'true','message'=>'','result'=>$categoryArray], 200);
        }
    }

    private function getAccessToken()
    {
        try {
            $client = new GoogleClient();
            $client->setAuthConfig($this->serviceAccountFile);
            $client->addScope('https://www.googleapis.com/auth/firebase.messaging');
            $token = $client->fetchAccessTokenWithAssertion();        
            return $token['access_token'];
        } catch (\Throwable $th) {
           //echo 5;
        }
    }
    function send_notification($deviceToken, $msg, $title)
    {
        $json = json_encode(['key' => '1', 'key2' => '10','internal_external' => "",'page' => "",'image' => ""]);
        $accessToken = $this->getAccessToken();
        $url = 'https://fcm.googleapis.com/v1/projects/gearz-bc901/messages:send'; // Replace YOUR_PROJECT_ID with your actual project ID
        $notification = [
            'message' => [
                'token' => $deviceToken,
                'notification' => [
                    'title' => $title,
                    'body' => $msg,
                    'image' => "",                    
                ],
                'data' => [
                    'internal_external' => "",
                    'page' => "",
                    'image' => "",                    
                    'android' => $json, // Custom data for Android
                ],
                'apns' => [
                    'payload' => [
                        'aps' => [
                            'sound' => 'default',
                        ],
                    ],
                    
                ],
            ],
        ];

        $headers = [
            'Authorization: Bearer ' . $accessToken,
            'Content-Type: application/json',
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($notification));
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // if ($httpcode === 200) {
        //     echo "Notification sent successfully\n";
        // } else {
        //     echo "Failed to send notification\n";
        //     echo "HTTP Status Code: $httpcode\n";
        //     echo "Response: $result\n";
        // }
        curl_close($ch);
        return $result;
    }

    function get_cityid(Request $request){
        $userID = $request->userID;
        $language = $request->language;
        $city_name = $request->city_name;
        $country_name = $request->country_name;
        $state_name = $request->state_name;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($language==null){
            $err_array[]='language';    
        }        
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            //$city_id = City::where('name',ucfirst($city_name))->first()->id;
            $city_id = City::where('name',ucfirst($city_name));
            if($city_id->count()==0){
                $country = Country::where("name",ucfirst($country_name));
                if($country->count()==0){
                    $countryinst = new Country;
                    $countryinst->countryinst = '';
                    $countryinst->name = $country_name;
                    $countryinst->phonecode = '';
                    $countryinst->status = '1';
                    $countryinst->save();
                    $country_id = $countryinst->id;
                }else{
                    $country_id = $country->first()->id;
                }

                //state
                $state = State::where("name",ucfirst($state_name));
                if($state->count()==0){
                    $stateinsert = new State;
                    $stateinsert->name = $state_name;
                    $stateinsert->country_id = $country_id;
                    $stateinsert->status = 1;
                    $stateinsert->save();
                    $state_id = $stateinsert->id;
                }else{
                    $state_id = $state->first()->id;
                }
                //city
                $city_insert = new City;
                $city_insert->name = $city_name;
                $city_insert->state_id = $state_id;
                $city_insert->popular = 0;
                $city_insert->status = 1;
                $city_insert->save();
                $cityid = $city_insert->id;
            }else{
               $cityid = $city_id->first()->id; 
            }
            return response()->json(['success'=>'true','message'=>'','city_id'=>$cityid], 200);
        }
    }

    public function save_click(Request $request){
        $userID = $request->userID;
        $menuID = $request->menuID;
        $id = $request->id;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($menuID==null){
            $err_array[]='menuID';    
        }
        if($id==null){
            $err_array[]='id';    
        }
        if($language==null){
            $err_array[]='language';    
        }        
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            //1=Banner 2=Welcome image 3=Brand 4=News 5=car 6=Model 7=Agent 8=Deals 9=Agent Banner
            switch ($menuID) {
                case "1":
                    $table = \App\Models\Banner::class;
                    break;
                case "2":
                    $table = \App\Models\WelcomeImage::class;
                    break;
                case "3":
                    $table = \App\Models\Brand::class;
                    break;
                case "4":
                    $table = \App\Models\Magazine::class;
                    break;
                case "5":
                    $table = \App\Models\Vehicle::class;
                    break;
                case "6":
                    $table = \App\Models\CarModel::class;
                    break;
                case "7":
                    $table = \App\Models\Agent::class;
                    break;
                case "8":
                    $table = \App\Models\Deal::class;
                    break;
                case "9":
                    $table = \App\Models\AgentBanner::class;
                    break;
                default:
                    $table = null;
            }
           if($table !== null){
                $getdata = $table::where('id',$id);
                if($getdata->count()!=0){
                    $update = $table::find($id);
                    $update->log = $getdata->first()->log+1;
                    $update->save();
                }
           }
           return response()->json(['success'=>'true','message'=>'Added Successfully'], 200);           
        }
    }
    
    

}
