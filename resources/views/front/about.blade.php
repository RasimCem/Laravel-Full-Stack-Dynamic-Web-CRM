@extends('front.layout')
@section('content')
<div class="container" style="text-align: center;">
	<h1 class="title">{{$content->content_title}}</h1>
		<img src="/images/contents/{{$content->content_image}}" class="img-fluid my-5" alt="">
	<p class="about-content">
		{{$content->content_text}}
	</p>
</div>
@endsection