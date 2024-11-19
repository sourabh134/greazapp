<?php
namespace App\Modules;

use Illuminate\Support\Str;

/**
 * 外部システム接続
 */
abstract class ExternalSystem
{
	public $token;
    
    public static function accessToken(){
        $url = 'https://carapi.app/api/auth/login';
        //$url = env('CAR_API_URL')."/auth/login";
        $body = '{
            "api_token": "dcdb9450-da42-4ab6-a7a6-03d91ba06087",
            "api_secret": "6dc3bc62e4d31b2f28416ff4912f8c74"
          }';
		$client = new \GuzzleHttp\Client();
		$response = $client->request(
			'POST',
			$url,
			array(
				"body"=>$body,
				"headers" => array(
					'content-type' => 'application/json'
				),
			)
		);
		 $responseBody = $response->getBody()->getContents();
		define("tokens", $responseBody);
		//$token = $responseBody;
		return $responseBody;
    }

	public static function get_model($make_id,$year)
	{ 
		try{      
			$token = static::accessToken();
			$url = "https://carapi.app/api/models?year=$year&make_id=$make_id";
			//$url = env('CAR_API_URL')."models?year=$year&make_id=$make_id"; die;
			$client = new \GuzzleHttp\Client();
			$response = $client->request(
				'GET',
				$url,
				array(
					"headers" => array(
						"Authorization" => "Bearer ".$token,
					),
				)
			);
			$responseBody = $response->getBody()->getContents();
		}catch(\Exception $e) {
			$responseBody['status_code'] = 400;
		}
		return $responseBody;
	}

    public static function get_trim($make_id,$year,$make_model_id)
	{  
		//$token = constant("tokens");
        $token = static::accessToken();
		$url = "https://carapi.app/api/trims?year=$year&make_model_id=$make_model_id&make_id=$make_id";
		//$url = env('CAR_API_URL')."trims?year=$year&make_model_id=$make_model_id&make_id=$make_id";
		$client = new \GuzzleHttp\Client();
		$response = $client->request(
			'GET',
			$url,
			array(
				"headers" => array(
					"Authorization" => "Bearer ".$token,
				),
			)
		);
		$responseBody = $response->getBody()->getContents();
		return $responseBody;
	}

    public static function get_vehicle_detail($vehicle_id)
	{       
        //$token = static::accessToken();
		$token = constant("tokens");
		$url = "https://carapi.app/api/trims/".$vehicle_id;
		//$url = env('CAR_API_URL')."trims/".$vehicle_id;
		$client = new \GuzzleHttp\Client();
		$response = $client->request(
			'GET',
			$url,
			array(
				"headers" => array(
					"Authorization" => "Bearer ".$token,
				),
			)
		);
		$responseBody = $response->getBody()->getContents();
		return $responseBody;
	}

	public static function get_vin_decoder($vin){
		try{
			$token = static::accessToken();
			$url = "https://carapi.app/api/vin/".$vin;
			//$url = env('CAR_API_URL')."vin/".$vin;
			$client = new \GuzzleHttp\Client();
			$response = $client->request(
				'GET',
				$url,
				array(
					"headers" => array(
						"Authorization" => "Bearer ".$token,
					),
				)
			);
			$responseBody['status_code'] = $response->getStatusCode();
			$responseBody['body'] = $response->getBody()->getContents();
			//$responseBody = $response->getBody()->getContents();
		}catch(\Exception $e) {
			$responseBody['status_code'] = 400;
		}
		return $responseBody;
	}

	public static function getvin_decoder($vin){
		try{			
			$url = "https://api.carsxe.com/specs?key=f4yq6riyc_y1ycgu7vb_o5zaemyen&vin=".$vin;
			//$url = env('CARXE_URL')."specs?key=".env('CARXE_KEY')."&vin=".$vin;
			$client = new \GuzzleHttp\Client();
			$response = $client->request(
				'GET',
				$url,
				array(
					"headers" => array(
						'Content-Type' => 'application/x-www-form-urlencoded'
					),
				)
			);
			$responseBody['status_code'] = $response->getStatusCode();
			$responseBody['body'] = $response->getBody()->getContents();
			//$responseBody = $response->getBody()->getContents();
		}catch(\Exception $e) {
			$responseBody['status_code'] = 400;
		}
		return $responseBody;
	}

	public static function translate($string){
		try{			
			$url = "https://api-free.deepl.com/v2/translate";
			//$url = env('TRANSLATE_URL')."translate";
			$client = new \GuzzleHttp\Client();
			$body = '{
				"text": [
				  "'.$string.'"
				],
				"target_lang": "AR"
			  }';
			//   print_r($body);
			//   die;
			$response = $client->request(
				'POST',
				$url,
				array(
					"headers" => array(
						'Authorization' => "DeepL-Auth-Key ".env('TRANSLATE_KEY'),
  						'Content-Type' => 'application/json'
					),
					"body" => $body
				)
			);
			$responseBody['status_code'] = $response->getStatusCode();
			$responseBody['body'] = $response->getBody()->getContents();
			//$responseBody = $response->getBody()->getContents();
		}catch(\Exception $e) {
			//print_r($e->getMessage());
			$responseBody['status_code'] = 400;
		}
		return $responseBody;
	}

	public static function car_image($make,$model,$year,$color){
		try{						
			$url = "https://api.carsxe.com/images?key=f4yq6riyc_y1ycgu7vb_o5zaemyen&make=".$make."&model=".$model."&year=".$year."&color=".$color."&format=json";
			//$url = env('CARXE_URL')."images?key=".env('CARXE_KEY')."&make=".$make."&model=".$model."&year=".$year."&color=".$color."&format=json";
			$client = new \GuzzleHttp\Client();
			$response = $client->request(
				'GET',
				$url,
				array(
					"headers" => array(
						'Content-Type' => 'application/x-www-form-urlencoded'
					),
				)
			);
			$responseBody['status_code'] = $response->getStatusCode();
			$responseBody['body'] = $response->getBody()->getContents();
			//$responseBody = $response->getBody()->getContents();
		}catch(\Exception $e) {
			$responseBody['status_code'] = 400;
		}
		return $responseBody;
	}

	public static function chat($message)
    {
		try{
			$client = new \GuzzleHttp\Client();
			//$apiKey = env('OPENAI_API_KEY');
			$apiKey = "sk-proj-uQJwkBBNJ9IUWgnz189yT3BlbkFJQaixbxMHkIfjOdRPKQ5T";
        	$url = "https://api.openai.com/v1/chat/completions";
        	//$url = env('OPENAI_API_URL');
			$response = $client->post($url, [
				'headers' => [
					'Content-Type' => 'application/json',
					'Authorization' => 'Bearer ' . $apiKey,
				],
				'json' => [
					'model' => "gpt-4o-mini",
					'messages' => [
						['role' => 'system', 'content' => 'You are a helpful assistant.'],
						['role' => 'user', 'content' => $message],
					],
				],
			]);
			$responseBody['status_code'] = $response->getStatusCode();
			$responseBody['body'] = $response->getBody()->getContents();
			//$responseBody = json_decode($response->getBody()->getContents(), true);

		}catch(\Exception $e) {
			//print_r($e->getMessage());
			$responseBody['status_code'] = 400;
		}
		return $responseBody;
    }

	public static function get_car_detail($car_brand,$car_model,$car_class,$car_year)
    {
		try{
			//$url = "https://virdim.com/GearZ/car_details?car_brand=".$car_brand."&car_model=".$car_model."&car_class=".$car_class."&car_year=".$car_year;
			$url = "https://ra2fat.com/_vps/GearZ/get_car_specifications?car_brand=".$car_brand."&car_model=".$car_model."&car_class=".$car_class."&car_year=".$car_year;
			$client = new \GuzzleHttp\Client();
			$response = $client->request(
				'GET',
				$url,
				array(
					"headers" => array(
						'Content-Type' => 'application/x-www-form-urlencoded'
					),
				)
			);
			$responseBody['status_code'] = $response->getStatusCode();
			$responseBody['body'] = $response->getBody()->getContents();
		}catch(\Exception $e) {
			$responseBody['status_code'] = 400;
		}
		//print_r($responseBody);
		
		return $responseBody;
    }

	//resize image
	public static function resizeImage($resourceType,$image_width,$image_height,$resizeWidth,$resizeHeight) {
        // $resizeWidth = 100;
        // $resizeHeight = 100;
        $imageLayer = imagecreatetruecolor($resizeWidth,$resizeHeight);
        imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$resizeWidth,$resizeHeight, $image_width,$image_height);
        return $imageLayer;
    }

    public static function saveresizeimage($new_width,$new_height,$fileName,$uploadPath,$fileExt,$imgname){
        //$new_width = 720;
        //$new_height = 480;
        //$fileName = $_FILES['image']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = time();
        //$uploadPath = "./public/img/banners/";
        //$fileExt = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];
        switch ($uploadImageType) {
            case IMAGETYPE_JPEG:
                $resourceType = imagecreatefromjpeg($fileName); 
                $imageLayer = static::resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$new_width,$new_height);
                imagejpeg($imageLayer,$uploadPath.$imgname.$resizeFileName.'.'. $fileExt);
                break;

            case IMAGETYPE_GIF:
                $resourceType = imagecreatefromgif($fileName); 
                $imageLayer = static::resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$new_width,$new_height);
                imagegif($imageLayer,$uploadPath.$imgname.$resizeFileName.'.'. $fileExt);
                break;

            case IMAGETYPE_PNG:
                $resourceType = imagecreatefrompng($fileName); 
                $imageLayer = static::resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$new_width,$new_height);
                imagepng($imageLayer,$uploadPath.$imgname.$resizeFileName.'.'. $fileExt);
                break;

            case IMAGETYPE_JPG:
                $resourceType = imagecreatefrompng($fileName); 
                $imageLayer = static::resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$new_width,$new_height);
                imagepng($imageLayer,$uploadPath.$imgname.$resizeFileName.'.'. $fileExt);
                break;

            default:
                $imageProcess = 0;
                break;
        }
        move_uploaded_file($fileName, $uploadPath. $resizeFileName. ".". $fileExt);
        return $imageName = $imgname.$resizeFileName.'.'. $fileExt;
    }

	

}