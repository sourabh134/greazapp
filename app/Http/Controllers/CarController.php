<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Brand;
use App\Models\CarModel;
use App\Models\Vehicle;
use App\Models\VehicleExteriorColors;
use App\Models\VehicleInteriorColors;
use App\Models\VehicleTrimBody;
use App\Models\VehicleTrimEngine;
use App\Models\VehicleTrimMileage;
use App\Modules\ExternalSystem;
use App\Models\CarVideo;
use App\Models\CarImage;
use App\Models\CarPrice;
use App\Models\City;
use App\Models\CarYears;
use App\Models\CarClasses;
use App\Models\StaffLogEvent;

class CarController extends Controller
{   
    public function carmodel(Request $request){
        $data['active'] = "brand";
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);
        $data['brand_name'] = Brand::where('id',base64_decode($request->key))->first()->name;
        $data['data'] = CarModel::where('status','!=',2)->where('brandID',base64_decode($request->key))->get();
        $data['years'] = range(date('Y'), 2010);
        $data['brand_id'] = $request->key;
        return view('admin.carmodels', $data);
    }

    public function addModel(Request $request){
        $data['active'] = "brand";
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);
        $data['brand_name'] = Brand::where('id',base64_decode($request->key))->first()->name;
        $data['brand_id'] = $request->key;
        $data['data'] = CarModel::find(base64_decode($request->id));
        return view('admin.addmodels', $data);
    }

    public function insert_carmodel(Request $request){
        if($request->id==''){
            $check_name = CarModel::where('brandID',base64_decode($request->brandID))->where('name',$request->name)->count();
            if($check_name==0){
                $check_namear = CarModel::where('brandID',base64_decode($request->brandID))->where('name_ar',$request->namear)->count();
                if($check_namear==0){
                    $carmodel = new CarModel;
                    $carmodel->brandID = base64_decode($request->brandID);
                    $carmodel->makeID = "";
                    $carmodel->modelID = "";
                    $carmodel->year = "";
                    $carmodel->name = $request->name;
                    $carmodel->name_ar = $request->namear;
                    $carmodel->status = 1;
                    $carmodel->save();
                    echo 1;
                    if(session::get('usertype')==2){
                        $log = array(
                            'staff_id'=>session::get('id'),
                            'logDate'=>date('Y-m-d'),
                            'event_name'=>"Add Model",
                            'event_category'=>12,
                            'event_id'=>$carmodel->id,
                        );
                        // print_r($log);
                        $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
                    }
                }else{
                    echo 2;
                }
            }else{
                echo 2;
            }
        }else{
            $carmodel = CarModel::find($request->id);
            $carmodel->name = $request->name;
            $carmodel->name_ar = $request->namear;
            $carmodel->save();
            echo 1;
            if(session::get('usertype')==2){
                $log = array(
                    'staff_id'=>session::get('id'),
                    'logDate'=>date('Y-m-d'),
                    'event_name'=>"Update Model",
                    'event_category'=>12,
                    'event_id'=>$request->id,
                );
                // print_r($log);
                $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
            }
        }    
    }

    public function insertcar(Request $request){
        $brandID = $request->brandID;
        $modelid = $request->modelid;
        $yearID = $request->yearID;
        $classesID = $request->CarClasses;
        $brandname = Brand::where('id',$brandID)->first()->name;
        $modelname = CarModel::where('id',$modelid)->first()->name;
        $CarClasses = CarClasses::where('id',$classesID)->first()->name;
        $getcar_details = ExternalSystem::get_car_detail($brandname,$modelname,$CarClasses,$yearID);
        if($getcar_details['status_code']==200){
            $res = json_decode($getcar_details['body']);
            $resvehicle = $res->response;
            // print_r($resvehicle);
            // die;
            $check = Vehicle::where('brandID',$brandID)->where('modelID',$modelid)->where('classesID',$classesID)->where('year',$yearID)->count();
            if($check==0){
                //insert
                $vehicle = new Vehicle;
                $vehicle->brandID = $brandID;
                $vehicle->classesID = $classesID;
                $vehicle->modelID = $modelid;
                $vehicle->vehicleID = 0;
                $vehicle->name = $resvehicle->name;
                $vehicle->name_ar = $this->stringtranslation($resvehicle->name);
                $vehicle->year = $resvehicle->year;
                $vehicle->description = $resvehicle->description;
                $vehicle->description_ar = $this->stringtranslation($resvehicle->description);
                $vehicle->msrp = "0";
                $vehicle->invoice = "0";
                $vehicle->status = 1;
                $vehicle->save();
                //VehicleExteriorColors
                foreach($resvehicle->make_model_trim_exterior_colors as $exvalue){
                    $exterior = new VehicleExteriorColors;
                    $exterior->brandID = $brandID;
                    $exterior->classesID = $classesID;
                    $exterior->modelID = $modelid;
                    $exterior->year = $yearID;
                    $exterior->vehicleID = $vehicle->id;
                    $exterior->make_model_trim_id = 0;
                    $exterior->exterior_colorsID = 0;
                    $exterior->name = $exvalue->name;
                    $exterior->name_ar = $this->stringtranslation($exvalue->name);
                    $exterior->rgb = $exvalue->rgb;
                    $exterior->status = 1;
                    $exterior->save();
                    //image
                    $carimage = $this->carimage($brandname,$modelname,$yearID,$exvalue->name);
                    if($carimage!=""){
                        foreach($carimage as $val_image){
                            $in_image_table = new CarImage;
                            $in_image_table->vehicleID = $vehicle->id;
                            $in_image_table->modelID = $modelid;
                            $in_image_table->year = $yearID;
                            $in_image_table->image = $val_image->link;
                            $in_image_table->type = 1;
                            $in_image_table->image_type = 2;
                            $in_image_table->save();
                        }
                    }
                }
                //VehicleInteriorColors
                foreach($resvehicle->make_model_trim_interior_colors as $invalue){
                    $interior = new VehicleInteriorColors;
                    $interior->brandID = $brandID;
                    $interior->classesID = $classesID;
                    $interior->modelID = $modelid;
                    $interior->year = $yearID;
                    $interior->vehicleID = $vehicle->id;
                    $interior->make_model_trim_id = 0;
                    $interior->interior_colorsID = 0;
                    $interior->name = $invalue->name;
                    $interior->name_ar = $this->stringtranslation($invalue->name);
                    $interior->rgb = $invalue->rgb;
                    $interior->status = 1;
                    $interior->save();
                }
                //VehicleTrimBody
                $body = new VehicleTrimBody;
                $body->brandID = $brandID;
                $body->classesID = $classesID;
                $body->modelID = $modelid;
                $body->year = $yearID;
                $body->vehicleID = $vehicle->id;
                $body->make_model_trim_id = 0;
                $body->trim_bodyID = 0;
                $body->type = $resvehicle->make_model_trim_body->type;
                $body->type_ar = $this->stringtranslation($resvehicle->make_model_trim_body->type);
                $body->doors = $resvehicle->make_model_trim_body->doors;
                $body->length = $resvehicle->make_model_trim_body->length;
                $body->width = $resvehicle->make_model_trim_body->width;
                $body->seats = $resvehicle->make_model_trim_body->seats;
                $body->height = $resvehicle->make_model_trim_body->height;
                $body->wheel_base = $resvehicle->make_model_trim_body->wheel_base;
                $body->front_track = $resvehicle->make_model_trim_body->front_track;
                $body->rear_track = $resvehicle->make_model_trim_body->rear_track;
                $body->ground_clearance = $resvehicle->make_model_trim_body->ground_clearance;
                $body->cargo_capacity = $resvehicle->make_model_trim_body->cargo_capacity;
                $body->max_cargo_capacity = $resvehicle->make_model_trim_body->max_cargo_capacity;
                $body->curb_weight = $resvehicle->make_model_trim_body->curb_weight;
                $body->gross_weight = $resvehicle->make_model_trim_body->gross_weight;
                $body->max_payload = $resvehicle->make_model_trim_body->max_payload;
                $body->max_towing_capacity = $resvehicle->make_model_trim_body->max_towing_capacity;
                $body->save();
                //VehicleTrimEngine
                $engine = new VehicleTrimEngine;
                $engine->brandID = $brandID;
                $engine->classesID = $classesID;
                $engine->modelID = $modelid;
                $engine->year = $yearID;
                $engine->vehicleID = $vehicle->id;
                $engine->make_model_trim_id = 0;
                $engine->trim_engineID = 0;
                $engine->engine_type = $resvehicle->make_model_trim_engine->engine_type;
                $engine->engine_type_ar = $this->stringtranslation($resvehicle->make_model_trim_engine->engine_type);
                $engine->fuel_type = $resvehicle->make_model_trim_engine->fuel_type;
                $engine->fuel_type_ar = $this->stringtranslation($resvehicle->make_model_trim_engine->fuel_type);
                $engine->cylinders = $resvehicle->make_model_trim_engine->cylinders;
                $engine->size = $resvehicle->make_model_trim_engine->size;
                $engine->horsepower_hp = $resvehicle->make_model_trim_engine->horsepower_hp;
                $engine->horsepower_rpm = $resvehicle->make_model_trim_engine->horsepower_rpm;
                $engine->torque_ft_lbs = $resvehicle->make_model_trim_engine->torque_ft_lbs;
                $engine->torque_rpm = $resvehicle->make_model_trim_engine->torque_rpm;
                $engine->valves = $resvehicle->make_model_trim_engine->valves;
                $engine->valve_timing = $resvehicle->make_model_trim_engine->valve_timing;
                $engine->valve_timing_ar = $this->stringtranslation($resvehicle->make_model_trim_engine->valve_timing);
                $engine->cam_type = $resvehicle->make_model_trim_engine->cam_type;
                $engine->cam_type_ar = $this->stringtranslation($resvehicle->make_model_trim_engine->cam_type);
                $engine->drive_type = $resvehicle->make_model_trim_engine->drive_type;
                $engine->drive_type_ar = $this->stringtranslation($resvehicle->make_model_trim_engine->drive_type);
                $engine->transmission = $resvehicle->make_model_trim_engine->transmission;
                $engine->transmission_ar = $this->stringtranslation($resvehicle->make_model_trim_engine->transmission);
                $engine->save();
                //VehicleTrimMileage
                $mileage = new VehicleTrimMileage;
                $mileage->brandID = $brandID;
                $mileage->classesID = $classesID;
                $mileage->modelID = $modelid;
                $mileage->year = $yearID;
                $mileage->vehicleID = $vehicle->id;
                $mileage->make_model_trim_id = 0;
                $mileage->trim_mileagesID = 0;
                $mileage->fuel_tank_capacity = $resvehicle->make_model_trim_mileage->fuel_tank_capacity;
                $mileage->combined_mpg = $resvehicle->make_model_trim_mileage->combined_mpg;
                $mileage->epa_city_mpg = $resvehicle->make_model_trim_mileage->epa_city_mpg;
                $mileage->epa_highway_mpg = $resvehicle->make_model_trim_mileage->epa_highway_mpg;
                $mileage->range_city = $resvehicle->make_model_trim_mileage->range_city;
                $mileage->range_highway = $resvehicle->make_model_trim_mileage->range_highway;
                $mileage->battery_capacity_electric = $resvehicle->make_model_trim_mileage->battery_capacity_electric;
                $mileage->epa_time_to_charge_hr_240v_electric = $resvehicle->make_model_trim_mileage->epa_time_to_charge_hr_240v_electric;
                $mileage->epa_kwh_100_mi_electric = $resvehicle->make_model_trim_mileage->epa_kwh_100_mi_electric;
                $mileage->range_electric = $resvehicle->make_model_trim_mileage->range_electric;
                $mileage->epa_highway_mpg_electric = $resvehicle->make_model_trim_mileage->epa_highway_mpg_electric;
                $mileage->epa_city_mpg_electric = $resvehicle->make_model_trim_mileage->epa_city_mpg_electric;
                $mileage->epa_combined_mpg_electric = $resvehicle->make_model_trim_mileage->epa_combined_mpg_electric;
                $mileage->status = 1;
                $mileage->save();
                if(session::get('usertype')==2){
                    $log = array(
                        'staff_id'=>session::get('id'),
                        'logDate'=>date('Y-m-d'),
                        'event_name'=>"Add car detail",
                        'event_category'=>13,
                        'event_id'=>$vehicle->id,
                    );
                    // print_r($log);
                    $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
                }
                echo 1;

            }else{
                //update
                $vehicle = Vehicle::where('brandID',$brandID)->where('modelID',$modelid)->where('classesID',$classesID)->where('year',$yearID)->first();
                $vehicle->brandID = $brandID;
                $vehicle->classesID = $classesID;
                $vehicle->modelID = $modelid;
                $vehicle->name = $resvehicle->name;
                $vehicle->name_ar = $this->stringtranslation($resvehicle->name);
                $vehicle->year = $resvehicle->year;
                $vehicle->description = $resvehicle->description;
                $vehicle->description_ar = $this->stringtranslation($resvehicle->description);
                $vehicle->save();
                //VehicleExteriorColors
                foreach($resvehicle->make_model_trim_exterior_colors as $exvalue){
                    $checkexcolor = VehicleExteriorColors::where('name',$exvalue->name)->count();
                    if($checkexcolor == 0){
                        $exterior = new VehicleExteriorColors;
                        $exterior->brandID = $brandID;
                        $exterior->classesID = $classesID;
                        $exterior->modelID = $modelid;
                        $exterior->vehicleID = $vehicle->id;
                        $exterior->name = $exvalue->name;
                        $exterior->name_ar = $this->stringtranslation($exvalue->name);
                        $exterior->rgb = $exvalue->rgb;
                        $exterior->status = 1;
                        $exterior->save();
                    }
                    //image
                    $carimage = $this->carimage($brandname,$modelname,$yearID,$exvalue->name);
                    if($carimage!=""){
                        foreach($carimage as $val_image){
                            $check_image = CarImage::where('vehicleID',$vehicle->id)->where('image',$val_image->link)->count();
                            if($check_image==0){
                                $in_image_table = new CarImage;
                                $in_image_table->vehicleID = $vehicle->id;
                                $in_image_table->modelID = $modelid;
                                $in_image_table->year = $yearID;
                                $in_image_table->image = $val_image->link;
                                $in_image_table->type = 1;
                                $in_image_table->image_type = 2;
                                $in_image_table->save();
                            }
                            
                        }
                    }                    
                }
                //VehicleInteriorColors
                foreach($resvehicle->make_model_trim_interior_colors as $invalue){
                    $checkincolor = VehicleInteriorColors::where('name',$invalue->name)->count();
                    if($checkincolor==0){
                        $interior = new VehicleInteriorColors;
                        $interior->brandID = $brandID;
                        $interior->classesID = $classesID;
                        $interior->modelID = $modelid;
                        $interior->vehicleID = $vehicle->id;
                        $interior->name = $invalue->name;
                        $interior->name_ar = $this->stringtranslation($invalue->name);
                        $interior->rgb = $invalue->rgb;
                        $interior->status = 1;
                        $interior->save();
                    }
                }
                //VehicleTrimBody
                $body = VehicleTrimBody::where('vehicleID',$vehicle->id)->first();
                $body->brandID = $brandID;
                $body->classesID = $classesID;
                $body->modelID = $modelid;
                $body->type = $resvehicle->make_model_trim_body->type;
                $body->type_ar = $this->stringtranslation($resvehicle->make_model_trim_body->type);
                $body->doors = $resvehicle->make_model_trim_body->doors;
                $body->length = $resvehicle->make_model_trim_body->length;
                $body->width = $resvehicle->make_model_trim_body->width;
                $body->seats = $resvehicle->make_model_trim_body->seats;
                $body->height = $resvehicle->make_model_trim_body->height;
                $body->wheel_base = $resvehicle->make_model_trim_body->wheel_base;
                $body->front_track = $resvehicle->make_model_trim_body->front_track;
                $body->rear_track = $resvehicle->make_model_trim_body->rear_track;
                $body->ground_clearance = $resvehicle->make_model_trim_body->ground_clearance;
                $body->cargo_capacity = $resvehicle->make_model_trim_body->cargo_capacity;
                $body->max_cargo_capacity = $resvehicle->make_model_trim_body->max_cargo_capacity;
                $body->curb_weight = $resvehicle->make_model_trim_body->curb_weight;
                $body->gross_weight = $resvehicle->make_model_trim_body->gross_weight;
                $body->max_payload = $resvehicle->make_model_trim_body->max_payload;
                $body->max_towing_capacity = $resvehicle->make_model_trim_body->max_towing_capacity;
                $body->save();
                //VehicleTrimEngine
                $engine = VehicleTrimEngine::where('vehicleID',$vehicle->id)->first();
                $engine->brandID = $brandID;
                $engine->classesID = $classesID;
                $engine->modelID = $modelid;
                $engine->engine_type = $resvehicle->make_model_trim_engine->engine_type;
                $engine->engine_type_ar = $this->stringtranslation($resvehicle->make_model_trim_engine->engine_type);
                $engine->fuel_type = $resvehicle->make_model_trim_engine->fuel_type;
                $engine->fuel_type_ar = $this->stringtranslation($resvehicle->make_model_trim_engine->fuel_type);
                $engine->cylinders = $resvehicle->make_model_trim_engine->cylinders;
                $engine->size = $resvehicle->make_model_trim_engine->size;
                $engine->horsepower_hp = $resvehicle->make_model_trim_engine->horsepower_hp;
                $engine->horsepower_rpm = $resvehicle->make_model_trim_engine->horsepower_rpm;
                $engine->torque_ft_lbs = $resvehicle->make_model_trim_engine->torque_ft_lbs;
                $engine->torque_rpm = $resvehicle->make_model_trim_engine->torque_rpm;
                $engine->valves = $resvehicle->make_model_trim_engine->valves;
                $engine->valve_timing = $resvehicle->make_model_trim_engine->valve_timing;
                $engine->valve_timing_ar = $this->stringtranslation($resvehicle->make_model_trim_engine->valve_timing);
                $engine->cam_type = $resvehicle->make_model_trim_engine->cam_type;
                $engine->cam_type_ar = $this->stringtranslation($resvehicle->make_model_trim_engine->cam_type);
                $engine->drive_type = $resvehicle->make_model_trim_engine->drive_type;
                $engine->drive_type_ar = $this->stringtranslation($resvehicle->make_model_trim_engine->drive_type);
                $engine->transmission = $resvehicle->make_model_trim_engine->transmission;
                $engine->transmission_ar = $this->stringtranslation($resvehicle->make_model_trim_engine->transmission);
                $engine->save();
                //VehicleTrimMileage
                $mileage = VehicleTrimMileage::where('vehicleID',$vehicle->id)->first();
                $mileage->brandID = $brandID;
                $mileage->classesID = $classesID;
                $mileage->modelID = $modelid;
                $mileage->fuel_tank_capacity = $resvehicle->make_model_trim_mileage->fuel_tank_capacity;
                $mileage->combined_mpg = $resvehicle->make_model_trim_mileage->combined_mpg;
                $mileage->epa_city_mpg = $resvehicle->make_model_trim_mileage->epa_city_mpg;
                $mileage->epa_highway_mpg = $resvehicle->make_model_trim_mileage->epa_highway_mpg;
                $mileage->range_city = $resvehicle->make_model_trim_mileage->range_city;
                $mileage->range_highway = $resvehicle->make_model_trim_mileage->range_highway;
                $mileage->battery_capacity_electric = $resvehicle->make_model_trim_mileage->battery_capacity_electric;
                $mileage->epa_time_to_charge_hr_240v_electric = $resvehicle->make_model_trim_mileage->epa_time_to_charge_hr_240v_electric;
                $mileage->epa_kwh_100_mi_electric = $resvehicle->make_model_trim_mileage->epa_kwh_100_mi_electric;
                $mileage->range_electric = $resvehicle->make_model_trim_mileage->range_electric;
                $mileage->epa_highway_mpg_electric = $resvehicle->make_model_trim_mileage->epa_highway_mpg_electric;
                $mileage->epa_city_mpg_electric = $resvehicle->make_model_trim_mileage->epa_city_mpg_electric;
                $mileage->epa_combined_mpg_electric = $resvehicle->make_model_trim_mileage->epa_combined_mpg_electric;
                $mileage->save();
                echo 1;
                if(session::get('usertype')==2){
                    $log = array(
                        'staff_id'=>session::get('id'),
                        'logDate'=>date('Y-m-d'),
                        'event_name'=>"Update car detail",
                        'event_category'=>13,
                        'event_id'=>$vehicle->id,
                    );
                    // print_r($log);
                    $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
                }
            }
            //echo $result->year;

        }else{
            echo 2;
        }
        //print_r($getcar_details);
        // print_r($CarClasses);
        // foreach($CarClasses as $value){
        //     $getcar_details = ExternalSystem::get_car_detail($brandname,$brandname,$value->name,$yearID);
        //     //$response_car_data = json_decode($getcar_details);
        //     print_r($getcar_details);
        // } 
    }

    public function carlist(Request $request){
        $data['active'] = "brand";
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);
        $carmodel = CarModel::where('id',base64_decode($request->key))->first();
        $data['brand_name'] = Brand::where('id',$carmodel->brandID)->first()->name;
        $data['model_name'] = $carmodel->name;
        $data['yearlist'] = CarYears::where('status',1)->get();
        $data['CarClasses'] = CarClasses::where('modelID',base64_decode($request->key))->where('brandID',$carmodel->brandID)->get();
       // $data['year'] = $request->year;
        $data['data'] = Vehicle::where('status','!=',2)->where('modelID',base64_decode($request->key))->get();        
        $data['make_id'] = $request->key;
        $data['carmodel'] = $carmodel;
        return view('admin.carlist', $data);
    }
    public function delete_car(Request $request){
        $id = $request->id;
        $category = Vehicle::find($id);
        $category->status = 2;
        $category->save();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Delete car detail",
                'event_category'=>13,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }
    public function change_car_status(Request $request){
        $id = $request->id;
        $status = $request->status;
        $category = Vehicle::find($id);
        $category->status = $status;
        $category->save();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Change car status",
                'event_category'=>13,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }
    public function add_popular_car(Request $request){
        $id = $request->id;
        $status = $request->status;
        $category = Vehicle::find($id);
        $category->popular = $status;
        $category->save();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Add car in popular list",
                'event_category'=>13,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }

    public function cardetail(Request $request){
        $data['active'] = "brand";
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);

        $Vehicle = Vehicle::where('id',base64_decode($request->key))->first();
        $data['brand_name'] = Brand::where('id',$Vehicle->brandID)->first()->name;
        $data['model_name'] = CarModel::where('id',$Vehicle->modelID)->first()->name;

        $data['data'] = Vehicle::where('id',base64_decode($request->key))->first();
        $data['body'] = VehicleTrimBody::where('vehicleID',base64_decode($request->key))->first();
        $data['engine'] = VehicleTrimEngine::where('vehicleID',base64_decode($request->key))->first();
        $data['mileage'] = VehicleTrimMileage::where('vehicleID',base64_decode($request->key))->first();
        $data['interiorcolor'] = VehicleInteriorColors::where('vehicleID',base64_decode($request->key))->get();
        $data['exteriorcolor'] = VehicleExteriorColors::where('vehicleID',base64_decode($request->key))->get();
        $data['carimage'] = CarImage::where('vehicleID',base64_decode($request->key))->get();
        $data['carvideo'] = CarVideo::where('vehicleID',base64_decode($request->key))->get();
        return view('admin.cardetail', $data);
    }

    public function addcar(Request $request){
        $data['active'] = "brand";
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);
        $data['data'] = Vehicle::where('id',base64_decode($request->key))->first();
        $data['body'] = VehicleTrimBody::where('vehicleID',base64_decode($request->key))->first();
        $data['engine'] = VehicleTrimEngine::where('vehicleID',base64_decode($request->key))->first();
        $data['mileage'] = VehicleTrimMileage::where('vehicleID',base64_decode($request->key))->first();
        $data['interiorcolor'] = VehicleInteriorColors::where('vehicleID',base64_decode($request->key))->get();
        $data['exteriorcolor'] = VehicleExteriorColors::where('vehicleID',base64_decode($request->key))->get();
        $data['carimage'] = CarImage::where('vehicleID',base64_decode($request->key))->get();
        $data['carvideo'] = CarVideo::where('vehicleID',base64_decode($request->key))->get();
        return view('admin.addcar', $data);

    }

    public function insert_car(Request $request){
        $vehicleid = $request->id;
        $bodyid = $request->bodyid;
        $engineid = $request->engineid;
        $mileageid = $request->mileageid;
        // print_r($request->interiorimg);
        // print_r($request->exteriorimg);
        // print_r($request->testimg);
        // die;
        /////////////////////////////////
        $vehicle = new Vehicle;
        $vehicle = Vehicle::find($vehicleid);
        $vehicle->name = $request->name;
        $vehicle->description = $request->description;
        $vehicle->save();        
        //VehicleTrimBody
        $body = new VehicleTrimBody;
        $body = VehicleTrimBody::find($bodyid);
        $body->type = $request->type;
        $body->doors = $request->doors;
        $body->length = $request->length;
        $body->width = $request->width;
        $body->seats = $request->seats;
        $body->height = $request->height;
        $body->wheel_base = $request->wheel_base;
        $body->front_track = $request->front_track;
        $body->rear_track = $request->rear_track;
        $body->ground_clearance = $request->ground_clearance;
        $body->cargo_capacity = $request->cargo_capacity;
        $body->max_cargo_capacity = $request->max_cargo_capacity;
        $body->curb_weight = $request->curb_weight;
        $body->gross_weight = $request->gross_weight;
        $body->max_payload = $request->max_payload;
        $body->max_towing_capacity = $request->max_towing_capacity;
        $body->save();
        //VehicleTrimEngine
        $engine = new VehicleTrimEngine;
        $engine = VehicleTrimEngine::find($engineid);
        $engine->engine_type = $request->engine_type;
        $engine->fuel_type = $request->fuel_type;
        $engine->cylinders = $request->cylinders;
        $engine->size = $request->size;
        $engine->horsepower_hp = $request->horsepower_hp;
        $engine->horsepower_rpm = $request->horsepower_rpm;
        $engine->torque_ft_lbs = $request->torque_ft_lbs;
        $engine->torque_rpm = $request->torque_rpm;
        $engine->valves = $request->valves;
        $engine->valve_timing = $request->valve_timing;
        $engine->cam_type = $request->cam_type;
        $engine->drive_type = $request->drive_type;
        $engine->transmission = $request->transmission;
        $engine->save();
        //VehicleTrimMileage
        $mileage = new VehicleTrimMileage;
        $mileage = VehicleTrimMileage::find($mileageid);
        $mileage->fuel_tank_capacity = $request->fuel_tank_capacity;
        $mileage->combined_mpg = $request->combined_mpg;
        $mileage->epa_city_mpg = $request->epa_city_mpg;
        $mileage->epa_highway_mpg = $request->epa_highway_mpg;
        $mileage->range_city = $request->range_city;
        $mileage->range_highway = $request->range_highway;
        $mileage->battery_capacity_electric = $request->battery_capacity_electric;
        $mileage->epa_time_to_charge_hr_240v_electric = $request->epa_time_to_charge_hr_240v_electric;
        $mileage->epa_kwh_100_mi_electric = $request->epa_kwh_100_mi_electric;
        $mileage->range_electric = $request->range_electric;
        $mileage->epa_highway_mpg_electric = $request->epa_highway_mpg_electric;
        $mileage->epa_city_mpg_electric = $request->epa_city_mpg_electric;
        $mileage->epa_combined_mpg_electric = $request->epa_combined_mpg_electric;
        $mileage->save();
        //image
        $interiorimg = $request->interiorimg;
        $exteriorimg = $request->exteriorimg;
        $testimg = $request->testimg;
        if($interiorimg!=''){
            $imageName = 'in'.time().'.'.$request->interiorimg->extension();      
            $request->interiorimg->move(public_path('images/car/'), $imageName);
            $in_image_table=new CarImage;
            $in_image_table->vehicleID=$request->id;
            $in_image_table->modelID=base64_decode($request->modelID);
            $in_image_table->image=$imageName;
            $in_image_table->type=2;
            $in_image_table->save();
        }
        if($exteriorimg!=''){
            $imageNames = 'ex'.time().'.'.$request->exteriorimg->extension();      
            $request->exteriorimg->move(public_path('images/car/'), $imageNames);
            $ex_image_table=new CarImage;
            $ex_image_table->vehicleID=$request->id;
            $ex_image_table->modelID=base64_decode($request->modelID);
            $ex_image_table->image=$imageNames;
            $ex_image_table->type=1;
            $ex_image_table->save();
        }
        if($testimg!=''){
            $imageNamet = 'te'.time().'.'.$request->testimg->extension();      
            $request->testimg->move(public_path('images/car/'), $imageNamet);
            $te_image_table=new CarImage;
            $te_image_table->vehicleID=$request->id;
            $te_image_table->modelID=base64_decode($request->modelID);
            $te_image_table->image=$imageNamet;
            $te_image_table->type=3;
            $te_image_table->save();
        }
        // $interiorimg = $request->interiorimg;
        // if(!empty($interiorimg)){
        //     $image_count=count($request->interiorimg);
        //     for($i=0;$i<$image_count;$i++)
        //     {
        //         $imageName = time().'.'.$request->interiorimg[$i]->extension();      
        //         $request->interiorimg[$i]->move(public_path('images/car/'), $imageName);
        //         $in_image_table=new CarImage;
        //         $in_image_table->vehicleID=$request->id;
        //         $in_image_table->modelID=base64_decode($request->modelID);
        //         $in_image_table->image=$imageName;
        //         $in_image_table->type=2;
        //         $in_image_table->save();
        //     }
        // }
        // $exteriorimg = $request->exteriorimg;
        // if(!empty($exteriorimg)){
        //     $image_counts=count($request->exteriorimg);
        //     for($j=0;$j<$image_counts;$j++)
        //     {
        //         $imageNames = time().'.'.$request->exteriorimg[$j]->extension();      
        //         $request->exteriorimg[$j]->move(public_path('images/car/'), $imageNames);
        //         $ex_image_table=new CarImage;
        //         $ex_image_table->vehicleID=$request->id;
        //         $ex_image_table->modelID=base64_decode($request->modelID);
        //         $ex_image_table->image=$imageNames;
        //         $ex_image_table->type=1;
        //         $ex_image_table->save();
        //     }
        // }
        // $testimg = $request->testimg;

        // if(!empty($testimg)){
        //     $image_countt=count($request->testimg);
        //     for($k=0;$k<$image_countt;$k++)
        //     {
        //         $imageNamet = time().'.'.$request->testimg[$k]->extension();      
        //         $request->testimg[$k]->move(public_path('images/car/'), $imageNamet);
        //         $te_image_table=new CarImage;
        //         $te_image_table->vehicleID=$request->id;
        //         $te_image_table->modelID=base64_decode($request->modelID);
        //         $te_image_table->image=$imageNamet;
        //         $te_image_table->type=3;
        //         $te_image_table->save();
        //     }
        // }
        //video
        $videourl = $request->videourl;
        if(!empty($videourl)){
            $carvideo = CarVideo::select('video')->where('vehicleID',$request->id)->get();
            $carvideoarray = array();
            foreach($carvideo as $val){
                array_push($carvideoarray,$val->video);
            }
            $result=array_diff($carvideoarray,$request->videourl);
            foreach($request->videourl as $valb){
                if($valb!=''){
                    $check = CarVideo::where('video',$valb)->where('vehicleID',$request->id)->count();
                    if($check==0){
                        $agentBrand = new CarVideo;
                        $agentBrand->vehicleID = $request->id;
                        $agentBrand->modelID = base64_decode($request->modelID);
                        $agentBrand->video = $valb;
                        $agentBrand->save();
                    } 
                }                                
            }
            foreach($result as $rval){
                CarVideo::where('video',$rval)->where('vehicleID',$request->id)->delete();
            } 

        }       
        echo 1;
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Update car Details",
                'event_category'=>13,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }
    
    public function deleteimg(Request $request){
        $id = $request->id;
        $category = CarImage::find($id);
        $category->delete();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Delete car image",
                'event_category'=>13,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }

    public function pricelist(Request $request){
        $data['active'] = "brand";
        $Vehicle = Vehicle::where('id',base64_decode($request->key))->first();
        $data['brand_name'] = Brand::where('id',$Vehicle->brandID)->first()->name;
        $data['model_name'] = CarModel::where('id',$Vehicle->modelID)->first()->name;
        $data['vehicle_name'] = Vehicle::where('id',base64_decode($request->key))->first()->name;
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);
        $data['vehicleID'] = base64_decode($request->key);
        $data['data'] = CarPrice::where('vehicleID',base64_decode($request->key))->get();
        return view('admin.carprice', $data);
    }

    public function addprice(Request $request){
        $data['active'] = "brand";
        $Vehicle = Vehicle::where('id',base64_decode($request->id))->first();
        $data['brand_name'] = Brand::where('id',$Vehicle->brandID)->first()->name;
        $data['model_name'] = CarModel::where('modelID',$Vehicle->modelID)->first()->name;
        $data['vehicle_name'] = Vehicle::where('id',base64_decode($request->id))->first()->name;
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);
        $data['data'] = CarPrice::where('id',base64_decode($request->key))->first();
        $data['city'] = City::where('status',1)->get();
        $data['vehicleID'] = base64_decode($request->id);
        $data['modelID'] = Vehicle::find(base64_decode($request->id))->modelID;
        return view('admin.addcarprice', $data);
    }

    public function insert_carprice(Request $request){
        if($request->id==""){
            $check_name = CarPrice::where('vehicleID',$request->vehicleID)->where('CityID',$request->category)->count();
            if($check_name==0){                              
                $CarPrice = new CarPrice;
                $CarPrice->modelID = $request->modelID;
                $CarPrice->vehicleID = $request->vehicleID;
                $CarPrice->CityID = $request->category;
                $CarPrice->price = $request->name;
                $CarPrice->rto = 0;
                $CarPrice->insurance = 0;
                $CarPrice->other = 0;
                $CarPrice->onroadprice = 0;
                $CarPrice->save();
                echo 1;
                if(session::get('usertype')==2){
                    $log = array(
                        'staff_id'=>session::get('id'),
                        'logDate'=>date('Y-m-d'),
                        'event_name'=>"Add Car Price",
                        'event_category'=>13,
                        'event_id'=>$CarPrice->id,
                    );
                    // print_r($log);
                    $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
                }
            }else{
                echo 2;
            }              
        }else{
            $check_name = CarPrice::where('vehicleID',$request->vehicleID)->where('CityID',$request->category)->where('id',$request->id);
            if($check_name->count() >= 1 && $request->id != $check_name->first()->id){
                echo 2;
            }else{                
                $CarPrice = new CarPrice;
                $CarPrice = CarPrice::find($request->id);
                $CarPrice->CityID = $request->category;
                $CarPrice->price = $request->name;
                $CarPrice->save();
                echo 1;
                if(session::get('usertype')==2){
                    $log = array(
                        'staff_id'=>session::get('id'),
                        'logDate'=>date('Y-m-d'),
                        'event_name'=>"Update Car Price",
                        'event_category'=>13,
                        'event_id'=>$request->id,
                    );
                    // print_r($log);
                    $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
                }
            }
        }
    }

    public function delete_carprice(Request $request){
        $id = $request->id;
        $category = CarPrice::find($id);
        $category->delete();
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Delete Car Price",
                'event_category'=>13,
                'event_id'=>$request->id,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }

    public function popularCar(Request $request){
        $data['active'] = "pcar";
        $admin_id = session::get('id');
        $data['admin']=Admin::find($admin_id);
        $data['data'] = Vehicle::where('status','!=',2)->where('popular',1)->orderBy('position','ASC')->get();
        return view('admin.popularCar', $data);
    }

    public function updateCarOrder(Request $request){
        $arr=$request->allData;
        $num=0;
        for($i=0;$i<count($arr);$i++)
        {
            $brand = Vehicle::find($arr[$i]);
            $brand->position = $num=$num+1;
            $brand->save();
        }
        if(session::get('usertype')==2){
            $log = array(
                'staff_id'=>session::get('id'),
                'logDate'=>date('Y-m-d'),
                'event_name'=>"Update Car Order",
                'event_category'=>13,
                'event_id'=>0,
            );
            // print_r($log);
            $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
        }
    }

    public function stringtranslation($string){
        if($string!=''){
            $translate = ExternalSystem::translate($string);
            //print_r($translate);
            if($translate['status_code']==200){
                $record = json_decode($translate['body']);
                return $record->translations[0]->text;
            }else{
                return "";
            }
        }else{
            return "";
        } 
    }

    public function carimage($make,$model,$year,$color){
        $image = ExternalSystem::car_image($make,$model,$year,$color);
        if($image['status_code']==200){
            $record = json_decode($image['body']);
            return $record->images;
        }else{
            return "";
        }
    }

    public function insertbrochure(Request $request){        
        if($request->brochure!=''){
            $vehicleid = $request->broid;
            $imageName = time().'.'.$request->brochure->extension();      
            $request->brochure->move(public_path('images/car/'), $imageName);
            $vehicle = Vehicle::find($vehicleid);
            $vehicle->brochure = $imageName;
            $vehicle->save();
            if(session::get('usertype')==2){
                $log = array(
                    'staff_id'=>session::get('id'),
                    'logDate'=>date('Y-m-d'),
                    'event_name'=>"Update brochure",
                    'event_category'=>13,
                    'event_id'=>$vehicleid,
                );
                // print_r($log);
                $StaffLogEvent = StaffLogEvent::createStaffLogEvent($log);
            }
        }
        echo 1;
        
    }
}
