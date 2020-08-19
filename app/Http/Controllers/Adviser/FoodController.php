<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\User;
use App\User_meta;
use App\Food_product;

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
    
}

