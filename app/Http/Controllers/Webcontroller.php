<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;
use Illuminate\Http\Request;
class Webcontroller extends Controller
{
    public function home()
    {
      return view('welcome');
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
        return view('web.dashboard');
    }
    public function shoppingcart()
    {
        return view('web.shoppingcart');
    }
    public function checkout()
    {
        return view('web.checkout');
    }
}
