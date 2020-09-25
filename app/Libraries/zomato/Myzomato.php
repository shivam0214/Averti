<?php 
namespace App\Libraries\zomato;
include(app_path() . '/Libraries/Zooms/vendor/autoload.php');

Class  Myzomato{
    public $zomato_api_key;
    public $api_url= 'https://developers.zomato.com/api/v2.1/';

    public function __construct( $zomato_api_key = '') {
        $this->zomato_api_key    = 'ef18c2db88ed7aaa5033fe57a62ec924';
    }

    public function get_cities($count=null,$q=null){
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://developers.zomato.com/api/v2.1/cities?q=haridwar&lat=53.12102113&lon=34.11111&city_ids=2&count=10",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "accept: application/json",
           "user-key: ef18c2db88ed7aaa5033fe57a62ec924"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          echo $response;
        }
        }

    public function get_category(){
        $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://developers.zomato.com/api/v2.1/categories",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "user-key: ef18c2db88ed7aaa5033fe57a62ec924"
        ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        echo $response;die;
    }
    public function establishments($city_id){
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://developers.zomato.com/api/v2.1/establishments?city_id=".$city_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "cache-control: no-cache",
                "postman-token: 54ba40e3-7e81-050a-36db-a8320cac8f20",
                "user_key: ef18c2db88ed7aaa5033fe57a62ec924"
            ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);
            return $response;
            
    }
    public function get_restaurant($resid = null){
        $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://developers.zomato.com/api/v2.1/restaurant?res_id=".$resid,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "user-key: ef18c2db88ed7aaa5033fe57a62ec924"
                ),
            ));
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            
            return $response;

    }
    public function get_cuisines(){
        $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://developers.zomato.com/api/v2.1/cuisines?city_id=10&lat=22222&lon=414141410",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "cache-control: no-cache",
                "postman-token: bf458e4f-f751-1db2-a45c-63b6dfaaffb6",
                "user-key: ef18c2db88ed7aaa5033fe57a62ec924"
            ),
            ));
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            echo $response;
            }

    public function get_daily_menus($res_id=null){
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://developers.zomato.com/api/v2.1/dailymenu?res_id=".$res_id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "cache-control: no-cache",
            "postman-token: bc0432bd-7dd6-3d0b-ec49-ec7c455c85a8",
            "user_key: ef18c2db88ed7aaa5033fe57a62ec924"
        ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        return $response;
        
    }
    
    public function location ($location=null){

        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://developers.zomato.com/api/v2.1/locations?query=.$location",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "cache-control: no-cache",
            "postman-token: 9234152c-daef-7b34-401b-b18da2b5f601",
            "user-key: ef18c2db88ed7aaa5033fe57a62ec924"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
          return $response;
        
    }
    public function search($city=null,$cuisines=null,$entity_id=null,$entity_type=null){
        $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://developers.zomato.com/api/v2.1/search?entity_id=".$entity_id."&entity_type=".$entity_type."&q=".$city."&count=20&cuisines=".$cuisines,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "cache-control: no-cache",
                "postman-token: 15b1cfea-6445-df98-fc0e-11738db4064e",
                "user_key: ef18c2db88ed7aaa5033fe57a62ec924"
            ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            return $response;
        }


        public function current_location(){
            $Latitude = '26.8467088';
            $Longitude = '80.9461592';
            $url = "https://maps.google.com/maps/api/geocode/json?key=AIzaSyAKM11ln1wyuIoCaL4ocp6DXP40i9zwEvA&latlng=$Latitude,$Longitude&sensor=false";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            $response = curl_exec($ch);
            curl_close($ch);
            $response = json_decode($response);
            return($response); 
        }
}