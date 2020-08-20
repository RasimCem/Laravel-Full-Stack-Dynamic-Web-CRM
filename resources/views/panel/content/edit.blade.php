@extends('panel.layout')
@section('title','Icerik Guncelleme')
 @section('content')
 <div class="container my-5">
 <h2>{{$content->content_name}} Icerik Duzenleme</h2>
    <hr>
    <div class="row my-5 justify-content-center">
    <div class="col-md-8">
        <form action="{{route('content.update',$content->id)}}" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form">
                <div class="form-element">
                    <label class="panel-label" for="">Yeni Resim Ekle</label>
                    <input name="image" class="panel-input" type="file">
                </div>
                <div class="form-element">
                    <label class="panel-label" for="">Icerik Basligi</label>
                    <input value="{{$content->content_title}}" name="title" class="panel-input" type="text">
                </div>
                <div class="form-element">
                    <label class="panel-label form-text" for="icerik">Icerik</label>
                    <textarea id="icerik" rows="8" class="panel-input" name="content" type="text">
                       {{$content->content_text}} 
                    </textarea>
                </div>
                <div class="form-element my-5">
                    <label class="panel-label" for="">Guncel Resim</label>
                    <img width="100%" src="/images/contents/{{$content->content_image}}" alt="">
                </div>
             <div style="text-align: right;margin-top: 10px">
                 <input value="Guncelle" type="submit" class="btn">
             </div>
         </div>
         </form>
    </div>
    </div>
</div>
 @endsection			
		