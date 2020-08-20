@extends('panel.layout')
@section('title','Kullanici Ekleme')
 @section('content')
 <div class="container my-5">
    <h2>Içerik Yönetimi</h2>
    <hr>
    <div class="row my-5 justify-content-center">
    <div class="col-md-12">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Icerik Resmi</th>
                <th scope="col">Icerik Ismi</th>
                <th scope="col">Icerik Baslik</th>
                <th scope="col">Duzenle</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data['contents'] as $content)
                <tr>
                    <th scope="row">
                    <img width="100" src="/images/contents/{{$content->content_image}}" alt="">
                    </th>
                    <td>{{$content->content_name}}</td>
                    <td>{{$content->content_title}}</td>
                    <td style="text-align: left"><a href="{{route('content.edit',$content->id)}}"><i class="fas fa-edit"></i></a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    </div>
</div>
 @endsection			
		