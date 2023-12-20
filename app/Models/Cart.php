<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
use DB;


class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','product_id'];

    public function getAllProductIdsBYUser_id($user_id)
    {
         $products = Cart::join('products',  'carts.product_id', '=', 'products.id')->where('carts.user_id',$user_id)->get('products.*');
        return $products;

    }
}
