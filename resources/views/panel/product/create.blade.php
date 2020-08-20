@extends('panel.layout')
@section('title','Kullanici Ekleme')
 @section('content')
 <div class="container my-5">
    <h2>Yeni Ürün Ekle</h2>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-8">
    <form action="{{route('product.store')}}" method="POST" class="mt-5" enctype="multipart/form-data">
        @csrf
     <div class="form">
        <div class="form-element">
            <label class="panel-label" for="">Ürün Resmi</label>
            <input name="image" class="panel-input" type="file">
        </div>
         <div class="form-element">
             <label class="panel-label" for="">Ürün İsmi</label>
             <input name="name" class="panel-input" type="text">
         </div>
         <div class="form-element">
            <label class="panel-label" for="">Ürün Fiyatı</label>
            <input name="price" class="panel-input" type="number">
        </div>
        <div class="form-element">
            <label class="panel-label form-text" for="icerik">İçerik</label>
            <textarea id="icerik" rows="8" class="panel-input" name="content" type="text"> </textarea>
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
		