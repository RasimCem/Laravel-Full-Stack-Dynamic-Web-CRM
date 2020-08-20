<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Question;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['question']=Question::all();
        return view('panel.question.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.question.create');
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
                'question'=>'required|max:100',
                'answer'=>'required|max:750'
            ]
        );
        $question=Question::insert(
            [
                'question'=>$request->question,
                'answer'=>$request->answer
            ]
        );
        if($question){
            return redirect()->route('question.index')->with('success','Soru Basariyla Eklendi');
        }
            return back()->with('error','Soru Ekleme Basarisiz!');
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
        $question=Question::where('id',$id)->first();
        return view('panel.question.edit')->with('question',$question);
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
                'question'=>'required|max:100',
                'answer'=>'required|max:750'
            ]
        );
        $question=Question::where('id',$id)->update(
            [
                'question'=>$request->question,
                'answer'=>$request->answer
            ]
            );
        if($question){
            return redirect()->route('question.index')->with('success','Soru Basariyla Guncellendi');
        }
        return back()->with('error','Soru Guncelleme Basarisiz');
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
        $question=Question::find($id);
        $question->delete();
        return back()->with('success','Urun Basariyla Silindi');
    }
}
