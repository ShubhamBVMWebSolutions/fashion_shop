<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
use DB;

class Order extends Model
{
    use HasFactory;

    public function getDataBYUserId($id)
    {
        $order_data=Order::join('payments', 'orders.payment_id','=','payments.payment_id')
                    ->where('orders.user_id',$id)
                    ->get();
                   
        $product_ids = $order_data->pluck('product_id')->flatMap(function ($item) {
            return json_decode($item, true);
            });         
            $products = product::whereIn('id', $product_ids)->get();
           return [
                    'order_data' => $order_data,
                    'products' => $products,
            ];
        // return $order_data;
        // ->join('products','payments.product_id','=','products.id')
    }
}
