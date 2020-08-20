@extends('panel.layout')
@section('title','Kullanici Ekleme')
 @section('content')
 <div class="container my-5">
    <h2>Yeni Soru Ekle</h2>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-8">
    <form action="{{route('question.store')}}" method="POST" class="mt-5" enctype="multipart/form-data">
        @csrf
     <div class="form">
         <div class="form-element">
             <label class="panel-label" for="">Soru</label>
             <input name="question" class="panel-input" type="text">
         </div>
        <div class="form-element">
            <label class="panel-label form-text" for="icerik">Cevap</label>
            <textarea id="icerik" rows="8" class="panel-input" name="answer" type="text"> </textarea>
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
             <input value="Ekle" type="submit" class="btn">
         </div>
     </div>
     </form>
    </div>
    </div>
</div>
 @endsection			
		