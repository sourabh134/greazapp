<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Agent;
use App\Models\AgentBrand;
use App\Models\CarModel;
use App\Models\Vehicle;
use App\Models\VehicleExteriorColors;
use App\Models\VehicleInteriorColors;
use App\Models\VehicleTrimBody;
use App\Models\VehicleTrimEngine;
use App\Models\VehicleTrimMileage;
use App\Models\City;
use App\Models\CarImage;
use App\Models\CarFavorite;
use App\Models\BrandReview;
use App\Models\BrandFavorite;
use App\Models\AgentFavorite;
use App\Models\AllBannerImage;

class BrandController extends Controller
{
    //All brand list
    public function allBrand(Request $request){
        $userID = $request->userID;
        $language = $request->language;
        $categoryID = $request->categoryID;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);
        }else{
            if($categoryID!=""){
                $brandpopcount = Brand::where('status',1)->where('popular',1)->where('categoryID',$categoryID)->count();
                if($brandpopcount!=0){
                    $popular = Brand::where('status',1)->where('categoryID',$categoryID)->orderby('popular','DESC')->orderby('position','ASC')->get();
                }else{
                    $popular = Brand::where('status',1)->where('categoryID',$categoryID)->orderby('name','ASC')->get();
                }
            }else{
                $brandpopcount = Brand::where('status',1)->where('popular',1)->where('categoryID',1)->count();
                if($brandpopcount!=0){
                    $popular = Brand::where('status',1)->where('categoryID',1)->orderby('popular','DESC')->orderby('position','ASC')->get();
                }else{
                    $popular = Brand::where('status',1)->where('categoryID',1)->orderby('name','ASC')->get();
                }
            }
            //$popular = Brand::where('status',1)->orderBy('name','ASC')->get();
            $popularBrandArray = array();
            foreach($popular as $popValue){
                $datap['id'] = $popValue->id;
                $datap['make_id'] = $popValue->make_id;
                $datap['logo'] = $popValue->logo;
                $datap['tag_icon'] = $popValue->tag_icon;
                if($language==2){
                    $datap['name'] = $popValue->name_ar;
                    $datap['description'] = $popValue->description_ar;
                    $datap['tag_name'] = $popValue->tag_name_ar;
                }else{
                    $datap['name'] = $popValue->name;
                    $datap['description'] = $popValue->description;
                    $datap['tag_name'] = $popValue->tag_name;
                }
                $brandfav = BrandFavorite::where('brandID',$popValue->id)->where('userID',$userID)->count();
                if($brandfav == 0){
                    $datap['fav'] = "0";
                }else{
                    $datap['fav'] = "1";
                }
                array_push($popularBrandArray,$datap);
            }
            return response()->json(['success'=>'true','message'=>'','result'=>$popularBrandArray], 200);
        }
    }

    //Brand Details
    public function branddetails(Request $request){
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
            //about
            $brand = Brand::where('id',$brandID)->where('status',1)->first();
            $datap['id'] = $brand->id;
            $datap['logo'] = $brand->logo;
            $datap['website'] = $brand->website;
            $datap['youtube'] = $brand->youtube;
            $datap['twitter'] = $brand->twitter;
            $datap['linkedin'] = $brand->linkedin;
            $datap['facebook'] = $brand->facebook;
            $datap['instagram'] = $brand->instagram;
            $datap['tag_icon'] = $brand->tag_icon;
            $datap['sponser_icon'] = $brand->sponser_icon;
            if($language==2){
                $datap['name'] = $brand->name_ar;
                $datap['tag_name'] = $brand->tag_name_ar;
                $datap['sponser_name'] = $brand->sponser_name_ar;
                $datap['description'] = $brand->description_ar;
            }else{
                $datap['name'] = $brand->name;
                $datap['tag_name'] = $brand->tag_name;
                $datap['sponser_name'] = $brand->sponser_name;
                $datap['description'] = $brand->description;
            }

            //agent
            $agentBrand = AgentBrand::where('brandID',$brandID)->get();
            $agenciesArray = array();
            foreach($agentBrand as $vagent){
                $agencies = Agent::where('id',$vagent->agentID)->where('status',1);
                if($agencies->count()!=0){
                    $aggvalue = $agencies->first();
                    $dataa['id'] = $aggvalue->id;
                    $dataa['logo'] = $aggvalue->logo;
                    $dataa['images'] = $aggvalue->images;
                    $dataa['type'] = $aggvalue->type;
                    $dataa['tag_icon'] = $aggvalue->tag_icon;
                    if($language==2){
                        $dataa['name'] = $aggvalue->name_ar;
                        $dataa['description'] = $aggvalue->discription_ar;
                        $dataa['tag_name'] = $aggvalue->tag_name_ar;
                    }else{
                        $dataa['name'] = $aggvalue->name;
                        $dataa['description'] = $aggvalue->description;
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
            }
            //car
            //new code 29-07-2024
            $vehicleArray = array();
            $vehiclebanner = array();
            $current_year = date('Y');
            $modeldata = CarModel::where('brandID',$brandID)->get();
            foreach($modeldata as $modelvalue){
                $datavehicle['id'] = $modelvalue->id;
                $datavehicle['year'] = "2023";
                $vehicleimg = CarImage::where('modelID',$modelvalue->id);
                if($vehicleimg->count()!=0){
                    if($vehicleimg->first()->image_type==1){
                        $datavehicle['image'] = url('public/images/car/'.$vehicleimg->first()->image);
                        //$datavehicleimg['image'] = url('public/images/car/'.$vehicleimg->first()->image);

                    }else{
                        $datavehicle['image'] = $vehicleimg->first()->image;
                        //$datavehicleimg['image'] = $vehicleimg->first()->image;
                    }
                    //array_push($vehiclebanner,$datavehicleimg);

                }else{
                    $datavehicle['image']="";
                }
                //$datavehicle['image']="";
                $datavehicle['modelID']=$modelvalue->id;
                if($language==2){
                    $datavehicle['name'] = $modelvalue->name_ar;
                    $datavehicle['description'] = "";
                }else{
                    $datavehicle['name'] = $modelvalue->name;
                    $datavehicle['description'] = "";
                }
                array_push($vehicleArray,$datavehicle);

                $vehicleimgs = CarImage::where('modelID',$modelvalue->id)->skip(0)->take(1)->get();
                foreach($vehicleimgs as $vimg){
                    $datavehicleimg['id'] = $vimg->id;
                    if($vimg->image_type==1){
                        $datavehicleimg['image'] = url('public/images/car/'.$vimg->image);

                    }else{
                        $datavehicleimg['image'] = $vimg->image;
                    }
                    //array_push($vehiclebanner,$datavehicleimg);
                }
            }
            //banner
            $brandbanner = AllBannerImage::where('bannertype',1)->where('bannerimageID',$brandID)->get();
            foreach($brandbanner as $bannervalue){
                $databrandbanner['image'] = url('public/images/'.$bannervalue->image);
                array_push($vehiclebanner,$databrandbanner);
            }
            //old code
            // $vehicle = Vehicle::where('status',1)->where('brandID',$brandID)->orderBy('year','DESC')->get();
            // $vehicleArray = array();
            // $vehiclebanner = array();
            // foreach($vehicle as $carvalue){
            //     $datavehicle['id'] = $carvalue->id;
            //     $CarImage = CarImage::where('vehicleID',$carvalue->id);
            //     if($CarImage->count()!=0){
            //         if($CarImage->first()->image_type==1){
            //             $datavehicle['image'] =url('public/images/car/'.$CarImage->first()->image);
            //             $datavehicleimg['image'] =url('public/images/car/'.$CarImage->first()->image);
            //         }else{
            //             $datavehicle['image'] =$CarImage->first()->image;
            //             $datavehicleimg['image'] =$CarImage->first()->image;
            //         }
            //         array_push($vehiclebanner,$datavehicleimg);

            //     }else{
            //         $datavehicle['image'] ="";
            //     }

            //     $datavehicle['modelID'] = $carvalue->modelID;
            //     if($language==2){
            //         $datavehicle['name'] = $carvalue->name;
            //         $datavehicle['description'] = $carvalue->description;
            //     }else{
            //         $datavehicle['name'] = $carvalue->name;
            //         $datavehicle['description'] = $carvalue->description;
            //     }
            //     array_push($vehicleArray,$datavehicle);
            // }
            $arr['about'] = $datap;
            $arr['agencies'] = $agenciesArray;
            $arr['car'] = $vehicleArray;
            $arr['banner'] = $vehiclebanner;
            $brandfav = BrandFavorite::where('brandID',$brandID)->where('userID',$userID)->count();
            if($brandfav == 0){
                $arr['fav'] = "0";
            }else{
                $arr['fav'] = "1";
            }
            //review
            $reviews = BrandReview::where('brandID',$brandID)->orderBy('id','DESC')->get();
            $reviewArrays = array();
            foreach($reviews as $revValues){
                $datarevs['id'] = $revValues->id;
                $datarevs['userID'] = $revValues->userID;
                $datarevs['username'] = User::find($revValues->userID)->name;
                $datarevs['rate'] = $revValues->rate;
                $datarevs['title'] = $revValues->title;
                $datarevs['message'] = $revValues->message;
                $datarevs['create_date'] = date('M d,Y',strtotime($revValues->created_at));
                array_push($reviewArrays,$datarevs);
            }
            $arr['review'] = $reviewArrays;
            $avgStar = BrandReview::where('brandID',$brandID)->avg('rate');
            $arr['rating'] = "".number_format($avgStar, 1, '.', '');
            $CarReview = BrandReview::where('brandID',$brandID);
            $arr['reviews'] = $CarReview->count();
            return response()->json(['success'=>'true','message'=>'','result'=>$arr], 200);
        }
    }

    //Add brand review
    public function addBrandreview(Request $request){
        $userID = $request->userID;
        $brandID = $request->brandID;
        $rate = $request->rate;
        $title = $request->title;
        $message = $request->message;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';
        }
        if($brandID==null){
            $err_array[]='brandID';
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
                $msg_failed = "تم بالفعل إعطاء تصنيف لهذه العلامة التجارية";
            }else{
                $msg_success = "Thank you for rating";
                $msg_failed = "Already rating given for this brand";
            }
            $check = BrandReview::where('userID',$userID)->where('brandID',$brandID)->count();
            if($check==0){
                $review = new BrandReview;
                $review->brandID = $brandID;
                $review->userID = $userID;
                $review->rate = $rate;
                $review->title = $title;
                $review->message = $message;
                $review->save();
                return response()->json(['success'=>'true','message'=>$msg_success], 200);
            }else{
                return response()->json(['success'=>'false','message'=>$msg_failed], 400);
            }

        }
    }
}
