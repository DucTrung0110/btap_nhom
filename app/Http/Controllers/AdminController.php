<?php

namespace App\Http\Controllers;

use App\Models\Brand;
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
    public function productDetail()
    {
        return view('admin.web.productDetail');
    }
    public function productEdit()
    {
        return view('admin.web.productEdit');
    }
    public function productAdd()
    {
        return view('admin.web.productAdd');
    }
    public function category()
    {
        $brand=Brand::get();
        return view('admin.web.category',[
            'brand'=>$brand
        ]);
    }
    public function order()
    {
        return view('admin.web.order');
    }
    public function orderDetail()
    {
        return view('admin.web.orderDetail');
    }
    public function categoryDetail()
    {
        return view('admin.web.categoryDetail');
    }
    public function categoryAdd()
    {
        return view('admin.web.categoryAdd');
    }
    public function categoryEdit($id)
    {
        $brand=Brand::where("id",$id)->first();
        return view('admin.web.categoryEdit',[
            "brand"=>$brand
        ]);
    }
    public function categorySave(Request $request)
    {
        $request->validate([
            'name'=>'required',
                'images'=>'required',
                'description'=>'required',
            ],[
               //report
            ]
        );
        $thumbnail = null;
        if($request->hasFile("images")){
            $file = $request->file("images");
            $fileName = time().$file->getClientOriginalName();
            $path = public_path("images/brands");
            $file->move($path,$fileName);
            $thumbnail = "/images/brands/".$fileName;
        }
        $brands= Brand::create([
            'name'=>$request->get('name'),
            'images'=>$thumbnail,
            'description'=>$request->get('description')
        ]);
        return redirect()->to('/admin/category');
    }
    public function categoryDelete(Brand $brand)
    {
        $brand->delete();
        return redirect()->to('/admin/category');
    }
    public function categoryUpdated(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'images'=>'required',
            'description'=>'required',
        ],[
                //report
            ]
        );
        $thumbnail = null;
        if($request->hasFile("images")){
            $file = $request->file("images");
            $fileName = time().$file->getClientOriginalName();
            $path = public_path("images/brands");
            $file->move($path,$fileName);
            $thumbnail = "/images/brands/".$fileName;
        }
        $brands= Brand::where("id",$id)->update([
            'name'=>$request->get('name'),
            'images'=>$thumbnail,
            'description'=>$request->get('description')
        ]);
        return redirect()->to('/admin/category');
    }
}
