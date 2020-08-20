@extends('front.layout')
@section('content')
<div class="container-big">
	<div class="container my-5">
			<div class="row ">
				<div class="col-md-6">
				<img src="/images/contents/{{$content[0]->content_image}}" class="container-img img-fluid" alt="">
				</div>
				<div class="col-md-6 text-container">
				<h2>{{$content[0]->content_title}}</h2>
					<p style="font-family: 'Open Sans', sans-serif;">
						{{Str::substr($content[0]->content_text, 0,300)}}
					</p>
					
				</div>
			</div>
	</div>
</div>
	<div class="container my-5">
			<div class="row ">
				<div class="col-md-6 text-container">
				<h2>{{$content[1]->content_title}}</h2>
					<p style="font-family: 'Open Sans', sans-serif;">
						{{Str::substr( $content[1]->content_text, 0, 250)}}
					</p>
					<label class="mybadge"> Çok Satan</label>
				</div>
				<div class="col-md-6">
					<img src="/images/contents/{{$content[1]->content_image}}" class="container-img img-fluid" alt="">
				</div>
			</div>
	</div>
	@if (isset($Logo))
	<div class="container my-5">
		<div class="row">
			<div class="col-12">
			<div style="text-align: center">
			<img src="/images/settings/{{$Logo}}" class="img-fluid logo-img" alt="">
			</div>
			</div>
		</div>
	</div>
	@endif


	<div class="container my-5">
			<div class="row ">
				<div class="col-md-12">
					<img src="/images/contents/{{$content[2]->content_image}}" class="container-img img-fluid" style="opacity: 0.2" alt="">
					<div class="carousel-caption">
              <h1 class="navbar-brand" >{{$content[2]->content_title}}</h1>
            </div>
				</div>
			</div>
	</div>
	<div class="container my-5">
			<div class="row ">
				<div class="col-md-6">
					<img src="/images/contents/{{$content[3]->content_image}}" class="container-img img-fluid" alt="">
				</div>
				<div class="col-md-6">
				<div style="text-align: center;">
					<a href="{{route('products.index')}}"><button class="btnGit">Ürünler Sayfasına Git</button></a>
				</div>
					
				</div>
			</div>
	</div>
@endsection