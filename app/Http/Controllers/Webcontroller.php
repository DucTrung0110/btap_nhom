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

}
