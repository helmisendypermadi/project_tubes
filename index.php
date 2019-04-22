<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

	<!-- Tag meta untuk melakukan sekala secara responsif terhadap viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- End Tag meta untuk melakukan sekala secara responsif terhadap viewport -->

	<!-- Tag meta agar kompatibel dengan Internet Explorer -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- End Tag meta agar kompatibel dengan Internet Explorer -->
	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
	<link href="index.css" type="text/css" rel="stylesheet" media="all" >
	<!-- <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script> -->
	<title>Website Belajar Coding Bahasa Indonesia</title>
	<link rel="shortcut icon" href="image/favicon.png">
</head>
<body>
<!-- BOOTSTRAP -->
<nav class="navbar navbar-expand-lg navbar-light bg-white" style="font-size: 0.857142857142857em" >
  <a class="navbar-brand" href="#">
  	<img class="gambar" src="image/codepolitan.png" alt="Logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <strong>LEARNING PROGRAMS</strong>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Online Course</a>
          <a class="dropdown-item" href="#">Developer School</a>
          <a class="dropdown-item" href="#">Interactive Coding</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><strong>ARTICLES</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><strong>EVENT</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><strong>FORUM</strong></a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0" >
      <button type="button" class="btn btn-light" style="margin-right: 20px;">LOGIN</button>
    </form> -->
    <div class="login">
    	<a id="btn-page-login" class="btn tbn--sm tkype--uppercase" href="">
    		<span class="btn__text">LOGIN</span>
    	</a>
    </div>
     <form class="form-inline my-2 my-lg-0">
      <button type="button" class="btn btn-info" style="margin-right: 100px;">REGISTER</button>
    </form>
  </div>
</nav>
<!-- END BOOTSTRAP -->

<!-- <section class="coba">
	<div class="background-holder">
		<img class="pict" src="image/home.jpg">
	</div>
</section> -->

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="image/home.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="judul1">Belajar Coding Sekarang!</h1>
          <p class="lead">Lebih dari 2.000 modul belajar pemrograman dalam beragam format yang bisa kamu pelajari.</p>

         <div class="row">
        	<div class="col-md-8">
        		<input class ="cari" type="text" name="cari" placeholder="Cari tutorial, e-book atau materi belajar coding lainnya">
        	</div>

        	<div class="col-md-4">
        		<button class="btn btn--primary type--uppercase mt-0" type="submit">
        			CARI
        		</button>
        	</div>

         </div>
        </div>


    </div>
<!--     <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
</div>

</body>
</html>