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
            $get = new Myzomato;
            $data = $get->get_restaurant();     
            dd($data);die;       
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

        public function search(){
            $get = new Myzomato;
            $data = $get->search();     
            print_r($data);die;       
        
        }

        public function food_index(){
            
            return view('food/food_template/index');
        }       
        public function food_result(){
            return view('food/food_template/food_result');
        }
        public function restaurant(Request $r){
            $get = new Myzomato;
            $data = $get->search($r->get_name); 
            $res=json_decode($data,'JSON_OBJECT_AS_ARRAY');
            $restaurants = $res['restaurants'];
            $d=[];
            foreach ($restaurants as $value) {
                $d[]=$value['restaurant'];
            }
          return view('food/food_template/restaurant',['data'=>$d]);
        }

        public function view_restaurant(Request $r){
            $get = new Myzomato;
            $data = $get->get_restaurant($r->id); 
            $res=json_decode($data,'JSON_OBJECT_AS_ARRAY');   
             
     return view('food/food_template/view_restaurant',['value'=>$res]);
            //}
        }
        public function checkout(){
            return view('food/food_template/checkout');
        }
}

