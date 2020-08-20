<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Myproduct;
use Illuminate\Http\Request;
use App\User;
use App\Product;
use Illuminate\Support\Facades\Auth;
class MyproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id=$request->user_id;
        $myproducts=Myproduct::insert(
            [
                "user_id"=>$user_id,
                "product_id"=>$request->product
            ]
        );
        if($myproducts){
            return redirect()->route('myproduct.show',$user_id)->with('success','Ekleme Islemi Basarili');
        }
            return back()->with('error','Ekleme Islemi Basarisiz!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $myproduct=Myproduct::with('getProduct')->where('user_id',$id)->get();
        //return $myproduct;
        //print_r( $myproduct[2]->getProduct);
        $user=User::where('id',$id)->first();
        return view('panel.assign.index',compact('myproduct'))->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products=Product::all();
        return view('panel.assign.create')->with('products',$products)->with('id',$id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id){
        $product=MyProduct::find($id);
        $product->delete();
        return back()->with('success','Urun Basariyla Silindi');
    }

    public function myproduct(){
        
        $id=Auth::id();
        $products=Myproduct::with('getProduct')->where('user_id',$id)->get();
        if($products){
            return view('panel.myproduct.index')->with('products',$products);
        }
            return back()->with('error','Suanda Urunleri Goruntuleyemiyoruz!');
    }
}
