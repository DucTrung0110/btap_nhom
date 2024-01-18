<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;
use Illuminate\Http\Request;
class webcontroller extends Controller
{
    public function home()
    {
      return view('welcome');
    }
    public function la()
    {
     return view('login');
    }
    public function li(Request $request)
    {
     $email = $request->get('email');
     $password =$request->get('password');
     UserLogin::create([
         'email'=>$email,
         'password'=>$password,
     ]);
     return 'A đù ngon';
    }
}
