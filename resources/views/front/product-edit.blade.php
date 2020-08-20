@extends('front.layout')
@section('content')
<div class="container" style="text-align: center;">
    <h1 class="title">{{$productDetail->product_name}}</h1>
        <img width="350" src="/images/products/{{$productDetail->product_image}}" class="img-fluid my-5" alt="">
        <div>
        Fiyat: <span style="color: red;font-size:1.4rem">{{$productDetail->product_price}} TL</span>
        </div>
    <p class="about-content">
        {{$productDetail->product_content}}
    </p>
</div>
<style>
    img{
        border: 1px solid black;
        box-shadow: 2px 5px 5px gray;
    }
</style>
@endsection