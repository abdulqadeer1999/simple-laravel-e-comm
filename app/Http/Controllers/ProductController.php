<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session; 

class ProductController extends Controller
{
    function index() {

        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id) {
        $data=Product::find($id);
        return view('detail',['product'=>$data]);

    }

    function addToCart(Request $request) {
       if($request->session()->has('user')){
        
        $cart = new Cart;
        $cart->user_id=$request->session()->get('user')['id'];
        $cart->product_id=$request->product_id;
        $cart->save();

        return redirect('cartlist');

       }else {
           return redirect('login');
       }
    }

    //function to count items

    static function cartItem() {

        $user_Id = Session::get('user')['id'];
        return Cart::where('user_id',$user_Id)->count();

    }


    function cartlist() {

        $user_Id = Session::get('user')['id'];

       $products = DB::table('carts')
       ->join('products','carts.product_id','=','products.id')
       ->where('carts.user_id',$user_Id)
       ->select('products.*','carts.id as cart_id')->get();

       return view('cartlist',['products'=>$products]);
    }

    function removeCart($id){

        Cart::destroy($id);
        return redirect('cartlist');
    }


    function orderNow() {
        $user_Id = Session::get('user')['id'];

       $total =  $products = DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$user_Id)
        ->sum('products.price');
 
        return view('ordernow',['total'=>$total]);
    }

    // 

    function orderPlace(Request $request){

        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart){

            $order = new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$request->payment;
            $order->payment_method="pending";
            $order->address=$request->address;
            $order->save();
            Cart::where('user_id',$userId)->delete(); // after ordering data will be deleted from cart page

            return redirect('/');

        }

    }

    function myOrders() {
        $user_Id = Session::get('user')['id'];

        $orders =  DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$user_Id)
         ->get();
  
         return view('myorders',['orders'=>$orders]);
    }
}
