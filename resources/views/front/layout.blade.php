<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/custom/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Red+Rose&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
	<!--Alertify -->
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
	  @if (isset($Isim))
		<div class="logo-box">
			<a class="navbar-brand" href="{{route('home.index')}}">
			{{$Isim}}
			</a>
		</div>
	  @endif
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
   
      <ul class="navbar-links navbar-nav">
 		<li class="navbar-item">
         <a class="navbar-link" href="{{route('home.index')}}">
 				Anasayfa
 			</a>
 		</li>
 		<li class="navbar-item">
 			<a class="navbar-link" href="{{route('products.index')}}">
 				Ürünler
 			</a>
 		</li>
 		<li class="navbar-item">
		 <a class="navbar-link" href="{{route('about.index')}}">
 				Hakkımızda
 			</a>
 		</li>
 		<li class="navbar-item">
 			<a class="navbar-link" href="{{route('contact.index')}}">
 				İletişim
 			</a>
 		</li>
 		<li class="navbar-item">
				<button type="button" data-toggle="modal" data-target="#myModal" class="btn" >Giriş Yap</button>		
 		</li>
 	</ul>
  </div>
</nav>
@yield('content')
	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Giriş Yap</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('Login')}}">
					@csrf
					<input name="email" type="mail" placeholder="Kullanıcı Adı">
					<input name="password" type="password" placeholder="Şifre">
					<input type="submit" value="Giriş" class="btn ">
		   </form>
		   @if (isset($Logo))
		 	  <img src="/images/settings/{{$Logo}}" class="img-fluid logo-img" alt="">
		   @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 	<footer class="footer">
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-4 my-5">
 				<h2 class="footer-title">Contact</h2>
 				<ul>
					 @if (isset($Phone))
						 <li>
							<i class="fas fa-phone contact-item m-2"></i>{{$Phone}}
						</li>
					 @endif
					 @if (isset($CellPhone))
						<li>
							<i class="fas fa-mobile-alt contact-item m-2"></i>{{$CellPhone}}
						</li>
					 @endif
					 @if (isset($Mail))
						<li>
							<i class="fas fa-envelope contact-item m-2"></i>{{$Mail}}
						</li>
					 @endif
 				</ul>
			 </div>
				<div class="col-sm-4 my-5">
					@if (isset($Isim))
					<h2 class="footer-title"></h2>
					<ul>
						<li>
							<h2 class="footer-title" >{{$Isim}}</h2>
						</li>
					</ul>
					@endif	
				</div>
 			<div class="col-sm-4 my-5">
 				<h3 class="footer-title">Sosyal Medya Hesaplarımız</h3>
 				<ul>
					 @if (isset($facebook))
					 	<li>
							<a class="social-icon" href="{{$facebook}}"><i class="fab fa-facebook-f m-2 "></i></a>
						</li>
					 @endif
					@if (isset($twitter))
						<li>
							<a class="social-icon" href="{{$twitter}}"><i class="fab fa-twitter"></i></a>
						</li>
					@endif
					@if (isset($linkedin))
						<li>
							<a class="social-icon" href="{{$linkedin}}"><i class="fab fa-linkedin-in"></i></a>
						</li>
					@endif
 				</ul>
 			</div>
 		</div>
 		</div>
 	</footer>
 
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <script src="https://kit.fontawesome.com/f53b7f2e69.js" crossorigin="anonymous"></script>
	 @foreach ($errors->all() as $error)
      <script>
        alertify.error('{{$error}}')
      </script>
      @endforeach
      @if (session()->has('success'))
          <script>
            alertify.success('{{session('success')}}')
          </script>
      @endif
      @if (session()->has('error'))
      <script>
        alertify.error('{{session('error')}}')
      </script>
      @endif
  </body>
</html>