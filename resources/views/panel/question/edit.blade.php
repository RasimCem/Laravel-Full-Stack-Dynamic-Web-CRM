@extends('panel.layout')
@section('title','Kullanici Ekleme')
 @section('content')
 <div class="container my-5">
    <h2>SSS Düzenleme</h2>
    <hr>
    <div class="row my-5 justify-content-center">
    <div class="col-md-8">
        <form action="{{route('question.update',$question->id)}}" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form">
                <div class="form-element">
                    <label class="panel-label" for="">Soru</label>
                <input value="{{$question->question}}" name="question" class="panel-input" type="text">
                </div>
               <div class="form-element">
                   <label class="panel-label form-text" for="icerik">Cevap</label>
               <textarea id="icerik" rows="8" class="panel-input" name="answer" type="text">{{$question->answer}}</textarea>
               </div>
              
                <!--
                <div class="form-element">
                    <label class="panel-label" for="">Urunler</label>
                    <select class="panel-input" type="text">
                        <option value="">Lorem ipsum.</option>
                        <option value="">Lorem ipsum dolor.</option>
                    </select>
                </div>
               -->
                <div style="text-align: right;margin-top: 10px">
                    <input value="Güncelle" type="submit" class="btn">
                </div>
            </div>
         </form>
    </div>
    </div>
</div>
 @endsection			
		