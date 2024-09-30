<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\User;

class NotificationController extends Controller
{
    //Notification list
    public function notification(Request $request){
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
            //update
            $current_date = date('Y-m-d');
            $current_time = date('H:i');
            $sql = Notification::where('end_date','<',$current_date)->where('end_time','<=',$current_time)->update(['status'=>2]);
            $sql2 = Notification::where('end_date',$current_date)->where('end_time','<=',$current_time)->update(['status'=>2]);
            $notification = Notification::where('UserID',$userID)->where('status',1)->orderBy('id','DESC')->get();
            $notificationarray = array();
            foreach($notification as $value){
                $data['id'] = $value->id;                
                $data['url'] = $value->url;
                $data['image'] = $value->image;
                $data['created_at'] = $value->created_at;
                if($language == 2){
                    $data['title'] = $value->title_ar;
                    $data['message'] = $value->message_ar;
                }else{
                    $data['title'] = $value->title;
                    $data['message'] = $value->message;  
                }
                array_push($notificationarray,$data);
            }
            return response()->json(['success'=>'true','message'=>'','result'=>$notificationarray], 200);
        }
    }
    
    //Notification delete
    public function notificationdelete(Request $request){
        $userID = $request->userID;
        $notification_id = $request->notification_id;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($notification_id==null){
            $err_array[]='notification_id';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            if($language == 2){
                $msg_success = "حذف بنجاح";
            }else{
                $msg_success = "Deleted Successfully";
            }            
            $notification = Notification::where('id',$notification_id)->first();
            $notification->status = 2;
            $notification->save();
            return response()->json(['success'=>'true','message'=>$msg_success], 200);
        }
    }

    //Notification Hide
    public function notification_hide(Request $request){
        $userID = $request->userID;
        $language = $request->language;
        $fav_brand = $request->fav_brand;
        $fav_car = $request->fav_car;
        $fav_agency = $request->fav_agency;
        $fav_news = $request->fav_news;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{
            if($language == 2){
                $msg_success = "حبنجاح";
            }else{
                $msg_success = "Successfully";
            }           
            $user = User::find($userID);
            $user->notification_hide = $fav_brand.','.$fav_car.','.$fav_agency.','.$fav_news;
            $user->save();
            return response()->json(['success'=>'true','message'=>$msg_success], 200);
        }
    }
}
