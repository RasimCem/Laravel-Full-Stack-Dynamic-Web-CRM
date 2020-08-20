@extends('panel.layout')
@section('title','Kullanici Ekleme')
 @section('content')
 <div class="container my-5">
    <h2>Ürünler Listesi</h2>
    <hr>
    <div style="text-align: right">
      <a href="{{route('product.create')}}"><button class="btn ">Ürün Ekle</button></a>
  </div>
    <div class="row my-5 justify-content-center">
    <div class="col-md-12">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Resim</th>
                <th scope="col">Ürün İsmi</th>
                <th scope="col">İçerik</th>
                <th scope="col">Fiyat</th>
                <th scope="col">Düzenle</th>
                <th>Sil</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data['product'] as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>
                      <img width="100" src="/images/products/{{$product->product_image}}" alt="">
                     </td>
                    <td>{{$product->product_name}}</td>
                    <td>{{Str::substr($product->product_content, 0, 50)."..."}}</td>
                    <td>{{$product->product_price." TL"}}</td>
                    <td style="text-align: center"><a href="{{route('product.edit',$product->id)}}"><i class="fas fa-edit"></i></a></td>
                    <td><a href="{{route('product.delete',$product->id)}}"><i  class="fas fa-trash-alt"></i></a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    </div>
</div>
 @endsection			
		