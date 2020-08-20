<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['product']=Product::all();
        return view('panel.product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $request->validate(
            [
                'name'=>'required|max:50|min:3',
                'price'=>'required',
                'content'=>'required|min:50',
                'image'=>'image|mimes:jpeg,jpg,png|required|max:2048'
            ]
        );
        $slug=Str::slug($request->name);
        $file_name=uniqid().".".$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/products'),$file_name);
        $product=Product::insert(
            [
                "product_name"=>$request->name,
                "product_price"=>$request->price,
                "product_content"=>$request->content,
                "product_image"=>$file_name,
                "slug"=>$slug
            ]
        );
        if($product){
            return redirect()->route('product.index')->with('Success','Urun Basariyla Eklendi!');
        }
            return back()->with('error','Urun Ekleme Basarisiz!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::where('id',$id)->first();
        return view('panel.product.edit')->with('product',$product);
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
        $request->validate(
            [
                'image'=>'image|mimes:jpeg,jpg,png|max:2048',
                'name'=>'required|min:3|max:50',
                'price'=>'required',
                'content'=>'required|min:50'
            ]
        );
        if($request->hasFile('image')){
            $file_name=uniqid().".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/products'),$file_name);
            $product=Product::where('id',$id)->update(
                [
                    'product_name'=>$request->name,
                    'product_price'=>$request->price,
                    'product_content'=>$request->content,
                    'product_image'=>$file_name
                ]
            );
        }else{
            $product=Product::where('id',$id)->update(
                [
                    'product_name'=>$request->name,
                    'product_price'=>$request->price,
                    'product_content'=>$request->content
                ]
            );
        }
        if($product){
            return redirect()->route('product.index')->with('success','Urun Basariyla Guncellendi!');
        }
            return back()->with('error','Guncelleme Islemi Basarisiz!');
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
        $product=Product::find($id);
        $product->delete();
        return back()->with('success','Urun Basariyla Silindi');
    }
}
