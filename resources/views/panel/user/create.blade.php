@extends('panel.layout')
@section('title','Kullanici Ekleme')
 @section('content')
 <div class="container my-5">
    <h2>Kullanıcı Ekle</h2>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-8">
    <form action="{{route('user.create')}}" method="POST" class="mt-5">
        @csrf
     <div class="form">
         <div class="form-element">
             <label class="panel-label" for="">Kullanıcı Adı</label>
             <input name="name" class="panel-input" type="text">
         </div>
         <div class="form-element">
             <label class="panel-label" for="">Mail Adresi</label>
             <input name="email" class="panel-input" type="text">
         </div>
         <div class="form-element">
             <label class="panel-label" for="">Şirket İsmi</label>
             <input name="sirket" class="panel-input" type="text">
         </div>
         <div class="form-element">
             <label class="panel-label" for="">Şifre</label>
             <input name="password" class="panel-input" type="password">
         </div>
         <div class="form-element">
             <label class="panel-label" for="">Şifre Tekrar</label>
             <input name="password2" class="panel-input" type="password">
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
		