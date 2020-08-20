<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Support;
use App\Question;
class SupportController extends Controller
{
    public function index(){
        $data['questions']=Question::all();
        return view('panel.support.create',compact('data'));
    }
    public function store(Request $request){
        //dd($request->all());
        $request->validate(
            [
                'name'=>'required|min:3',
                'title'=>'required|min:3',
                'message'=>'required|min:20'
            ]
        );
        $id=Auth::id();
        $support=Support::insert(
            [
                'name'=>$request->name,
                'title'=>$request->title,
                'message'=>$request->message,
                'user_id'=>$id
            ]
        );
        if($support){
            return redirect()->route('support.index')->with('success','Mesajiniz Basarili Bir Sekilde Gonderildi!');
        }
            return back()->with('error','Gonderme Islemi Basarisiz!');
    }
}
