@extends('panel.layout')
@section('title','Kullanici Ekleme')
 @section('content')
 <div class="container my-5">
 <h2> Urunlerim</h2>
    <hr>
		<div class="row">
			@foreach ($products as $product)
				<div class="col-sm-6 col-lg-4">
					<div class="card">
					<img height="300" src="{{'/images/products/'.$product->getProduct[0]->product_image}}" class="card-img-top" >
						<div class="card-body">
						<h5 class="card-title">{{$product->getProduct[0]->product_name}}</h5>
						<p class="card-text"></p>
						<p class="price">
							{{$product->getProduct[0]->product_price}} TL
						</p>
						</div>
					</div>
				</div>
			@endforeach	  	  
</div>
</div>
 @endsection			
		