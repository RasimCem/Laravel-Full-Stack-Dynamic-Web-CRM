@extends('panel.layout')
@section('title','Kullanici Ekleme')
 @section('content')
 <div class="container my-5">
    <h2>Kullanıcı Listesi</h2>
    <hr>
    <div style="text-align: right">
      <a href="{{route('user.add')}}"><button class="btn ">Kullanıcı Ekle</button></a>
  </div>
    <div class="row my-5 justify-content-center">
    <div class="col-md-12">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">İsim</th>
                <th scope="col">Şirket</th>
                <th scope="col">Mail</th>
                <th scope="col">Ürünleri Gor</th>
                <th scope="col">Düzenle</th>
                <th scope="col">Sil</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data['user'] as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->company_name}}</td>
                    <td>{{$user->email}}</td>
                <td style="text-align: center;"><a href="{{route('myproduct.show',$user->id)}}"><i class="far fa-eye"></i></a></td>
                    <td style="text-align: center"><a href="{{route('user.edit',$user->id)}}"><i class="fas fa-edit"></i></a></td>
                <td><a href="{{route('user.destroy',$user->id)}}"><i  class="fas fa-trash-alt"></i></a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    </div>
</div>
 @endsection			
		