<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
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
        $product=Product::get();
        return view('admin.web.product',[
            'product'=>$product
        ]);
    }
    public function productDetail($id)
    {
        $product=Product::where("id",$id)->first();
        return view('admin.web.productDetail',[
            'product'=>$product
        ]);
    }
    public function productEdit()
    {
        return view('admin.web.productEdit');
    }
    public function productAdd()
    {
        $brand= Brand::get();
        return view('admin.web.productAdd',[
            "brand"=>$brand
        ]);
    }
    public function productSave(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'images'=>'required',
            'price'=>'required',
            'status'=>'required',
            'brand_id'=>'required'
        ],[]);
        $thumbnail = null;
        if($request->hasFile("images")){
            $file = $request->file("images");
            $fileName = time().$file->getClientOriginalName();
            $path = public_path("images/product");
            $file->move($path,$fileName);
            $thumbnail = "/images/product/".$fileName;
        }
        $product= Product::create([
            'name'=>$request->get('name'),
            'images'=>$thumbnail,
            'price'=>$request->get('price'),
            'status'=>$request->get('status'),
            'brand_id'=>$request->get('brand_id'),
            'description'=>$request->get('description')

        ]);
        return redirect()->to('/admin/product');
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
    public function categoryDetail($id)
    {
        $brand=Brand::where("id",$id)->first();
        return view('admin.web.categoryDetail',[
            'brand'=>$brand
        ]);
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
    public function productDelete(Product $product)
    {
        $product->delete();
        return redirect()->to('/admin/product');
    }
}
