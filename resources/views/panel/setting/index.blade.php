@extends('panel.layout')
@section('title','Kullanici Ekleme')
 @section('content')
 <div class="container my-5">
    <h2>Genel Ayarlar</h2>
    <hr>
    <div class="row my-5 justify-content-center">
    <div class="col-md-12">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Ayar Ismi</th>
                <th scope="col">Ayar Tipi</th>
                <th scope="col">Ayar Durumu</th>
                <th scope="col">Duzenle</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data['settings'] as $setting)
                <tr>
                    <th scope="row">{{$setting->id}}</th>
                    <td>{{$setting->settings_name}}</td>
                    <td>{{$setting->settings_type}}</td>
                    <td>
                      @if ($setting->settings_status==1)
                          <p class="text-success">Aktif</p>
                      @else
                        <p class="text-danger">Pasif</p>
                      @endif
                    </td>
                    <td style="text-align: left"><a href="{{route('setting.edit',$setting->id)}}"><i class="fas fa-edit"></i></a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    </div>
</div>
 @endsection			
		