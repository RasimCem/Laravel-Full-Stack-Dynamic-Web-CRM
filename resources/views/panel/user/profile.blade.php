@extends('panel.layout')
@section('title','Kullanici Ekleme')
 @section('content')
 <div class="container my-5">
    <h2>Profil Duzenleme</h2>
    <hr>
    <div class="row my-5 justify-content-center">
    <div class="col-md-8">
        <form action="{{route('user.profile.update')}}" method="POST" class="my-5">
            @csrf
         <div class="form">
            
             <div class="form-element">
                 <label class="panel-label" for="">Kullanici Adi</label>
             <input required name="name" value="{{$user->name}}" class="panel-input" type="text">
             </div>
             <div class="form-element">
                 <label class="panel-label" for="">Mail Adresi</label>
             <input required name="email" value="{{$user->email}}" class="panel-input" type="text">
             </div>
             <div class="form-element">
                 <label class="panel-label" for="">Sirket Ismi</label>
             <input  name="sirket" value="{{$user->company_name}}" class="panel-input" type="text">
             </div>
             <div class="form-element">
                <label class="panel-label" for="">Guncel Sifre</label>
            <input required  name="old_password" value="" class="panel-input" type="password">
            </div>
            <div>
            <input type="hidden" name="id" value="{{$user->id}}">
            </div>
            <div class="form-element">
               <label class="panel-label" for="">Yeni Sifre</label>
           <input  name="password" value="" class="panel-input" type="password">
           </div>
            <div class="form-element">
                <label class="panel-label" for="">Yeni Sifre Tekrar</label>
            <input  name="password2" value="" class="panel-input" type="password">
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
                 <input value="Duzenle" type="submit" class="btn">
             </div>
         </div>
         </form>
    </div>
    </div>
</div>
 @endsection			
		