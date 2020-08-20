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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
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
    <title>@yield('title')</title>
  </head>
  <body>
  	
    <div id="mySidenav" class="sidenav">
 		  <a href="javascript:void(0)"  class="closebtn" onclick="closeNav()">&times;</a>
  		<h3 class="text-light mb-5" style="text-align: center">Admin Paneli</h3>
	 @if (Auth::user()->role=='admin')
     <a href={{route('setting.index')}} class="panel-item">Ayarlar
      <i class="fas fa-cog"></i>
     </a>

      <a href="{{route('content.index')}}" class="panel-item">İçerik Yönetimi
        <i class="fas fa-file-alt"></i>
      </a>
      
      <a href="{{route('user.List')}}" class="panel-item">Kullanıcılar
        <i class="fas fa-user-plus panel-icon"></i>
      </a>

      <a href="{{route('product.index')}}" class="panel-item">Ürünler
        <i class="fas fa-shopping-cart"></i>
      </a>

      <a href={{route('question.index')}} class="panel-item">SSS
        <i class="fas fa-question"></i>
      </a>

      @elseif(Auth::user()->role=='user')

      <a href="{{route('user.profile')}}" class="panel-item">Profil
        <i class="fas fa-user panel-icon"></i>
      </a>

      <a href="{{route('myproduct.myproduct')}}" class="panel-item">Ürünlerim
        <i class="fas fa-cart-arrow-down"></i>
      </a>

      <a href={{route('support.index')}} class="panel-item">Destek
        <i class="fab fa-teamspeak"></i>
      </a>

   @endif

    <a href="{{route('user.logout')}}" class="panel-item">Çıkış
	  	<i class="fas fa-sign-out-alt"></i>
	  </a>
	
  </div>

<nav class="container-fluid panel-nav clearfix">

<span class="panel-btn" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<div class="panel-brand-box ">
	<a class="navbar-brand" style="color: #fff" href="panel-aytan.html">
 			AYTAN Akıllı Ev Sistemleri
 	</a>
</div>
 </nav>
 @yield('content')
 <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    </script>
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

 