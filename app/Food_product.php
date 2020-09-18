<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food_product extends Model
{
    protected $primaryKey ='id';
    Protected $table = 'food_products';
    protected $fillable = ['advisor_id','staff_id','restaurant_id','product_name','category','description','type','images','image_gallery','price','discount','preparation_time'];
}
