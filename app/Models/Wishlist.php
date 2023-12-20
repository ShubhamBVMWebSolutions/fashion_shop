<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

     public function getAllProductDataBYUserId($user_id)
    {
         $products = Wishlist::join('products','wishlists.product_id', '=', 'products.id')->where('wishlists.user_id',$user_id)->get('products.*');
        return $products;

    }
}
