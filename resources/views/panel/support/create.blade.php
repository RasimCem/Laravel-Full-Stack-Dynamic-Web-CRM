@extends('panel.layout')
@section('title','Kullanici Ekleme')
 @section('content')
 <div class="container my-5">

    <div class="container my-5">
        <h2>Sikca Sorulan Sorular</h2>
        <hr>
        <div class="row justify-content-left">
          @foreach ($data['questions'] as $question)
            <div class="col-md-12">
              <h3 class="faq-title"><i class="fas fa-plus-circle" ></i>{{$question->question}}</h3>
            <p id="faq"  class="faq-content" >{{$question->answer}}</p>
            </div>
          @endforeach
        </div>
    </div>
    <div class="container bg-light my-5">
        <h2>Bize Ulasin</h2>
        <hr>
        <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{route('support.store')}}" method="Post" class="mt-5">
         <div class="form">
             @csrf
             <div class="form-element">
                 <label class="panel-label" for="">Kimden</label>
                 <input name="name" class="panel-input" type="mail">
             </div>
             <div class="form-element">
                 <label class="panel-label" for="">Baslik</label>
                 <input name="title" class="panel-input" type="text">
             </div>
             <div class="form-element">
                 <label class="panel-label form-text" for="icerik">Mesaj</label>
                 <textarea name="message" id="icerik" rows="8" class="panel-input" type="text"> </textarea>
             </div>
             <div style="text-align: right;margin-top: 10px">
                 <input value="Gonder" type="submit" class="btn">
             </div>
         </div>
         </form>
        </div>
        </div>
</div>
</div>
<script>
	var acc = document.getElementsByClassName("faq-title");
	var i;	

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
		this.classList.toggle("faq-title");
		var content = this.nextElementSibling;
		if (content.style.display === "block") {
		  content.style.display = "none";
		} else {
		  content.style.display = "block";
		}
	  });
	}
	  
</script>
 @endsection			
		