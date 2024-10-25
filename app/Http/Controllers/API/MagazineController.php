<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Magazine;
use App\Models\MagazineReview;
use App\Models\User;
use App\Models\NewsFavorite;
use App\Models\Viewed;
use Google\Client as GoogleClient;

class MagazineController extends Controller
{
    private $serviceAccountFile;
    function __construct()
    {
       $this->serviceAccountFile = storage_path('gearz.json'); 
    }
    //All Magazine list
    public function allmagazine(Request $request){
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
            $newsbanner = Magazine::where('banner',1)->where('status',1)->orderBy('postedDate','DESC')->get();
            $newsbannerarray = array();
            foreach($newsbanner as $nbvalue){
                $datanewsbanner['id'] = $nbvalue->id;                
                $datanewsbanner['image'] = $nbvalue->image;
                $datanewsbanner['videourl'] = $nbvalue->videourl;                
                $datanewsbanner['postedDate'] = $nbvalue->postedDate;
                if($language==2){
                    $datanewsbanner['heading'] = $nbvalue->heading_ar;
                    $datanewsbanner['description'] = $nbvalue->sort_description_ar;
                    $datanewsbanner['postedBy'] = $nbvalue->postedBy_ar;
                }else{
                    $datanewsbanner['heading'] = $nbvalue->heading;
                    $datanewsbanner['description'] = $nbvalue->sort_description;
                    $datanewsbanner['postedBy'] = $nbvalue->postedBy;
                }
                $datanewsbanner['totalviews'] = Viewed::where('menu_type',2)->where('menuID',$nbvalue->id)->count();
                array_push($newsbannerarray,$datanewsbanner);
            }
            //news
            $check_news = Magazine::where('type',1)->where('status',1)->where('position','!=',0)->count();
            if($check_news==0){
                $news = Magazine::where('type',1)->where('status',1)->orderBy('postedDate', 'ASC')->get();
            }else{
                $news = Magazine::where('type',1)->where('status',1)->orderBy('position', 'ASC')->get();
            }
           // $news = Magazine::where('status',1)->orderBy('position', 'ASC')->get();
            $newsarray = array();
            foreach($news as $nvalue){
                $datanews['id'] = $nvalue->id;
                
                $datanews['image'] = $nvalue->image;
                $datanews['videourl'] = $nvalue->videourl;
                
                $datanews['postedDate'] = $nvalue->postedDate;
                $datanews['end_date'] = $nvalue->end_date;
                $datanews['website'] = $nvalue->website;
                $datanews['address'] = $nvalue->address;
                $datanews['facebook'] = $nvalue->facebook;
                $datanews['instagram'] = $nvalue->instagram;
                $datanews['linkedin'] = $nvalue->linkedin;
                $datanews['twitter'] = $nvalue->twitter;
                $datanews['contact_number'] = $nvalue->contact_number;
                $datanews['tag_icon'] = $nvalue->tag_icon;
                
                $datanews['sponser_icon'] = $nvalue->sponser_icon;
                $datanews['sponser_name'] = $nvalue->sponser_name;
                $datanews['type'] = $nvalue->type;
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
            $arr['banner'] = $newsbannerarray;
            $arr['news'] = $newsarray;
            $res = mb_convert_encoding($arr, 'UTF-8', 'UTF-8');
            // print_r($arr);
            // die;
            return response()->json(['success'=>'true','message'=>'','result'=>$res], 200);
        }
    }

    //Magazine Data
    public function magazinedata(Request $request){
        $userID = $request->userID;
        $magazineID = $request->magazineID;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($magazineID==null){
            $err_array[]='magazineID';    
        }
        if(count($err_array)>0){
            $er = implode(",", $err_array);    
            return response()->json(['success'=>'false','message'=>"400 Bad Request, missing ".$er], 400);    
        }else{ 
            try{           
                $news = Magazine::where('id',$magazineID)->where('status',1)->first();                
                $datanews['id'] = $news->id;                
                $datanews['image'] = $news->image;
                $datanews['videourl'] = $news->videourl;                
                $datanews['postedDate'] = $news->postedDate;
                $datanews['end_date'] = $news->end_date;
                $datanews['website'] = $news->website;
                $datanews['address'] = $news->address;
                $datanews['facebook'] = $news->facebook;
                $datanews['instagram'] = $news->instagram;
                $datanews['linkedin'] = $news->linkedin;
                $datanews['twitter'] = $news->twitter;
                $datanews['contact_number'] = $news->contact_number;
                $datanews['tag_icon'] = $news->tag_icon;                
                $datanews['sponser_icon'] = $news->sponser_icon;
                $datanews['sponser_name'] = $news->sponser_name;
                $datanews['type'] = $news->type;
                if($language == 2){
                    $datanews['heading'] = $news->heading_ar;
                    $datanews['description'] = $news->description_ar;
                    $datanews['postedBy'] = $news->postedBy_ar;
                    $datanews['tag_name'] = $news->tag_name_ar;
                }else{
                    $datanews['heading'] = $news->heading;
                    $datanews['description'] = $news->description;
                    $datanews['postedBy'] = $news->postedBy;
                    $datanews['tag_name'] = $news->tag_name;
                }
                //review
                $reviews = MagazineReview::where('magazineID',$magazineID)->orderBy('id','DESC')->get();
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
                $datanews['review'] = $reviewArrays;
                $avgStar = MagazineReview::where('magazineID',$magazineID)->avg('rate');
                $datanews['rating'] = "".number_format($avgStar, 1, '.', '');
                $CarReview = MagazineReview::where('magazineID',$magazineID);
                $datanews['reviews'] = $CarReview->count();
                $checknewsfav = NewsFavorite::where('userID',$userID)->where('newsID',$news->id)->count();
                if($checknewsfav!=0){
                    $datanews['favorite']=1;
                }else{
                    $datanews['favorite']=0;
                }
                $datanews['totalviews'] = Viewed::where('menu_type',2)->where('menuID',$magazineID)->count();
                $res = mb_convert_encoding($datanews, 'UTF-8', 'UTF-8');             
                return response()->json(['success'=>'true','message'=>'','result'=>$res], 200);
            }catch(\Exception $e){
                return response()->json(['success'=>'false','message'=>$e->getMessage()], 500);
            }
        }
    }

    //Magazine Tab Data
    public function magazinetabdata(Request $request){
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
            //news
            $news = Magazine::where('status',1)->where('type',1)->orderBy('position', 'ASC')->get();
            $newsarray = array();
            foreach($news as $nvalue){
                $datanews['id'] = $nvalue->id;                
                $datanews['image'] = $nvalue->image;
                $datanews['videourl'] = $nvalue->videourl;                
                $datanews['postedDate'] = $nvalue->postedDate;
                $datanews['end_date'] = $nvalue->end_date;
                $datanews['website'] = $nvalue->website;
                $datanews['address'] = $nvalue->address;
                $datanews['facebook'] = $nvalue->facebook;
                $datanews['instagram'] = $nvalue->instagram;
                $datanews['linkedin'] = $nvalue->linkedin;
                $datanews['twitter'] = $nvalue->twitter;
                $datanews['contact_number'] = $nvalue->contact_number;
                $datanews['tag_icon'] = $nvalue->tag_icon;                
                $datanews['sponser_icon'] = $nvalue->sponser_icon;
                $datanews['sponser_name'] = $nvalue->sponser_name;
                $datanews['type'] = $nvalue->type;
                if($language == 2){
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
            $arr['news'] = $newsarray;
            //review
            $review = Magazine::where('status',1)->where('type',2)->orderBy('position', 'ASC')->get();
            $reviewarray = array();
            foreach($review as $rvalue){
                $datareview['id'] = $rvalue->id;                
                $datareview['image'] = $rvalue->image;
                $datareview['videourl'] = $rvalue->videourl;                
                $datareview['postedDate'] = $rvalue->postedDate;
                $datareview['end_date'] = $rvalue->end_date;
                $datareview['website'] = $rvalue->website;
                $datareview['address'] = $rvalue->address;
                $datareview['facebook'] = $rvalue->facebook;
                $datareview['instagram'] = $rvalue->instagram;
                $datareview['linkedin'] = $rvalue->linkedin;
                $datareview['twitter'] = $rvalue->twitter;
                $datareview['contact_number'] = $rvalue->contact_number;
                $datareview['tag_icon'] = $rvalue->tag_icon;                
                $datareview['sponser_icon'] = $rvalue->sponser_icon;
                $datareview['sponser_name'] = $rvalue->sponser_name;
                $datareview['type'] = $rvalue->type;
                if($language == 2){
                    $datareview['heading'] = $rvalue->heading_ar;
                    $datareview['description'] = $rvalue->description_ar;
                    $datareview['postedBy'] = $rvalue->postedBy_ar;
                    $datareview['tag_name'] = $rvalue->tag_name_ar;
                }else{
                    $datareview['heading'] = $rvalue->heading;
                    $datareview['description'] = $rvalue->description;
                    $datareview['postedBy'] = $rvalue->postedBy;
                    $datareview['tag_name'] = $rvalue->tag_name;
                }                
                $checknewsfavr = NewsFavorite::where('userID',$userID)->where('newsID',$rvalue->id)->count();
                if($checknewsfavr!=0){
                    $datareview['favorite']=1;
                }else{
                    $datareview['favorite']=0;
                }
                $datareview['totalviews'] = Viewed::where('menu_type',2)->where('menuID',$rvalue->id)->count();
                array_push($reviewarray,$datareview);
            }            
            $arr['review'] = $reviewarray;
            //video
            $video = Magazine::where('status',1)->where('type',3)->orderBy('position', 'ASC')->get();
            $videoarray = array();
            foreach($video as $vvalue){
                $datavideo['id'] = $vvalue->id;
                //$datavideo['heading'] = $vvalue->heading;
                //$datavideo['description'] = substr($vvalue->description,0,50);
                $datavideo['image'] = $vvalue->image;
                $datavideo['videourl'] = $vvalue->videourl;
                //$datavideo['postedBy'] = $vvalue->postedBy;
                $datavideo['postedDate'] = $vvalue->postedDate;
                $datavideo['end_date'] = $vvalue->end_date;
                $datavideo['website'] = $vvalue->website;
                $datavideo['address'] = $vvalue->address;
                $datavideo['facebook'] = $vvalue->facebook;
                $datavideo['instagram'] = $vvalue->instagram;
                $datavideo['linkedin'] = $vvalue->linkedin;
                $datavideo['twitter'] = $vvalue->twitter;
                $datavideo['contact_number'] = $vvalue->contact_number;
                $datavideo['tag_icon'] = $vvalue->tag_icon;
                //$datavideo['tag_name'] = $vvalue->tag_name;
                $datavideo['sponser_icon'] = $vvalue->sponser_icon;
                $datavideo['sponser_name'] = $vvalue->sponser_name;
                $datavideo['type'] = $vvalue->type;
                if($language == 2){
                    $datavideo['heading'] = $vvalue->heading_ar;
                    $datavideo['description'] = $vvalue->description_ar;
                    $datavideo['postedBy'] = $vvalue->postedBy_ar;
                    $datavideo['tag_name'] = $vvalue->tag_name_ar;
                }else{
                    $datavideo['heading'] = $vvalue->heading;
                    $datavideo['description'] = $vvalue->description;
                    $datavideo['postedBy'] = $vvalue->postedBy;
                    $datavideo['tag_name'] = $vvalue->tag_name;
                }
                $checknewsfavv = NewsFavorite::where('userID',$userID)->where('newsID',$vvalue->id)->count();
                if($checknewsfavv!=0){
                    $datavideo['favorite']=1;
                }else{
                    $datavideo['favorite']=0;
                }
                $datavideo['totalviews'] = Viewed::where('menu_type',2)->where('menuID',$vvalue->id)->count();
                array_push($videoarray,$datavideo);
            }            
            $arr['video'] = $videoarray;
            //event
            $event = Magazine::where('status',1)->where('type',4)->orderBy('position', 'ASC')->get();
            $eventarray = array();
            foreach($event as $evalue){
                $dataevent['id'] = $evalue->id;
                //$dataevent['heading'] = $evalue->heading;
                //$dataevent['description'] = substr($evalue->description,0,50);
                $dataevent['image'] = $evalue->image;
                $dataevent['videourl'] = $evalue->videourl;
                //$dataevent['postedBy'] = $evalue->postedBy;
                $dataevent['postedDate'] = $evalue->postedDate;
                $dataevent['end_date'] = $evalue->end_date;
                $dataevent['website'] = $evalue->website;
                $dataevent['address'] = $evalue->address;
                $dataevent['facebook'] = $evalue->facebook;
                $dataevent['instagram'] = $evalue->instagram;
                $dataevent['linkedin'] = $evalue->linkedin;
                $dataevent['twitter'] = $evalue->twitter;
                $dataevent['contact_number'] = $evalue->contact_number;
                $dataevent['tag_icon'] = $evalue->tag_icon;
                //$dataevent['tag_name'] = $evalue->tag_name;
                $dataevent['sponser_icon'] = $evalue->sponser_icon;
                $dataevent['sponser_name'] = $evalue->sponser_name;
                $dataevent['type'] = $evalue->type;
                if($language == 2){
                    $dataevent['heading'] = $evalue->heading_ar;
                    $dataevent['description'] = $evalue->description_ar;
                    $dataevent['postedBy'] = $evalue->postedBy_ar;
                    $dataevent['tag_name'] = $evalue->tag_name_ar;
                }else{
                    $dataevent['heading'] = $evalue->heading;
                    $dataevent['description'] = $evalue->description;
                    $dataevent['postedBy'] = $evalue->postedBy;
                    $dataevent['tag_name'] = $evalue->tag_name;
                }
                $checknewsfave = NewsFavorite::where('userID',$userID)->where('newsID',$evalue->id)->count();
                if($checknewsfave!=0){
                    $dataevent['favorite']=1;
                }else{
                    $dataevent['favorite']=0;
                }
                $dataevent['totalviews'] = Viewed::where('menu_type',2)->where('menuID',$evalue->id)->count();
                array_push($eventarray,$dataevent);
            }            
            $arr['event'] = $eventarray;
            $res = mb_convert_encoding($arr, 'UTF-8', 'UTF-8');
            return response()->json(['success'=>'true','message'=>'','result'=>$res], 200);
        }
    }

    //All Events
    public function allevents(Request $request){
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
            //news
            $news = Magazine::where('status',1)->where('type',4)->orderBy('position', 'ASC')->get();
            $newsarray = array();
            foreach($news as $nvalue){
                $datanews['id'] = $nvalue->id;
                //$datanews['heading'] = $nvalue->heading;
                //$datanews['description'] = substr($nvalue->description,0,50);
                $datanews['image'] = $nvalue->image;
                $datanews['videourl'] = $nvalue->videourl;
                //$datanews['postedBy'] = $nvalue->postedBy;
                $datanews['postedDate'] = $nvalue->postedDate;
                $datanews['end_date'] = $nvalue->end_date;
                $datanews['website'] = $nvalue->website;
                $datanews['address'] = $nvalue->address;
                $datanews['facebook'] = $nvalue->facebook;
                $datanews['instagram'] = $nvalue->instagram;
                $datanews['linkedin'] = $nvalue->linkedin;
                $datanews['twitter'] = $nvalue->twitter;
                $datanews['contact_number'] = $nvalue->contact_number;
                $datanews['tag_icon'] = $nvalue->tag_icon;
                //$datanews['tag_name'] = $nvalue->tag_name;
                $datanews['sponser_icon'] = $nvalue->sponser_icon;
                $datanews['sponser_name'] = $nvalue->sponser_name;
                $datanews['type'] = $nvalue->type;
                if($language == 2){
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
            $res = mb_convert_encoding($newsarray, 'UTF-8', 'UTF-8');            
            return response()->json(['success'=>'true','message'=>'','result'=>$res], 200);
        }
    }
    
    //Add Magazine review
    public function addmagazineview(Request $request){
        $userID = $request->userID;
        $magazineID = $request->magazineID;
        $rate = $request->rate;
        $title = $request->title;
        $message = $request->message;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($magazineID==null){
            $err_array[]='magazineID';    
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
                $msg_failed = "بالفعل تصنيف معين لهذا";
            }else{
                $msg_success = "Thank you for rating";
                $msg_failed = "Already rating given for this";
            }
            $check = MagazineReview::where('userID',$userID)->where('magazineID',$magazineID)->count();            
            if($check==0){
                $review = new MagazineReview;
                $review->magazineID = $magazineID;
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
    
    //Add news favorite
    public function addnewsfavorites(Request $request){
        $userID = $request->userID;
        $newsID = $request->newsID;
        $language = $request->language;
        $err_array =array();
        if($userID==null){
            $err_array[]='userID';    
        }
        if($newsID==null){
            $err_array[]='newsID';    
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
            $check = NewsFavorite::where('userID',$userID)->where('newsID',$newsID)->count();
            if($check==0){
                $favorites = new NewsFavorite;
                $favorites->newsID = $newsID;
                $favorites->userID = $userID;
                $favorites->favorite = 1;
                $favorites->save();
                //send notification                
                if($language == 2){
                    $carname = Magazine::where('id',$newsID)->first()->heading_ar;
                    $msgnotification = $carname." تمت إضافة الأخبار إلى المفضلة لديك.";
                    $titlenotification = " مفضلة جديدة";
                }else{
                    $carname = Magazine::where('id',$newsID)->first()->heading;
                    $msgnotification = $carname." news has been added as your favorite.";
                    $titlenotification = "New Favorite";
                }
                $devicetoken = User::where('id',$userID)->first()->deviceToken;
                //notification_hide $fav_brand.','.$fav_car.','.$fav_agency.','.$fav_news;
                $notification_hide = User::where('id',$userID)->first()->notification_hide;
                if(strlen($notification_hide)>=7){
                    $notiarray = explode(',',$notification_hide);
                    if($notiarray[3]==0){
                        $this->send_notification($devicetoken, $msgnotification, $titlenotification);
                    }
                }else{
                    $this->send_notification($devicetoken, $msgnotification, $titlenotification);
                }
                //$this->send_notification($devicetoken, $msgnotification, $titlenotification);
                return response()->json(['success'=>'true','message'=>$msg_success], 200);

            }else{
                $favorites = NewsFavorite::where('userID',$userID)->where('newsID',$newsID)->delete();
                return response()->json(['success'=>'true','message'=>$msg_failed], 200);
            }

        }
    }
    
    //News Favorite List
    public function newsfavorites_list(Request $request){
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
            $favorite = NewsFavorite::where('userID',$userID)->orderBy('id','DESC')->get();
            foreach($favorite as $value){
                $datanews['id'] = $value->id;
                $datanews['userID'] = $value->userID;
                $datanews['newsID'] = $value->newsID;
                $nvalue = Magazine::where('id',$value->newsID)->first();                
                $datanews['id'] = $nvalue->id;
                //$datanews['heading'] = $nvalue->heading;
                //$datanews['description'] = $nvalue->sort_description;
                $datanews['image'] = $nvalue->image;
                $datanews['videourl'] = $nvalue->videourl;
                //$datanews['postedBy'] = $nvalue->postedBy;
                $datanews['postedDate'] = $nvalue->postedDate;
                $datanews['tag_icon'] = $nvalue->tag_icon;
                //$datanews['tag_name'] = $nvalue->tag_name;                
                $datanews['favorite'] = 1;
                if($language == 2){
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
                $datanews['totalviews'] = Viewed::where('menu_type',2)->where('menuID',$value->newsID)->count();               
                array_push($favoritearray, $datanews);
            }            
            return response()->json(['success'=>'true','message'=>"",'result'=>$favoritearray], 200);
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
}
