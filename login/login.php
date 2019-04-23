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

	<!-- Google Font Online -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
	<!-- End Google Font Online -->

	<!-- CSS external -->
	<link href="login.css" type="text/css" rel="stylesheet" media="all" >
	<!-- CSS external -->

	<title>Login-CodePolitan.com</title>
	<link rel="shortcut icon" href="image/favicon.png">
</head>
<body data-smooth-scroll-ofset="77" cz-shortcut-listen="true">

<!-- BOOTSTRAP HEADER-->
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
          <strong style="margin-left: -35px;">LEARNING PROGRAMS</strong>
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
    <div class="login" style="margin-right: 25px; margin-left: 50px;">
    	<a id="btn-page-login" class="btn btn--sm type--uppercase" href="login.php">
    		<span class="btn__text">LOGIN</span>
    	</a>
    </div>
     <form class="form-inline my-2 my-lg-0">
      <button type="button" class="btn btn-info" style="margin-right: 100px; background: #5bc0be; background-color: #5bc0be; font-weight: bold; border-color: white; margin-right: 60px;">REGISTER</button>
    </form>
  </div>
</nav>
<!-- END BOOTSTRAP HEADER-->

<div class="main-container">
	<section class="login-container bg--secondary">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-5">
<!-- FORM LOGIN -->
					<div class="bg--white p-5 border-radius">
						<h1 class="mt-0 mb-4">Login</h1>

						<form class="margin-lg-top" action="https://wwww.codepolitan.com/user/login_action" method="post" accept-charset="UTF-8">
              <div class="alert alert-warning">
                Untuk member Codepolitan diharapkan untuk
                <a href="https://wwww.codepolitan.com/user/recovery" style="color: #666666; font-weight: 700;">
                  reset password
                </a>
                jika tidak bisa login. Mohon maaf soal ketidaknyamannya.
                </p>
              </div>

              <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="email" name="username" required="">
              </div>

              <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" required="">
              </div>

              <div class="pt-2">
                <button id="btn-submit-login" class="btn btn--primary btn-block type--uppercase btn--lg">
                  <span class="btn__text" style="color:white">Login</span>
                </button>
              </div>
						</form>

            <div class="mt-4">
              <a href="https://www.codepolitan.com/user/recovery" style="color: #666666; font-weight: 700; font-size: 15px;">Lupa kata sandi?</a>
            </div>

            <div style="height: 26px; width: 361px;">
              Belum punya akun?
              <a style="color: #666666; font-weight: 700; font-size: 15px;" href="https://www.codepolitan.com/user/register">Registrasi disini</a>
            </div>
					</div>
<!-- END FORM LOGIN -->
				</div>
			</div>
		</div>
	</section>
<!-- BAGIAN FOOTER -->
<footer class="text-center-xs space--xs">
  <div class="container">
    <div class="row">

      <div class="col-sm-7">
          <ul class="list-inline">
            <li style="height: 26px; width: 27px; margin-right: 26px;">
              <a style="text-decoration:none; font-size: 13px;" href="https://www.codepolitan.com/faq">
                <span class="h6 type--uppercase">FAQ</span>
              </a>
            </li>

            <li style="height: 26px; margin-right: 26px;">
              <a style="text-decoration: none; font-size: 13px;" href="https://www.codepolitan.com/feedback">
                <span class="h6 type--uppercase">Feedback</span>
              </a>
            </li>

            <li style="height: 26px; margin-right: 26px;">
              <a href="https://codepolitan.com/tnc" style="text-decoration: none; font-size: 13px;">
                <span class="h6 type--uppercase">Terms & Conditions</span>
              </a>
            </li>

            <li style=" margin-right: 26px;">
              <a href="https://codepolitan.com/privacy-policy" style="text-decoration: none; font-size: 13px;">
                <span class="h6 type--uppercase">Privacy Policy</span>
              </a>
            </li>

            <li style=" margin-right: 26px;">
              <a href="https://codepolitan.com/credit-to-bug-reporter" style="text-decoration: none; font-size: 13px;">
                <span class="h6 type--uppercase">Credit</span>
              </a>
            </li>

            <li style=" margin-right: 26px;">
              <a href="https://wwww.rumahkomunitas.com/codepolitan" target="_blank" style="text-decoration: none; font-size: 13px;">
                <span class="h6 type--uppercase">Merchandise</span>
              </a>
            </li>
          </ul>
      </div>

      <div class="col-sm-5 text-right text-center-xs">
        <ul class="social-list list-inline list--hover">
          <!-- LANJUT <li> -->
        </ul>
      </div>
    </div>
    <div class="row">
      
      <div class="col-sm-7">
        <p> &copy; 2019 Codepolitan. All right reserved</p>
      </div>

      <div class="col-sm-5 text-right text-center-xs">
        <a style ="color: #666666;" href="mailto:info@codepolitan.com">info@codepolitan.com</a>
      </div>

    </div>
  </div>
</footer>
<!-- END BAGIAN FOOTER -->
</div>

</body>
</html>