@extends('panel.layout')
@section('title','Kullanici Ekleme')
 @section('content')
 <div class="container my-5">
    <h2>Kullaniciya Yeni Urun Ekle</h2>
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-8">
        <form action="{{route('myproduct.store')}}" method="POST" class="my-5" enctype="multipart/form-data">
        @csrf
         <div class="form">  
             <div class="form-element">
                 <label class="panel-label" for="">Urunler</label>
                 <select name="product" class="panel-input" type="text">
                     @foreach ($products as $product)
                        <option value="{{$product->id}}">{{$product->product_name}}</option>
                     @endforeach
                 </select>
             </div>
             <input type="hidden" name="user_id" value="{{$id}}">
             <div style="text-align: right;margin-top: 10px">
                 <input value="Ekle" type="submit" class="btn">
             </div>
         </div>
         </form>
    </div>
    </div>
</div>
 @endsection			
		