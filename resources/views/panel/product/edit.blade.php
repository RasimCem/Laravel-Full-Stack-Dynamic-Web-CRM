@extends('panel.layout')
@section('title','Kullanici Ekleme')
 @section('content')
 <div class="container my-5">
    <h2>Ürün Düzenleme</h2>
    <hr>
    <div class="row my-5 justify-content-center">
    <div class="col-md-8">
        <form action="{{route('product.update',$product->id)}}" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf
            @method('put')
         <div class="form">
            <div class="form-element">
                <label class="panel-label" for="">Yeni Resim Ekle</label>
                <input name="image" class="panel-input" type="file">
                
            </div>
             <div class="form-element">
                 <label class="panel-label" for="">Ürün İsmi</label>
                 <input name="name"  value="{{$product->product_name}}" class="panel-input" type="text">
             </div>
             <div class="form-element">
                <label class="panel-label" for="">Ürün Fiyatı</label>
                <input name="price" value="{{$product->product_price}}" class="panel-input" type="number">
            </div>
            <div class="form-element">
                <label class="panel-label form-text" for="icerik">İçerik</label>
                <textarea id="icerik" rows="8" class="panel-input" name="content" type="text">
                   {{$product->product_content}} 
                </textarea>
            </div>
            <div class="form-element my-5">
                <label class="panel-label" for="">Güncel Ürün Resmi</label>
                <img width="100%" src="/images/products/{{$product->product_image}}" alt="">
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
                 <input value="Düzenle" type="submit" class="btn">
             </div>
         </div>
         </form>
    </div>
    </div>
</div>
 @endsection			
		