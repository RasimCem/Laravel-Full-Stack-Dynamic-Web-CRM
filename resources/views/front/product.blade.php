@extends('front.layout')
@section('content')
<h1 class="title">Ürünlerimiz</h1>
<div class="container">
    <div class="row">
        @foreach ($data['products'] as $product)
        <div class="col-sm-6 col-lg-4">
            <div class="card">
            <a href="{{route('product.detail',$product->id)}}"><img height=250  src="/images/products/{{$product->product_image}}" class="card-img-top" ></a>
                 <div class="card-body">
                 <h5 class="card-title">{{$product->product_name}}</h5>
                 <p class="card-text">{{Str::substr($product->product_content, 0, 250)}}...</p>
                   <p class="price">
                    {{$product->product_price}} TL
                   </p>
                 </div>
            </div>
        </div>
        @endforeach
      
    </div>
</div>
@endsection