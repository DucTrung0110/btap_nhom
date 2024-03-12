<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function product()
    {
        return view('admin.web.product');
    }
}
