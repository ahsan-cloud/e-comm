<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index(){
        $data = Product::all();
        return view('product',['products' => $data]);
    }
    function detail($id){
        $data = Product::find($id);
        return view('detail',['product' => $data]);
    }
    function search(Request $req){
       $data = Product::where('name','like','%'. $req->input('query').'%')->get();
       return view('search',['product' => $data]);
    }
    function addCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
    static function cartItem(){
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();
    }
    function dummy(){
        return view('dummy');
    }
    function cartList(){
        $user_id = Session::get('user')['id'];
        $cartData = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$user_id)
        ->get();
        return view('cartlist',['product' => $cartData]);
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
}
