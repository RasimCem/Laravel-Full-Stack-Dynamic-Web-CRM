<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['settings']=Setting::all();
        return view('panel.setting.index',compact('data'));
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
        $setting=Setting::find($id);
        return view('panel.setting.edit')->with('setting',$setting);
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
        $content=$request->content;
        if($request->hasFile('content')){
           $request->validate(
               [
                'content'=>'image|max:2048|mimes:jpeg,jpg,png'
               ]
            );
            $content=uniqid().".".$request->content->getClientOriginalExtension();
            $request->content->move(public_path('images/settings'),$content);
            $setting=Setting::where('id',$id)->update(
                [
                    'settings_content'=>$content,
                    'settings_status'=>$request->status
                ]
            );
        }else{
            $setting=Setting::where('id',$id)->update(
                [
                    'settings_status'=>$request->status,
                    'settings_content'=>$content
                ]
            );
        }
      
        if($setting){
            return redirect()->route('setting.index')->with('success','Ayar Guncelleme Basarili');
        }
            return back()->with('error','Ayar Guncelleme Basarisiz');

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
