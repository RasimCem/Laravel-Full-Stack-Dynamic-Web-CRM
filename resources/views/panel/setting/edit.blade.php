@extends('panel.layout')
@section('title','Kullanici Ekleme')
 @section('content')
 <div class="container my-5">
 <h2>{{$setting->settings_name}} Ayar Duzenleme</h2>
    <hr>
    <div class="row my-5 justify-content-center">
    <div class="col-md-8">
        <form action="{{route('setting.update',$setting->id)}}" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form">
               
            @if ($setting->settings_type=='text')
                <div class="form-element">
                    <label class="panel-label" for="">Icerik</label>
                <input value="{{$setting->settings_content}}" name="content" class="panel-input" type="text">
                </div>
                @elseif($setting->settings_type=='textarea')
                <div class="form-element">
                    <label class="panel-label form-text" for="icerik">Icerik</label>
                    <textarea id="icerik" rows="8" class="panel-input" name="content" type="text">
                       {{$setting->settings_content}} 
                    </textarea>
                </div>
                 @else
                 <div class="form-element">
                    <label class="panel-label" for="">Yeni Resim Yukle</label>
                    <input name="content"  class="panel-input" type="file">
                </div>
            @endif
             <div class="form-element">
                 <label class="panel-label" for="">Durum</label>
                 <select name="status" class="panel-input" type="text">
                     <option value="0" {{ $setting->settings_status==0 ? "selected=''" : "" }}>Pasif</option>
                     <option value="1"{{ $setting->settings_status==1 ? "selected=''" : "" }}>Aktif</option>
                 </select>
             </div>

            @if ($setting->settings_type=='file')
                <div class="form-element my-5">
                    <label class="panel-label" for="">Guncel Logo</label>
                    <img width="100%" src="/images/settings/{{$setting->settings_content}}" alt="">
                </div>                 
             @endif
        
             <div style="text-align: right;margin-top: 10px">
                 <input value="Guncelle" type="submit" class="btn">
             </div>
         </div>
         </form>
    </div>
    </div>
</div>
 @endsection			
		