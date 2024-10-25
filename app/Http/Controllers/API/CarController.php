<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\CarModel;
use App\Models\Vehicle;
use App\Models\VehicleExteriorColors;
use App\Models\VehicleInteriorColors;
use App\Models\VehicleTrimBody;
use App\Models\VehicleTrimEngine;
use App\Models\VehicleTrimMileage;
use App\Models\AgentBrand;
use App\Models\Magazine;
use App\Models\CarReview;
use App\Models\CarVideo;
use App\Models\CarImage;
use App\Models\User;
use App\Models\CarFavorite;
use App\Models\CarPrice;
use App\Models\CarReviewHelpfull;
use App\Models\NewsFavorite;
use App\Models\Agent;
use App\Models\AgentBanner;
use App\Models\AgentBranch;
use App\Models\BranchBrand;
use App\Models\ServiceType;
use App\Models\ServiceBranch;
use App\Models\Viewed;
use App\Models\CarClasses;
use App\Models\VehicleType;
use App\Models\CarCompareByUser;
use DB;

class CarController extends Controller
{
    //car detail
    public function car_details(Request $request){
        $userID = $request->userID;
        $modelID = $request->modelID;
        $locationID = $request->locationID;
        $vehicleID = $request->vehicleID;
        $language = $request->language;
        $year = $request->year;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($modelID==null){
            $err_array[]='modelID';    
        }       
        if($locationID==null){
            $err_array[]='locationID';    
        }        
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            //overview
            if($vehicleID==''){
                $vehicle = Vehicle::where('modelID',$modelID)->where('year',$year)->where('status',1)->orderBy('id','ASC');
            }else{
                $vehicle = Vehicle::where('id',$vehicleID)->where('modelID',$modelID)->where('year',$year)->where('status',1)->orderBy('id','ASC');
            }
            if($vehicle->count()==0){
                return response()->json(['success'=>'false','message'=>"No Data Found"], 200);
            }else{
                $row = $vehicle->first();       
                $body = VehicleTrimBody::where('vehicleID',$row->id)->first();
                $exteriorColors = VehicleExteriorColors::where('vehicleID',$row->id)->first();
                $engine = VehicleTrimEngine::where('vehicleID',$row->id)->first();
                $mileage = VehicleTrimMileage::where('vehicleID',$row->id)->first();
                $dataover['vehicleID'] = $row->id;
                $dataover['modelID'] = $row->modelID;            
                $dataover['brochure'] = $row->brochure;            
                $CarImage = CarImage::where('vehicleID',$row->id);
                if($CarImage->count()!=0){
                    if($CarImage->first()->image_type==1){
                        $dataover['image'] =url('public/images/car/'.$CarImage->first()->image);
                    }else{
                        $dataover['image'] =$CarImage->first()->image;
                    }
                    //$dataover['image'] =$CarImage->first()->image;
                }else{
                    $dataover['image'] ="";
                }
                if($language==2){
                    $dataover['name'] = $row->name_ar;
                }else{
                    $dataover['name'] = $row->name;
                }
                //price
                $carprice = CarPrice::select('price')->where('modelID',$row->modelID)->where('CityID',$locationID)->where('year',$year)->OrderBy('onroadprice','DESC');
                if($carprice->count()!=0){
                    $price = $carprice->get();
                    $pricearray=array();
                    foreach($price as $pval){
                        array_push($pricearray,$pval->price);
                    }
                    $dataover['price_range'] = "$".current($pricearray).' - $'.end($pricearray);
                }else{
                    $dataover['price_range'] = "";
                }
                $avgStar = CarReview::where('vehicleID',$row->id)->avg('rate');
                $dataover['rating'] = "".number_format($avgStar,1);
                $CarReview = CarReview::where('vehicleID',$row->id);
                $dataover['reviews'] = $CarReview->count();
                $dataover['kmpl'] = $engine->horsepower_hp." Horsepower HP";
                $dataover['cc'] = $engine->horsepower_rpm. " Horsepower RPM";
                if($language==2){
                    $dataover['engine_type'] = $engine->engine_type_ar;
                }else{
                    $dataover['engine_type'] = $engine->engine_type;
                }
                $dataover['seat'] = $body->seats;                
                if (str_contains($engine->transmission, 'automatic')) { 
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
                $dataover['gear_type'] = $geartype ;
                $dataover['battery'] =$engine->torque_ft_lbs."torque ft lbs";
                $dataover['kpmh'] =$engine->torque_rpm."torque rpm";
                $dataover['fuel_tank_capacity'] = $mileage->fuel_tank_capacity;
                $checkfav = CarFavorite::where('userID',$userID)->where('vehicleID',$row->id)->count();
                if($checkfav!=0){
                    $dataover['favorite']=1;
                }else{
                    $dataover['favorite']=0;
                }
                $dataover['color'] = VehicleExteriorColors::select('id','name','rgb')->where('vehicleID',$row->id)->get();
                //variant
                $datav['gas']= VehicleTrimEngine::where('modelID',$modelID)->where('year',$year)->where('engine_type','gas')->count();
                $datav['hybrid']=VehicleTrimEngine::where('modelID',$modelID)->where('year',$year)->where('engine_type','hybrid')->count();
                $datav['electric']=VehicleTrimEngine::where('modelID',$modelID)->where('year',$year)->where('engine_type','electric')->count();
                $datav['patrol']=VehicleTrimEngine::where('modelID',$modelID)->where('year',$year)->where('engine_type','patrol')->count();
                $datav['diesel']=VehicleTrimEngine::where('modelID',$modelID)->where('year',$year)->where('engine_type','diesel')->count();
                $dataover['variantcount'] = $datav;
                //photo
                $photo_array = array();
                $photo = CarImage::where('vehicleID',$row->id)->get();
                foreach($photo as $photovalue){
                    if($photovalue->image_type==1){
                        $dataphoto['image'] =url('public/images/car/'.$photovalue->image);
                    }else{
                        $dataphoto['image'] =$photovalue->image;
                    }
                    array_push($photo_array,$dataphoto);
                }
                

                //$dataover['photo'] = CarImage::select('image')->where('vehicleID',$row->id)->get();
                $dataover['photo'] = $photo_array;

                $dataover['video'] = CarVideo::select('video','discription')->where('vehicleID',$row->id)->get();
                //review
                $review = CarReview::where('vehicleID',$row->id)->orderBy('id','DESC')->limit(4)->offset(0)->get();
                $reviewArray = array();
                foreach($review as $revValue){
                    $datarev['id'] = $revValue->id;
                    $datarev['userID'] = $revValue->userID;
                    $datarev['username'] = User::find($revValue->userID)->name;
                    $datarev['rate'] = $revValue->rate;
                    $datarev['title'] = $revValue->title;
                    $datarev['message'] = $revValue->message;
                    $datarev['create_date'] = date('M d,Y',strtotime($revValue->created_at));
                    $datarev['like'] = CarReviewHelpfull::where('likedislike',1)->where('reviewID',$revValue->id)->count();
                    $datarev['dislike'] =CarReviewHelpfull::where('likedislike',0)->where('reviewID',$revValue->id)->count();
                    array_push($reviewArray,$datarev);
                }
                $dataover['reviewlist'] = $reviewArray;
                //popularcar
                $vehicle = Vehicle::where('status',1)->where('popular',1)->orderBy('id','ASC')->get();
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
                        //$datavehicle['image'] =$CarImage->first()->image;
                    }else{
                        $datavehicle['image'] ="";
                    }
                    if($language==2){
                        $datavehicle['name'] = utf8_encode($carvalue->name_ar);
                    }else{
                        $datavehicle['name'] = $carvalue->name;
                    }                    
                    $datavehicle['modelID'] = $carvalue->modelID;
                    $datavehicle['year'] = $carvalue->year;
                    $datavehicle['kmpl'] = "";
                    $datavehicle['cc'] = "";
                    $VehicleTrimEngine = VehicleTrimEngine::where('vehicleID',$carvalue->id)->first();
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
                    $datavehicle['geartype'] = $geartype;
                    $checkfavs = CarFavorite::where('userID',$userID)->where('vehicleID',$carvalue->id)->count();
                    if($checkfavs!=0){
                        $datavehicle['favorite']=1;
                    }else{
                        $datavehicle['favorite']=0;
                    }
                    //$datavehicle['geartypes'] = $VehicleTrimEngine->transmission;
                    array_push($vehicleArray,$datavehicle);
                }
                $dataover['recommended'] = $vehicleArray;
                //delar id and number
                $agentid='';
                $agentnumber='';
                $brandID = $row->brandID;
                $AgentBrand = AgentBrand::where('brandID',$brandID);
                if($AgentBrand->count()!=0){
                    foreach($AgentBrand->get() as $agentbrand){
                        $checkagent = AgentBranch::where('agentID',$agentbrand->agentID)->where('city',$locationID);
                        if($checkagent->count()!=0){
                            $checkagentid = Agent::where('id',$agentbrand->agentID)->where('type',1);
                            if($checkagentid->count()!=0){
                                $agentid=$agentbrand->agentID;
                                $agentnumber=$checkagent->first()->contact;
                            }
                        }
                    }

                    $dataover['dealerID']=$agentid;
                    $dataover['dealernumber']=$agentnumber;
                }else{
                    $dataover['dealerID']="";
                    $dataover['dealernumber']="";
                }
                //hotnews
                $news = Magazine::where('home',1)->where('status',1)->orderBy('postedDate','DESC')->get();
                $newsarray = array();
                foreach($news as $nvalue){
                    $datanews['id'] = $nvalue->id;
                    $datanews['image'] = $nvalue->image;
                    $datanews['videourl'] = $nvalue->videourl;
                    $datanews['postedBy'] = $nvalue->postedBy;
                    $datanews['postedDate'] = $nvalue->postedDate;
                    $datanews['tag_icon'] = $nvalue->tag_icon;
                    if($language == 2){
                        $datanews['heading'] = $nvalue->heading_ar;
                        $datanews['description'] = $nvalue->description_ar;
                        $datanews['tag_name'] = $nvalue->tag_name_ar;
                    }else{
                        $datanews['heading'] = $nvalue->heading;
                        $datanews['description'] = $nvalue->description;
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
                $dataover['news'] =  mb_convert_encoding($newsarray, 'UTF-8', 'UTF-8');
                //overview


                //price and varyant
                $vehicledata = Vehicle::where('modelID',$modelID)->where('year',$year)->where('status',1)->orderBy('id','ASC')->get();
                $pricearray =array();
                foreach($vehicledata as $value){
                    $pricedata['vehicle_id'] = $value->id;
                    if($language == 2){
                        $pricedata['name'] = CarClasses::where('id',$value->classesID)->first()->name_ar;
                    }else{
                        $pricedata['name'] = CarClasses::where('id',$value->classesID)->first()->name;
                    }
                    //$pricedata['name'] = $value->name;
                    $pricedata['year'] = $value->year;
                    $pricedata['model_id'] = $value->modelID;
                    $car_price = CarPrice::where('vehicleID',$value->id)->where('CityID',$locationID);
                    if($car_price->count()!=0){
                        $pricedata['ex-showroomprice'] = $car_price->first()->price;
                        $pricedata['RTO'] = $car_price->first()->rto;
                        $pricedata['insurance'] = $car_price->first()->insurance;
                        $pricedata['other'] = $car_price->first()->other;
                        $pricedata['onroadprice'] = $car_price->first()->onroadprice;
                    }else{
                        $pricedata['ex-showroomprice'] = "";
                        $pricedata['RTO'] = "";
                        $pricedata['insurance'] = "";
                        $pricedata['other'] = "";
                        $pricedata['onroadprice'] = "";
                    }
                    $VehicleTrimEnginef = VehicleTrimEngine::where('vehicleID',$value->id)->first();
                    $pricedata['feature1'] = "Engine ".$VehicleTrimEnginef->size."L";
                    $pricedata['feature2'] = $VehicleTrimEnginef->transmission;
                    $pricedata['feature3'] = $VehicleTrimEnginef->drive_type;
                    $pricedata['feature4'] = $VehicleTrimEnginef->horsepower_hp."Horsepower HP";
                    $pricedata['feature5'] = $VehicleTrimEnginef->horsepower_rpm."Horsepower rpm";
                    $pricedata['feature6'] = $VehicleTrimEnginef->torque_ft_lbs."Torque ft lbs";
                    array_push($pricearray,$pricedata);
                }
                $pricev['price'] = $pricearray;
                $pricev['brandID'] = $row->brandID;
                $pricev['total_dealer'] = AgentBrand::where('brandID',$row->brandID)->count();
                //price and varyant

                
                //specification
                //vehicle_trim_bodies
                $vehicle_trim_bodies= VehicleTrimBody::where('vehicleID',$row->id)->first();
                if($language==2){
                    $dataperformanceco['type']=$vehicle_trim_bodies->type_ar;
                }else{
                    $dataperformanceco['type']=$vehicle_trim_bodies->type;
                }
                $dataperformanceco['doors']=$vehicle_trim_bodies->doors;
                $dataperformancec['length']=$vehicle_trim_bodies->length;
                $dataperformancec['width']=$vehicle_trim_bodies->width;
                $dataperformancep['seats']=$vehicle_trim_bodies->seats;
                $dataperformanceco['seatsc']=$vehicle_trim_bodies->seats;
                $dataperformancec['height']=$vehicle_trim_bodies->height;
                $dataperformance['wheel_base']=$vehicle_trim_bodies->wheel_base;
                $dataperformance['front_track']=$vehicle_trim_bodies->front_track;
                $dataperformance['rear_track']=$vehicle_trim_bodies->rear_track;
                $dataperformance['ground_clearance']=$vehicle_trim_bodies->ground_clearance;
                $dataperformancec['cargo_capacity']=$vehicle_trim_bodies->cargo_capacity;
                $dataperformancec['max_cargo_capacity']=$vehicle_trim_bodies->max_cargo_capacity;
                $dataperformancec['curb_weight']=$vehicle_trim_bodies->curb_weight;
                $dataperformancec['gross_weight']=$vehicle_trim_bodies->gross_weight;
                $dataperformancec['max_payload']=$vehicle_trim_bodies->max_payload;
                $dataperformancec['max_towing_capacity']=$vehicle_trim_bodies->max_towing_capacity;
                
                //vehicle_trim_engines
                $vehicle_trim_engines = VehicleTrimEngine::where('vehicleID',$row->id)->first();
                
                $dataperformances['cylinders']=$vehicle_trim_engines->cylinders;
                $dataperformanceco['cylindersc']=$vehicle_trim_engines->cylinders;
                $dataperformance['size']=$vehicle_trim_engines->size;
                $dataperformancep['horsepower_hp']=$vehicle_trim_engines->horsepower_hp;
                $dataperformancep['horsepower_rpm']=$vehicle_trim_engines->horsepower_rpm;
                $dataperformancep['torque_ft_lbs']=$vehicle_trim_engines->torque_ft_lbs;
                $dataperformance['torque_rpm']=$vehicle_trim_engines->torque_rpm;
                $dataperformance['valves']=$vehicle_trim_engines->valves;
                
                if($language==2){
                    $dataperformancep['engine_type']=$vehicle_trim_engines->engine_type_ar;
                    $dataperformanceco['engine_typec']=$vehicle_trim_engines->engine_type_ar;
                    $dataperformances['fuel_type']=$vehicle_trim_engines->fuel_type_ar;
                    $dataperformanceco['fuel_typec']=$vehicle_trim_engines->fuel_type_ar;
                    $dataperformance['valve_timing']=$vehicle_trim_engines->valve_timing_ar;
                    $dataperformances['cam_type']=$vehicle_trim_engines->cam_type_ar;
                    $dataperformances['drive_type']=$vehicle_trim_engines->drive_type_ar;
                    $dataperformance['transmission']=$vehicle_trim_engines->transmission_ar;
                    $dataperformancep['transmissions']=$vehicle_trim_engines->transmission_ar;
                }else{
                    $dataperformancep['engine_type']=$vehicle_trim_engines->engine_type;
                    $dataperformanceco['engine_typec']=$vehicle_trim_engines->engine_type;
                    $dataperformances['fuel_type']=$vehicle_trim_engines->fuel_type;
                    $dataperformanceco['fuel_typec']=$vehicle_trim_engines->fuel_type;
                    $dataperformance['valve_timing']=$vehicle_trim_engines->valve_timing;
                    $dataperformances['cam_type']=$vehicle_trim_engines->cam_type;
                    $dataperformances['drive_type']=$vehicle_trim_engines->drive_type;
                    $dataperformance['transmission']=$vehicle_trim_engines->transmission;
                    $dataperformancep['transmissions']=$vehicle_trim_engines->transmission;
                }
                //vehicle_trim_mileages
                $vehicle_trim_mileages = VehicleTrimMileage::where('vehicleID',$row->id)->first();
                $dataperformancep['fuel_tank_capacity']=$vehicle_trim_mileages->fuel_tank_capacity;
                $dataperformanceco['fuel_tank_capacityc']=$vehicle_trim_mileages->fuel_tank_capacity;
                $dataperformance['combined_mpg']=$vehicle_trim_mileages->combined_mpg;
                $dataperformance['epa_city_mpg']=$vehicle_trim_mileages->epa_city_mpg;
                $dataperformance['epa_highway_mpg']=$vehicle_trim_mileages->epa_highway_mpg;
                $dataperformance['range_city']=$vehicle_trim_mileages->range_city;
                $dataperformance['range_highway']=$vehicle_trim_mileages->range_highway;
                $dataperformance['battery_capacity_electric']=$vehicle_trim_mileages->battery_capacity_electric;
                $dataperformance['epa_time_to_charge_hr_240v_electric']=$vehicle_trim_mileages->epa_time_to_charge_hr_240v_electric;
                $dataperformance['epa_kwh_100_mi_electric']=$vehicle_trim_mileages->epa_kwh_100_mi_electric;
                $dataperformance['range_electric']=$vehicle_trim_mileages->range_electric;
                $dataperformance['epa_highway_mpg_electric']=$vehicle_trim_mileages->epa_highway_mpg_electric;
                $dataperformance['epa_city_mpg_electric']=$vehicle_trim_mileages->epa_city_mpg_electric;
                $dataperformance['epa_combined_mpg_electric']=$vehicle_trim_mileages->epa_combined_mpg_electric;
                $dataperformance['exterior_color']=VehicleExteriorColors::select('id','name','rgb')->where('vehicleID',$row->id)->get();
                $dataperformance['interior_color']=VehicleInteriorColors::select('id','name','rgb')->where('vehicleID',$row->id)->get();
                //new
                $specArray = array();
                $specArray[] = $dataperformancep;
                $specArray[] = $dataperformances;
                $specArray[] = $dataperformancec;
                $specArray[] = $dataperformanceco;
                //specification
                $arr['overview'] = $dataover;
                $arr['price_and_variant'] = $pricev;
                $arr['specificationandfeatures'] = $specArray;

                //all image
                //photo
                $allphoto_array = array();
                $allphoto = CarImage::where('vehicleID',$row->id)->get();
                foreach($allphoto as $allphotovalue){
                    if($allphotovalue->image_type==1){
                        $dataallphoto['image'] =url('public/images/car/'.$allphotovalue->image);
                    }else{
                        $dataallphoto['image'] =$allphotovalue->image;
                    }
                    array_push($allphoto_array,$dataallphoto);
                }
                $datacar['all'] = $allphoto_array;
                //exterior
                $exphoto_array = array();
                $exphoto = CarImage::where('vehicleID',$row->id)->where('type',1)->get();
                foreach($exphoto as $exphotovalue){
                    if($exphotovalue->image_type==1){
                        $dataexphoto['image'] =url('public/images/car/'.$exphotovalue->image);
                    }else{
                        $dataexphoto['image'] =$exphotovalue->image;
                    }
                    array_push($exphoto_array,$dataexphoto);
                }
                $datacar['exterior'] = $exphoto_array;
                //interior
                $inphoto_array = array();
                $inphoto = CarImage::where('vehicleID',$row->id)->where('type',2)->get();
                foreach($inphoto as $inphotovalue){
                    if($inphotovalue->image_type==1){
                        $datainphoto['image'] =url('public/images/car/'.$inphotovalue->image);
                    }else{
                        $datainphoto['image'] =$inphotovalue->image;
                    }
                    array_push($inphoto_array,$datainphoto);
                }
                $datacar['interior'] = $inphoto_array;
                //roadtest
                $roadtest_array = array();
                $roadtest = CarImage::where('vehicleID',$row->id)->where('type',3)->get();
                foreach($roadtest as $roadtestvalue){
                    if($roadtestvalue->image_type==1){
                        $dataroadtest['image'] =url('public/images/car/'.$roadtestvalue->image);
                    }else{
                        $dataroadtest['image'] =$roadtestvalue->image;
                    }
                    array_push($roadtest_array,$dataroadtest);
                }
                $datacar['roadtest'] = $roadtest_array;                 
                $arr['photo'] = $datacar;
                $arr['video'] = CarVideo::select('video','discription')->where('vehicleID',$row->id)->get();
                $reviews = CarReview::where('vehicleID',$row->id)->orderBy('id','DESC')->get();
                $reviewArrays = array();
                foreach($reviews as $revValues){
                    $datarevs['id'] = $revValues->id;
                    $datarevs['userID'] = $revValues->userID;
                    $datarevs['username'] = User::find($revValues->userID)->name;
                    $datarevs['rate'] = number_format($revValues->rate,1);
                    $datarevs['title'] = $revValues->title;
                    $datarevs['message'] = $revValues->message;
                    $datarevs['create_date'] = date('M d,Y',strtotime($revValues->created_at));
                    $datarevs['like'] = CarReviewHelpfull::where('likedislike',1)->where('reviewID',$revValues->id)->count();
                    $datarevs['dislike'] =CarReviewHelpfull::where('likedislike',0)->where('reviewID',$revValues->id)->count();
                    array_push($reviewArrays,$datarevs);
                }
                $arr['reviews'] = $reviewArrays;
                //total review on start
                $arr['1star'] = CarReview::where('vehicleID',$row->id)->whereRaw('ROUND(rate) = 1')->count();
                $arr['2star'] = CarReview::where('vehicleID',$row->id)->whereRaw('ROUND(rate) = 2')->count();
                $arr['3star'] = CarReview::where('vehicleID',$row->id)->whereRaw('ROUND(rate) = 3')->count();
                $arr['4star'] = CarReview::where('vehicleID',$row->id)->whereRaw('ROUND(rate) = 4')->count();
                $arr['5star'] = CarReview::where('vehicleID',$row->id)->whereRaw('ROUND(rate) = 5')->count();
                return response()->json(['success'=>'true','message'=>'','result'=>$arr], 200);
            }            
        }
    }

    //car specification
    public function specificationAndFeature(Request $request){
        $userID = $request->userID;
        $vehicle_id = $request->vehicle_id;
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
            $vehicle = Vehicle::where('id',$vehicle_id)->where('status',1);
            $row = $vehicle->first();
            
            $vehicle_trim_bodies= VehicleTrimBody::where('vehicleID',$vehicle_id)->first();
            if($language==2){
                $dataperformanceco['type']=$vehicle_trim_bodies->type_ar;
            }else{
                $dataperformanceco['type']=$vehicle_trim_bodies->type;
            }
            //$dataperformanceco['type']=$vehicle_trim_bodies->type;
            $dataperformanceco['doors']=$vehicle_trim_bodies->doors;
            $dataperformancec['length']=$vehicle_trim_bodies->length;
            $dataperformancec['width']=$vehicle_trim_bodies->width;
            $dataperformancep['seats']=$vehicle_trim_bodies->seats;
            $dataperformanceco['seatsc']=$vehicle_trim_bodies->seats;
            $dataperformancec['height']=$vehicle_trim_bodies->height;
            $dataperformance['wheel_base']=$vehicle_trim_bodies->wheel_base;
            $dataperformance['front_track']=$vehicle_trim_bodies->front_track;
            $dataperformance['rear_track']=$vehicle_trim_bodies->rear_track;
            $dataperformance['ground_clearance']=$vehicle_trim_bodies->ground_clearance;
            $dataperformancec['cargo_capacity']=$vehicle_trim_bodies->cargo_capacity;
            $dataperformancec['max_cargo_capacity']=$vehicle_trim_bodies->max_cargo_capacity;
            $dataperformancec['curb_weight']=$vehicle_trim_bodies->curb_weight;
            $dataperformancec['gross_weight']=$vehicle_trim_bodies->gross_weight;
            $dataperformancec['max_payload']=$vehicle_trim_bodies->max_payload;
            $dataperformancec['max_towing_capacity']=$vehicle_trim_bodies->max_towing_capacity;
            //vehicle_trim_engines
            $vehicle_trim_engines = VehicleTrimEngine::where('vehicleID',$vehicle_id)->first();
            // $dataperformancep['engine_type']=$vehicle_trim_engines->engine_type;
            // $dataperformanceco['engine_typec']=$vehicle_trim_engines->engine_type;
            // $dataperformances['fuel_type']=$vehicle_trim_engines->fuel_type;
            // $dataperformanceco['fuel_typec']=$vehicle_trim_engines->fuel_type;
            $dataperformances['cylinders']=$vehicle_trim_engines->cylinders;
            $dataperformanceco['cylindersc']=$vehicle_trim_engines->cylinders;
            $dataperformance['size']=$vehicle_trim_engines->size;
            $dataperformancep['horsepower_hp']=$vehicle_trim_engines->horsepower_hp;
            $dataperformancep['horsepower_rpm']=$vehicle_trim_engines->horsepower_rpm;
            $dataperformancep['torque_ft_lbs']=$vehicle_trim_engines->torque_ft_lbs;
            $dataperformance['torque_rpm']=$vehicle_trim_engines->torque_rpm;
            $dataperformance['valves']=$vehicle_trim_engines->valves;
            // $dataperformance['valve_timing']=$vehicle_trim_engines->valve_timing;
            // $dataperformances['cam_type']=$vehicle_trim_engines->cam_type;
            // $dataperformances['drive_type']=$vehicle_trim_engines->drive_type;
            // $dataperformance['transmission']=$vehicle_trim_engines->transmission;
            // $dataperformancep['transmissions']=$vehicle_trim_engines->transmission;
            if($language==2){
                $dataperformancep['engine_type']=$vehicle_trim_engines->engine_type_ar;
                $dataperformanceco['engine_typec']=$vehicle_trim_engines->engine_type_ar;
                $dataperformances['fuel_type']=$vehicle_trim_engines->fuel_type_ar;
                $dataperformanceco['fuel_typec']=$vehicle_trim_engines->fuel_type_ar;
                $dataperformance['valve_timing']=$vehicle_trim_engines->valve_timing_ar;
                $dataperformances['cam_type']=$vehicle_trim_engines->cam_type_ar;
                $dataperformances['drive_type']=$vehicle_trim_engines->drive_type_ar;
                $dataperformance['transmission']=$vehicle_trim_engines->transmission_ar;
                $dataperformancep['transmissions']=$vehicle_trim_engines->transmission_ar;
            }else{
                $dataperformancep['engine_type']=$vehicle_trim_engines->engine_type;
                $dataperformanceco['engine_typec']=$vehicle_trim_engines->engine_type;
                $dataperformances['fuel_type']=$vehicle_trim_engines->fuel_type;
                $dataperformanceco['fuel_typec']=$vehicle_trim_engines->fuel_type;
                $dataperformance['valve_timing']=$vehicle_trim_engines->valve_timing;
                $dataperformances['cam_type']=$vehicle_trim_engines->cam_type;
                $dataperformances['drive_type']=$vehicle_trim_engines->drive_type;
                $dataperformance['transmission']=$vehicle_trim_engines->transmission;
                $dataperformancep['transmissions']=$vehicle_trim_engines->transmission;
            }
            //vehicle_trim_mileages
            $vehicle_trim_mileages = VehicleTrimMileage::where('vehicleID',$vehicle_id)->first();
            $dataperformancep['fuel_tank_capacity']=$vehicle_trim_mileages->fuel_tank_capacity;
            $dataperformanceco['fuel_tank_capacityc']=$vehicle_trim_mileages->fuel_tank_capacity;
            $dataperformance['combined_mpg']=$vehicle_trim_mileages->combined_mpg;
            $dataperformance['epa_city_mpg']=$vehicle_trim_mileages->epa_city_mpg;
            $dataperformance['epa_highway_mpg']=$vehicle_trim_mileages->epa_highway_mpg;
            $dataperformance['range_city']=$vehicle_trim_mileages->range_city;
            $dataperformance['range_highway']=$vehicle_trim_mileages->range_highway;
            $dataperformance['battery_capacity_electric']=$vehicle_trim_mileages->battery_capacity_electric;
            $dataperformance['epa_time_to_charge_hr_240v_electric']=$vehicle_trim_mileages->epa_time_to_charge_hr_240v_electric;
            $dataperformance['epa_kwh_100_mi_electric']=$vehicle_trim_mileages->epa_kwh_100_mi_electric;
            $dataperformance['range_electric']=$vehicle_trim_mileages->range_electric;
            $dataperformance['epa_highway_mpg_electric']=$vehicle_trim_mileages->epa_highway_mpg_electric;
            $dataperformance['epa_city_mpg_electric']=$vehicle_trim_mileages->epa_city_mpg_electric;
            $dataperformance['epa_combined_mpg_electric']=$vehicle_trim_mileages->epa_combined_mpg_electric;
            $dataperformance['exterior_color']=VehicleExteriorColors::select('id','name','rgb')->where('vehicleID',$vehicle_id)->get();
            $dataperformance['interior_color']=VehicleInteriorColors::select('id','name','rgb')->where('vehicleID',$vehicle_id)->get();
            //new
            $specArray = array();
            $specArray[] = $dataperformancep;
            $specArray[] = $dataperformances;
            $specArray[] = $dataperformancec;
            $specArray[] = $dataperformanceco;
            return response()->json(['success'=>'true','message'=>'','result'=>$specArray], 200);

        }
    }

    public function addreview(Request $request){
        $userID = $request->userID;
        $vehicle_id = $request->vehicle_id;
        $rate = $request->rate;
        $title = $request->title;
        $message = $request->message;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($vehicle_id==null){
            $err_array[]='vehicle_id';    
        }
        if($rate==null){
            $err_array[]='rate';    
        }
        if($title==null){
            $err_array[]='title';    
        }
        if($message==null){
            $err_array[]='message';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            if($language == 2){
                $msg_success = "أشكركم على التصنيف";
                $msg_failed = "تم بالفعل إعطاء تصنيف لهذه السيارة";
            }else{
                $msg_success = "Thank you for rating";
                $msg_failed = "Already rating given for this vehicle";
            }
            $check = CarReview::where('userID',$userID)->where('vehicleID',$vehicle_id)->count();
            $modelID = Vehicle::where('id',$vehicle_id)->first()->modelID;
            if($check==0){
                $review = new CarReview;
                $review->vehicleID = $vehicle_id;
                $review->userID = $userID;
                $review->rate = $rate;
                $review->modelID = $modelID;
                $review->title = $title;
                $review->message = $message;
                $review->like = 0;
                $review->dislike = 0;
                $review->save();
                return response()->json(['success'=>'true','message'=>$msg_success], 200);

            }else{
                return response()->json(['success'=>'false','message'=>$msg_failed], 400);
            }

        }
    }

    //All car list
    public function allcar(Request $request){
        $userID = $request->userID;
        $language = $request->language;
        $locationID = $request->locationID;
        $brand_ids = $request->brand_ids;
        $vehicle_type_ids = $request->vehicle_type_ids;
        $fule_ids = $request->fule_ids;
        $seats = $request->seats;
        $cylinder = $request->cylinder;
        $transmission = $request->transmission;
        $maxprice = $request->maxprice;
        $filter = $request->filter;
        // $filter = 1;
        // $brand_ids = [37];
        // $vehicle_type_ids = [];
        // $fule_ids = [];
        // $seats = [];
        // $cylinder = [];
        // $transmission = [];
        // $maxprice = 0;

        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            $vehicleArray = array();
            $vehiclevalArray = array();
            $fule_idArray = array();
            //$current_year = date('Y');
            $current_year = "2023";
            if($filter==1){
                if(!empty($vehicle_type_ids)){
                    foreach($vehicle_type_ids as $vehicleval){
                        $VehicleType = VehicleType::where('id',$vehicleval)->first()->name;
                        array_push($vehiclevalArray,$VehicleType);
                    }
                }
                //print_r($vehiclevalArray);
                if(!empty($fule_ids)){
                    foreach($fule_ids as $fuleval){
                        if($fuleval==1){
                            $fulename = "diesel";
                        }
                        if($fuleval==2){
                            $fulename = "petrol";
                        }
                        if($fuleval==3){
                            $fulename = "gas";
                        }
                        if($fuleval==4){
                            $fulename = "electric";
                        }                        
                        array_push($fule_idArray,$fulename);
                    }
                }
                if (!empty($brand_ids) || !empty($vehiclevalArray) || !empty($fule_ids) || !empty($seats) || !empty($cylinder) || !empty($transmission)) {
                    $query = DB::table('vehicles')
                        ->join('vehicle_trim_bodies', 'vehicles.id', '=', 'vehicle_trim_bodies.vehicleID')
                        ->join('vehicle_trim_engines', 'vehicles.id', '=', 'vehicle_trim_engines.vehicleID');
                
                    // Applying filters conditionally
                    if (!empty($brand_ids)) {
                        $query->WhereIn('vehicles.brandID', $brand_ids);
                    }
                
                    if (!empty($current_year)) {
                        $query->Where('vehicles.year', $current_year);
                    }
                
                    if (!empty($vehiclevalArray)) {
                        $query->WhereIn('vehicle_trim_bodies.type', $vehiclevalArray);
                    }
                
                    if (!empty($seats)) {
                        $query->WhereIn('vehicle_trim_bodies.seats', $seats);
                    }
                
                    if (!empty($fule_ids)) {
                        $query->WhereIn('vehicle_trim_engines.engine_type', $fule_ids);
                    }
                
                    if (!empty($cylinder)) {
                        $query->WhereIn('vehicle_trim_engines.cylinders', $cylinder);
                    }                
                    // Finally, execute the query
                    $vehicle = $query->get();
                    //print_r($vehicle);
                }
            }else{
                //echo 2;
                $vehicle = Vehicle::where('status',1)->where('year',$current_year)->orderBy('id','ASC')->get();
            }
            // print_r($vehicle);
            //die;
            //$vehicle = Vehicle::where('status',1)->where('year',$current_year)->orderBy('id','ASC')->get();
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
                                //$geartype = "Automatic";
                            }else{
                                if($language==2){
                                    $geartype = "يدوي";
                                }else{
                                    $geartype = "Manual";
                                }
                                //$geartype = "Manual";
                            }
                        }else{
                            $geartype = "";
                        }
                    }
                $datavehicle['kmpl'] = $VehicleTrimEngine->horsepower_hp."HP";
                $datavehicle['cc'] = $VehicleTrimEngine->horsepower_rpm. "RPM";
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
                //$datavehicle['price'] = ""; 
                //price
                $carprice = CarPrice::select('price')->where('vehicleID',$carvalue->id)->where('CityID',$locationID)->OrderBy('price','DESC');
                if($carprice->count()!=0){
                    $price = $carprice->get();
                    $pricearray=array();
                    foreach($price as $pval){
                        array_push($pricearray,$pval->price);
                    }
                    $datavehicle['price'] = "$".current($pricearray).' - $'.end($pricearray);
                }else{
                    $datavehicle['price'] = "";
                }
                if($filter==1){
                    if($maxprice!=0){
                        if($datavehicle['price'] != ""){
                            if($maxprice <= $pricearray){
                                array_push($vehicleArray,$datavehicle);
                            }        
                        }
                    }else{
                        array_push($vehicleArray,$datavehicle); 
                    }

                    // if(!empty($transmission)){
                    //     if()


                    // }

                }else{
                    array_push($vehicleArray,$datavehicle);
                }
                
                                  
                //array_push($vehicleArray,$datavehicle);
            }
            return response()->json(['success'=>'true','message'=>"",'result'=>$vehicleArray], 200);        
        }
    }   

    //car like dislike
    public function likedislike(Request $request){
        $userID = $request->userID;
        $reviewID = $request->reviewID;
        $status = $request->status;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($reviewID==null){
            $err_array[]='reviewID';    
        }
        if($status==null){
            $err_array[]='status';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            if($language == 2){
                $msg_success = "تم الإرسال بنجاح";
            }else{
                $msg_success = "Submitted successfully";
            }
            $check = CarReviewHelpfull::where('userID',$userID)->where('reviewID',$reviewID)->count();
            if($check==0){
                $review = new CarReviewHelpfull;
                $review->userID = $userID;
                $review->reviewID = $reviewID;
                $review->likedislike = $status;
                $review->save();
                return response()->json(['success'=>'true','message'=>$msg_success], 200);
            }else{
                $likeid = CarReviewHelpfull::where('userID',$userID)->where('reviewID',$reviewID)->first()->id;
                $review = CarReviewHelpfull::find($likeid);
                $review->likedislike = $status;
                $review->save();
                return response()->json(['success'=>'true','message'=>$msg_success], 200);
            }

        }
    }

    //car model list
    public function modelslist(Request $request){
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
            $model = CarModel::where('brandID',$brandID)->where('status',1)->get();
            $recordArray = array();
            foreach($model as $value){
                $data['id'] = $value->id;
                $data['brandID'] = $value->brandID;
                $data['makeID'] = $value->makeID;
                $data['modelID'] = $value->id;
                
                if($language ==2){
                    $data['name'] = $value->name_ar;
                }else{
                    $data['name'] = $value->name;
                }
                // $Vehicle = CarImage::where('modelID',$value->id);
                // if($Vehicle->count()!=0){
                //     $data['image'] = $Vehicle->first()->image;
                // }else{
                //     $data['image'] = "";
                // }
                $CarImage = CarImage::where('modelID',$value->id);
                if($CarImage->count()!=0){
                    if($CarImage->first()->image_type==1){
                        $data['image'] =url('public/images/car/'.$CarImage->first()->image);
                    }else{
                        $data['image'] =$CarImage->first()->image;
                    }
                    //$dataover['image'] =$CarImage->first()->image;
                }else{
                    $data['image'] ="";
                }                
                $data['price'] = "";
                array_push($recordArray,$data);
            }
            return response()->json(['success'=>'true','message'=>"",'result'=>$recordArray], 200);
        }
    }

    //car varientlist
    public function varientlist(Request $request){
        $userID = $request->userID;
        $modelID = $request->modelID;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($modelID==null){
            $err_array[]='modelID';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            $Vehicle = Vehicle::where('modelID',$modelID)->where('status',1)->get();
            $recordArray = array();
            $petrolArray = array();
            $dieselArray = array();
            foreach($Vehicle as $value){
                $data['vehicleID'] = $value->id;
                $data['brandID'] = $value->brandID;
                $data['makeID'] = $value->makeID;
                $data['modelID'] = $value->modelID;
                if($language ==2){
                    $data['name'] = $value->name_ar;
                }else{
                    $data['name'] = $value->name;
                }
                //$data['name'] = $value->name;                                
                $data['price'] = "";
                $engine_type = VehicleTrimEngine::where('vehicleID',$value->id)->first()->engine_type;
                $data['engine_type'] = $engine_type;
                array_push($recordArray,$data);
                if($engine_type=="petrol"){
                    array_push($petrolArray,$data);
                }
                if($engine_type=="diesel"){
                    array_push($dieselArray,$data);
                }
            }
            return response()->json(['success'=>'true','message'=>"",'all'=>$recordArray,'petrol'=>$petrolArray,'diesel'=>$dieselArray], 200);
        }
    }

    //car compare
    public function carcompare(Request $request){
        $userID = $request->userID;
        $vehicleID = $request->vehicleID;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($vehicleID==null){
            $err_array[]='vehicleID';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            $vehicleIDArray = explode(",",$vehicleID);
            $recordArray = array();
            //car compare
            if($userID!=43){
                $CarCompareByUser = new CarCompareByUser;
                $CarCompareByUser->userID = $userID;
                $CarCompareByUser->carID = $vehicleID;
                $CarCompareByUser->save();
            }
            foreach($vehicleIDArray as $value){
                $Vehicle = Vehicle::where('id',$value)->first();
                if($language ==2){
                    $data['name'] = $Vehicle->name_ar;
                }else{
                    $data['name'] = $Vehicle->name;
                }
                $data['year'] = $Vehicle->year;
                // $Vehicle = CarImage::where('vehicleID',$value);
                // if($Vehicle->count()!=0){
                //     $data['image'] = $Vehicle->first()->image;
                // }else{
                //     $data['image'] = "";
                // }
                $CarImage = CarImage::where('vehicleID',$value);
                if($CarImage->count()!=0){
                    if($CarImage->first()->image_type==1){
                        $data['image'] =url('public/images/car/'.$CarImage->first()->image);
                    }else{
                        $data['image'] =$CarImage->first()->image;
                    }
                    //$dataover['image'] =$CarImage->first()->image;
                }else{
                    $data['image'] ="";
                }
                $data['price'] = ""; 
                 
                $engine_type = VehicleTrimEngine::where('vehicleID',$value)->first()->engine_type;
                $engine_type_ar = VehicleTrimEngine::where('vehicleID',$value)->first()->engine_type_ar;
                if($language ==2){
                    $data['engine_type'] = $engine_type_ar;
                }else{
                    $data['engine_type'] = $engine_type;
                }
                
                //review
                $avgStar = CarReview::where('vehicleID',$value)->avg('rate');
                $dataover['rating'] = "".$avgStar;
                $CarReview = CarReview::where('vehicleID',$value);
                $dataover['reviews'] = $CarReview->count();
                $dataover['price'] = "";
                $data['basic_information'] = $dataover;
                //engine
                $engine = VehicleTrimEngine::where('vehicleID',$value)->first();
                $eng['power'] = $engine->horsepower_hp;
                if($language ==2){
                    $eng['transmission'] = $engine->transmission_ar;
                }else{
                    $eng['transmission'] = $engine->transmission;
                }
                
                $data["engine_transmission"] = $eng;
                //fule
                if($language ==2){
                    $fule['engine_type'] = $engine->engine_type_ar;
                }else{
                    $fule['engine_type'] = $engine->engine_type;
                }
                
                $fule['size'] = $engine->size;
                $data['fuel_performance'] = $fule;
                //dimension
                $VehicleTrimBody = VehicleTrimBody::where('vehicleID',$value)->first();
                $suspen['wheel_base'] = $VehicleTrimBody->wheel_base;
                $suspen['cargo_capacity'] = $VehicleTrimBody->cargo_capacity;
                $data['dimension_capacity'] = $suspen;
                //comfort
                $conf['doors'] = $VehicleTrimBody->doors;
                $conf['seats'] = $VehicleTrimBody->seats;
                $data['comfort'] = $conf;
                array_push($recordArray,$data);
            }
            return response()->json(['success'=>'true','message'=>"",'record'=>$recordArray], 200);
        }
    }
}
