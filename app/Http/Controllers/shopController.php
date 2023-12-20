<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Wishlist;
use App\Models\Response;
use App\Models\Inquiry;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use Carbon\Carbon;
class shopController extends Controller
{

    public function index()
    {
    $product= new product;
    $cart = new Cart;
    $allSessionData = Session::all();
        if (isset($allSessionData['user_id'])) {
            $user_id = $allSessionData['user_id'];
            $products=$cart->getAllProductIdsBYUser_id($user_id);
            return view('index',compact('products'));

        }
        return view('index');
    }

    public function shop()
    {
        $product= new product;
        $cart = new Cart;
        $product_data=$product->all();
        $allSessionData = Session::all();
        $response= Response::all();

        if (isset($allSessionData['user_id'])) {
            $user_id = $allSessionData['user_id'];
            $products=$cart->getAllProductIdsBYUser_id($user_id);
            return view('shop',compact('product_data','products','response'));
        }
        return view('shop',compact('product_data','response'));
    }
    public function filter()
    {
        return view('filter');
    }

    public function price_filter()
    {
        return view('price_filter');
    }

    public function tag_filter()
    {
        return view ('tag_filter');
    }

    public function brand_filter()
    {
        return view('brand_filter');
    }

    public function cart()
    {
        $cart = new Cart;
        $product= new product;
        $allSessionData = Session::all();
        $user_id = $allSessionData['user_id'];
        $products=$cart->getAllProductIdsBYUser_id($user_id);
        return view('cart',compact('products'));
    }
    public function add_cart(Request $request)
    {
        $value = Session::get('username');
        if(!isset($value)){
            //Session::flash('alert', 'Login Or Register First');
            return redirect()->route('login');
        }else{
            $allSessionData = Session::all();
            $user_id = $allSessionData['user_id'];
            $product_id=$request->productId;
            $cart = new Cart;
            $cart->user_id=$user_id;
            $cart->product_id= $product_id;
            $cart->save();
            return response()->json('Product Is Being Added To The Cart');
        }
    }

    public function remove_product(Request $request,$id)
    {
     $allSessionData = Session::all();
     $user_id = $allSessionData['user_id'];
     $cartItem= Cart::where('product_id', $id)->where('user_id',$user_id)->first();
      if ($cartItem) {
        $cartItem->delete();
        return redirect()->route('cart')->with('success','Product is removed from cart.');
        }
        return redirect()->route('cart')->with('error', 'Product not found in the cart.');
    }

    public function add_wishlist(Request $request)
    {
        $value = Session::get('username');
        if(!isset($value)){
            Session::flash('alert', 'Login Or Register First');
             return redirect()->route('login');
        }else{
            $wishlist = new Wishlist;
            $allSessionData = Session::all();
            $user_id = $allSessionData['user_id'];
            $productId = $request->input('productId');
            $wishlist->user_id=$user_id;
            $wishlist->product_id=$productId;
            $wishlist->save();
             return response()->json(['success' => true]);
        }
    }


    public function wishlist()
    {
        $wishlist = new Wishlist;
        $allSessionData = Session::all();
        $user_id = $allSessionData['user_id'];
        $products=$wishlist->getAllProductDataBYUserId($user_id);
        return view('wishlist',compact('products'));
    }

    public function inquiry(Request $request)
    {
        $data=$request['data'];
        $date=Carbon::now();
        $allSessionData = Session::all();
        $user_id = $allSessionData['user_id'];
        $inquiry= new Inquiry;
        $inquiry->user_id=$user_id;
        if ($data['response_type']==1) {
        $inquiry->contact_number=$data['phone_number'];
        }
        $inquiry->message=$data['message'];
        $inquiry->date=$date;
        $inquiry->preferred_response_id=$data['response_type'];
        $inquiry->save();
        return response()->json('Inquiery Sent Successfully');
    }

//---------------------------------Admin_Routes------------------------------------------------


    public function adminDashboard(Request $request)
    {
        $allSessionData = Session::all();
        if (isset($allSessionData['role_id'])) {
            if ($allSessionData['role_id']==1) {
                 $inquiry= new Inquiry;
                 $users = new User;
                 $user_data = $users->getUserData();
                 $inquiry_details =$inquiry->getInquaryDetails();
                 return view('admin.dashboard',compact('user_data','inquiry_details'));
            }else{
                return redirect()->route('shop');
            }
        }else{
            return redirect()->back()->with('Error, Please Login Or Register First');
        }
    }
    public function all_products()
    {
         $product= new product;
         $product_data=$product->all();
         return view('admin.all_product',compact('product_data'));
    }

    public function add_products()
    {
     return view('admin.add_product');
    }

    public function addNewProduct(Request $request)
    {
            $request->validate([
                'name' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'price' => 'required',
                'data_tags' => 'nullable|string',
            ]);
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('malefashion/img/product/'), $imageName);

            $product = Product::create([
            'name' => $request->name,
            'image' => 'malefashion/img/product/' . $imageName,
            'price' => $request->price,
            'data_tags' => $request->data_tags,
        ]);
            return redirect()->back()->with('success','Product added Successfully !');
    }

    public function user_cart(Request $request,$id)
    {
        $cart = new Cart;
        $products=$cart->getAllProductIdsBYUser_id($id);
        return view('admin.cart',compact('products'));
    }

    public function edit_products(Request $request,$id)
    {
        $product= product::where('id',$id)->first();
        return view('admin.edit_product',compact('product'));
    }

    public function update_product_status(Request $request ,$id)
    {
        $status = $request->status;
        $product =product::find($id);
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }
        if ($status==1) {
            $product->status = 0 ;
        } else {
          $product->status = 1 ;
        }
        $product->save();

        return response()->json(['message' => 'Product status updated successfully']);

    }

    public function order(Request $request,$id)
    {
        $combinedData = [];
        $order= new Order;
        $data =$order->getDataBYUserId($id);
        $order_data=$data['order_data'];
        $products = $data['products'];
        foreach ($order_data as $order) {
            $productIds = json_decode($order->product_id, true);
            $filteredProducts = $products->whereIn('id', $productIds)->pluck('image')->toArray();
            $combinedData[] = [
                    'order_data' => $order,
                    'product_images' => $filteredProducts,
            ];
        }
        return view('admin.order',compact('combinedData'));
    }

    public function user_wishlist(Request $request,$id)
    {
        $wishlist = new Wishlist;
        $products=$wishlist->getAllProductDataBYUserId($id);
        return view('admin.wishlist',compact('products'));
    }

    public function update_response_status(Request $request)
    {
        $inquiryId = $request->input('inquiryId');
        $isResponded = $request->input('isResponded');
        try{
        $inquiry = Inquiry::find($inquiryId);
        $inquiry->response_status = $isResponded;
        $inquiry->save();

        return response()->json(['success' => true]);
        }catch (\Exception $e){
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }
}
