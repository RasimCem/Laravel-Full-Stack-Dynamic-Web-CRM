<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Content;
class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['contents']=Content::all();
        return view('panel.content.index',compact('data'));
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
        //
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
        
        $content=Content::find($id);
        return view('panel.content.edit')->with('content',$content);
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
                'title'=>'required|min:3|max:50',
                'content'=>'required|min:30'
            ]
        );
        if($request->hasFile('image')){
            $file_name=uniqid().".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/contents'),$file_name);
            $content=Content::where('id',$id)->update(
                [
                    'content_title'=>$request->title,
                    'content_text'=>$request->content,
                    'content_image'=>$file_name
                ]
            );
        }else{
            $content=Content::where('id',$id)->update(
                [
                    'content_title'=>$request->title,
                    'content_text'=>$request->content
                ]
            );
        }
     
        if($content){
            return redirect()->route('content.index')->with('success','Icerik Guncelleme Basarili!');
        }
            return back()->with('error','Icerik Guncelleme Basarisiz');
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
}
