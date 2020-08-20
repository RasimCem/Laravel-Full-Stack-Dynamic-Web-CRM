@extends('panel.layout')
@section('title','Kullanici Ekleme')
 @section('content')
 <div class="container my-5">
    <h2>Sıkça Sorulan Sorular (SSS)</h2>
    <hr>
    <div style="text-align: right">
      <a href="{{route('question.create')}}"><button class="btn ">Soru Ekle</button></a>
  </div>
    <div class="row my-5 justify-content-center">
    <div class="col-md-12">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Soru</th>
                <th scope="col">Cevap</th>
                <th scope="col">Düzenle</th>
                <th>Sil</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data['question'] as $question)
                <tr>
                    <th scope="row">{{$question->id}}</th>
                    <td>{{$question->question}}</td>
                    <td>{{$question->answer}}</td>
                    <td style="text-align: center"><a href="{{route('question.edit',$question->id)}}"><i class="fas fa-edit"></i></a></td>
                <td><a href="{{route('question.delete',$question->id)}}"><i  class="fas fa-trash-alt"></i></a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    </div>
</div>
 @endsection			
		