<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\User;
use App\User_meta;
use App\Food_product;
use App\Libraries\zomato\Myzomato;


class FoodController extends Controller
{
    public function food_admin(){
        return view('food.food_layout');

    }
    public function add_product(){
        return view('food.add_products');
    }

    public function product(Request $r){
        $products=array(
        'advisor_id'=>Auth::user()['id'],
        'staff_id'=>$r->staff_id,
        'restaurant_id'=>$r->restaurant_id,
        'product_name'=>$r->product_name,
        'type'=>$r->type,
        'category'=>$r->category,
        'description'=>$r->description,
        'images'=>$r->images,
        'image_gallery'=>$r->image_gallery,
        'price'=>$r->price,
        'discount'=>$r->discount,
        'preparation_time'=>$r->preparation_time,
    );
    $data=Food_product::create($products);

    if($data){
        $notification = array(
         'message' => 'Data insert Sucsessfully',
         'alert-type' => 'success'
         );
         return Redirect::to('/add_product')->with($notification);

        }  
    }
    public function view_product(){
        $products= Food_product::where('advisor_id',Auth::user()['id'])->get();
        return view('food.view_product',compact('products'));

    }
    public function edit_product($id){
        $products= Food_product::where('id',$id)->get();
        $products = $products[0];
        return view('food.edit_product',compact('products'));

    }

    public function update_product(Request $r){
        $img = explode(',',$r->images);
        $products=array(
            'advisor_id'=>Auth::user()['id'],
            'staff_id'=>$r->staff_id,
            'restaurant_id'=>$r->restaurant_id,
            'product_name'=>$r->product_name,
            'type'=>$r->type,
            'category'=>$r->category,
            'description'=>$r->description,
            'images'=>$r->images,
            'image_gallery'=>json_encode($img,JSON_FORCE_OBJECT),
            'price'=>$r->price,
            'discount'=>$r->discount,
            'preparation_time'=>$r->preparation_time,
        );
        $data=Food_product::where('id',$r->id)->update($products);
    
        if($data){
            $notification = array(
             'message' => 'Data Update Sucsessfully',
             'alert-type' => 'success'
             );
             return Redirect::to('/view_product')->with($notification);
            }  
        }
        public function delete_product($id){
            $products= Food_product::where('id',$id)->delete();
            if($products){
                $notification = array(
                 'message' => 'Data Delete Sucsessfully',
                 'alert-type' => 'danger'
                 );
                 return Redirect::to('/view_product')->with($notification);
        
                }                  
        }
        public function get_categories(Request $r){
            $get = new Myzomato;
            $data = $get->get_category();     
            dd($data);die;       
        } 
        
        public function get_restaurants(Request $r){
            $user_ip = getenv('REMOTE_ADDR');
            $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
            $country = $geo["geoplugin_countryName"];
            $city = $geo["geoplugin_city"];   dd($geo);die;       
        } 
        
        public function get_city(){
            $get = new Myzomato;
            $data = $get->get_cities();     
            print_r($data);die;       
        
        }

        public function get_cuisines(){
            $get = new Myzomato;
            $data = $get->get_cuisines();     
            print_r($data);die;       
        
        }
        public function get_daily_menu(){
            $get = new Myzomato;
            $data = $get->get_daily_menus();     
            print_r($data);die;       
        
        }
       
        public function food_index(){
            $latitude=29.945749;
            $longitude=78.164138;
            $get = new Myzomato;    
            $popular=$get->popular_restaurant($latitude,$longitude);
            $data=json_decode($popular,'JSON_OBJECT_AS_ARRAY');
             $d=$data['nearby_restaurants'];
            // dd($d);die;       

             $popular_cuisine=$get->location_details();
             $popular_cuisine_data=json_decode($popular_cuisine,'JSON_OBJECT_AS_ARRAY');
             $best_rated_restaurant=$popular_cuisine_data['best_rated_restaurant'];
            // dd($best_rated_restaurant);die;       

            return view('food/food_template/index',['d'=>$d,
                                                            'best_restaurant'=>$best_rated_restaurant]);
        }       
        public function food_result(){
            return view('food/food_template/food_result');
        }
        
        public function location(Request $r){
            // echo($r->location);
            // die;
            $get = new Myzomato;
            $value=$get->location($r->location);
            $loc=json_decode($value,'JSON_OBJECT_AS_ARRAY');
            
           //print_r($loc);die;
            return ([
                'result' => $loc
            ]);
                       
        }

        public function popularity_res(){
            $latitude=29.945749;
            $longitude=78.164138;
            $get = new Myzomato;    
            $popular=$get->popular_restaurant($latitude,$longitude);
            $data=json_decode($popular,'JSON_OBJECT_AS_ARRAY');
            // print_r($data);die;

        }
        public function restaurant(Request $r){
            $get = new Myzomato;    
            $food=$get->establishments($r->city_id);
            $food_data=json_decode($food,'JSON_OBJECT_AS_ARRAY');
            $establishments = $food_data['establishments'];
            $establishment_data=[];
            foreach ($establishments as $value) {
                $establishment_data[]=$value['establishment'];
            }            
            $data = $get->search($r->location,$r->get_name,$r->entity_id,$r->entity_type,$r->cusine_id); 
            $res=json_decode($data,'JSON_OBJECT_AS_ARRAY');
            $restaurants = $res['restaurants'];
            $d=[];
            foreach ($restaurants as $value) {
                $d[]=$value['restaurant'];
            }    
              return view('food/food_template/restaurant',['data'=>$d,
                                                            'establishment_data'=>$establishment_data,
                                                            'cityid'=>$r->city_id,
                                                            'entity_type'=>$r->entity_type,
                                                            'city'=>$r->location]);
        }

        public function search_establishments(Request $r){
            $get = new Myzomato; 
            $data = $get->search($r->city,$r->get_name,$r->cityid,$r->entity_type,$r->cusine_data); 
            $res=json_decode($data,'JSON_OBJECT_AS_ARRAY');
            $restaurants = $res['restaurants'];
            return([
                'result' => $restaurants,
            ]);   
        }   

        public function view_restaurant(Request $r){
            $get = new Myzomato;
            $data = $get->get_cuisines();  
            $get_cuisine=json_decode($data,'JSON_OBJECT_AS_ARRAY'); 
            $restaurant_cuisine = $get_cuisine['cuisines'];
            $d=[];
            foreach ($restaurant_cuisine as $value) {
                $d[]=$value['cuisine'];
            }  
          //     print_r($d);die;       
            $data = $get->get_restaurant($r->id); 
            $res=json_decode($data,'JSON_OBJECT_AS_ARRAY'); 

              return view('food/food_template/view_restaurant',['value'=>$res,'data'=>$d]);   
        }
        
        public function checkout(){
            return view('food/food_template/checkout');
        }        
        public function loc(){
            $get = new Myzomato;
            $data = $get->current_location(); 
             dd($data);
            die;
        }
}



