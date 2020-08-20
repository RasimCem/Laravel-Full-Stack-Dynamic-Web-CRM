<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Content;
use App\Setting;
use App\Product;
class IndexController extends Controller
{
    public function index(){
        $content=Content::all();
        return view('front.index')->with('content',$content);
    }
   public function about(){
       $content=Content::where('content_name','hakkimizda')->first();
       return view('front.about')->with('content',$content);
   }
   public function contact(){
    $cellphone=Setting::where('settings_name','cellphone')->where('settings_status','1')->first();
    $phone=Setting::where('settings_name','phone')->where('settings_status','1')->first();
    $address=Setting::where('settings_name','adress')->where('settings_status','1')->first();
    return view('front.contact')->with('cellphone',$cellphone)->with('phone',$phone)->with('address',$address);
    }

    public function product(){
        $data['products']=Product::all();
        return view('front.product',compact('data'));
    }
    public function productDetail($id){
        $productDetails=Product::where('id',$id)->first();
        return view('front.product-edit')->with('productDetail',$productDetails);
    }
}
