<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Order;
use App\Models\Product;
use App\Models\UserLogin;
use Illuminate\Http\Request;
class Webcontroller extends Controller
{
    public function home()
    {
        $product=Product::get();
        return view('welcome',[
            'product'=>$product
        ]);
    }
    public function la()
    {
     return view('login');
    }
    public function contact()
    {
        return view('web.contact');
    }
    public function dashboard()
    {
        $dashboard= Order::where("user_id",auth()->user()->id)->get();
        return view('web.dashboard',[
            "dashboard"=>$dashboard
        ]);    }
    public function shoppingcart()
    {
        return view('web.shoppingcart');
    }
    public function checkout()
    {
        return view('web.checkout');
    }
    public function invoice($id)
    {
        $order=Order::where("id",$id)->first();
        return view('web.invoice',[
            'order'=>$order,
        ]);
    }
}
