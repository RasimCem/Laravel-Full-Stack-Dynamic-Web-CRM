@extends('panel.layout')
@section('title','Kullanici Ekleme')
 @section('content')
 <div class="container my-5">
 <h2> {{$user->name}} Kullanicisinin Urunleri</h2>
    <hr>
    <div style="text-align: right">
        <a  href="{{route('myproduct.edit',$user->id)}}"><button class="btn ">Kullaniciya Yeni Urun Ekle</button></a>
    </div>
    <div class="row my-2 justify-content-center">
    <div class="col-md-12">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Urun Id</th>
                <th scope="col">Urun Ismi</th>
                <th scope="col">Urun Fiyati</th>
                <th scope="col">Sil</th>  
              </tr>
            </thead>
            <tbody>
                @foreach ($myproduct as $product)
                <tr>
                    <th scope="row">{{$product->getProduct[0]->id}}</th>
                    <td>{{$product->getProduct[0]->product_name}}</td>
                    <td>{{$product->getProduct[0]->product_price}} TL</td>
                <td><a href="{{route('myproduct.delete',$product->id)}}"><i  class="fas fa-trash-alt"></i></a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
    
        </div>
    </div>
</div>
 @endsection			
		