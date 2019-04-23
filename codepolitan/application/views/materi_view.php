<!DOCTYPE html>
<html>
<head>
	<title>Codepolitan - Interactive Coding</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">

	<style>
		*{
			/*border: 1px solid black;*/
		}
	</style>

</head>
<body>

	<div class="modal modal-add" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Form Materi</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <!-- <div class="modal-body">
	        <p>Modal body text goes here.</p>
	      </div> -->
		<div class="modal-body">
			<form id="form_materi" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id_materi" id="id_materi">
				<div class="form-group">
				    <label for="image">Gambar Materi</label>
				    <input type="file" class="form-control-file" name="image" id="image">
				</div>
				<!-- <div class="form-group">
					<label for="image">Nama Materi</label>
					<input type="email" class="form-control" name="image" id="image" aria-describedby="emailHelp" placeholder="Enter email">
				</div> -->
				<div class="form-group">
					<label for="judul_materi">Nama Materi</label>
					<input type="text" class="form-control" id="judul_materi" name="judul_materi" placeholder="Nama Materi">
				</div>
			
		</div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
	        <button type="submit" class="btn btn-primary button-save">Simpan Data</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#"><img height="45px" src="<?php echo base_url('assets/images/codepolitan_logo.png') ?>"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Learning Programs
					</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Online Course</a>
					<a class="dropdown-item" href="#">Developer School</a>
					<a class="dropdown-item" href="http://localhost/codepolitan/index.php/Materi">Interactive Coding</a>
				</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Articles</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://localhost/codepolitan/index.php/Event">Event</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Forum</a>
				</li>

				<li class="nav-item horizontal-divider">
					<a class="nav-link" href="#">My Dashboard</a>
				</li>
				<li class="nav-item notification-icon">
					<a class="nav-link" href="#"><span class="fa fa-bell fa-fw"></span></a>
				</li>
				<div class="foto-frame">
					<img class="foto-profil" src="<?php echo base_url('assets/images/foto.jpg') ?>">
				</div>

			</ul>
				<!-- <button type="button" class="btn btn-outline-secondary button-login">LOGIN</button>
			  	<button type="button" class="btn btn-primary button-register">REGISTER</button> -->
			</div>
	  </div>
	</nav>

	<header>
		<div class="col-md-6">
			<h2>Interactive Coding</h2>
			<p>Belajar dasar-dasar pemrograman secara online dengan media belajar interaktif dan dengan materi yang tersusun secara sistematis.</p>
		</div>
	</header>

	<div class="container">
		<div class="row main-content">
			<div class="col-md-12">
				<button class="btn btn-primary waves-effect waves-light button-add"><i class="fas fa-plus"></i> Tambah Data</button>
			</div>
			<?php foreach ($materi as $data){ ?>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="card">
						<div class="image-frame">
							<img src="<?php echo base_url('assets/images/materi/' . $data->image) ?>" class="card-img-top" alt="...">
						</div>
						<div class="card-body" style="height: 220px; position: relative;">
							<h5 class="card-title" style="color: #2c2c2c; font-weight: 600;"><?php echo $data->judul_materi; ?></h5>
							<div class="bottom-act">
									<div class="col-md-7 col-sm-5 frame-belajar">
										<button type="button" class="btn btn-outline-secondary button-belajar">Mulai Belajar</button>
									</div>
									<div class="col-md-5 col-sm-7 frame-action">
										<button class="btn btn-success waves-effect waves-light" onclick="updateMateri(<?php echo $data->id_materi; ?>)"><i class="fas fa-pen"></i></button>
										<button class="btn btn-danger waves-effect waves-light" onclick="deleteMateri(<?php echo $data->id_materi; ?>)"><i class="fas fa-trash"></i></button>
									</div>

								
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

		<br><br><br><br><br>

				<footer class="page-footer font-small blue pt-4">

		    <!-- Footer Links -->
		    <div class="container-fluid text-center text-md-left">
		      <div class="row">
		        <div class="col-md-6 mt-md-0 mt-3">
		          <div class="row">
		          	<ul class="list-unstyled ul-footer">
		              <li>
		                <a href=""><span class="h6 type--uppercase">FAQ</span></a>
		              </li>
		              <li>
		                <a href=""><span class="h6 type--uppercase">Feedback</span></a>
		              </li>
		              <li>
		                <a href=""><span class="h6 type--uppercase">Terms &amp; </span></a>
		              </li>
		              <li>
		                <a href=""><span class="h6 type--uppercase">Privacy Policy</span></a>
		              </li>
		              <li>
		                <a href=""><span class="h6 type--uppercase">Credit</span></a>
		              </li>
		              <li>
		                <a href="" target="_blank"><span class="h6 type--uppercase">Merchandise</span></a>
		              </li>
		            </ul>
		          </div>
		          <div class="row">
		          	<p style="opacity: 0.5;">© 2019 CodePolitan. All rights reserved</p>
		          </div>
		        </div>

		        <div class="col-md-6 mt-md-0 mt-3">
		          <div class="row">
		          	<a href="" class="email-footer">info@codepolitan.com</a>
		          </div>
		          <div class="row">
		          	
		          </div>
		        </div>
		      </div>
		    </div>
		    <!-- Footer Links -->

		    <!-- Copyright -->
		    <!-- Copyright -->

		  </footer>
		  <br>
		  <!-- Footer -->
	</div>

	<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js') ?>"></script>
	<script>
		var save_method, link;

		$(".button-add").click(function () {
			save_method = 'add';
			$(".modal-add").modal('show');
		});

	  	$('#form_materi').submit(function(e){
	  		e.preventDefault(); 

	    	if (save_method == 'add') {
				link = 'http://localhost/codepolitan/index.php/Materi/materi_add';
				alert(link);
			}else{
				link = 'http://localhost/codepolitan/index.php/Materi/materi_update';
				alert(link);
			}
	    		swal("Apakah Data Yang Anda Masukan Sudah Benar ?", {
				  buttons: {
				    cancel: "Batal",
				    catch: {
				      text: "Ya",
				      value: "save",
				    },
				  },
				})
				.then((value) => {
					switch (value) {
						case "save":
							$.ajax({
							    url: link,
							    type:"post",
			                     data:new FormData(this),
			                     processData:false,
			                     contentType:false,
			                     cache:false,
			                     async:false,
							    success: function(data) {
							    	console.log(data);
							    	location.reload();
							      //   var ajaxReturn = data.success;
			          //               if(ajaxReturn === true) {
			          //                   console.log(data.messages);
			          //                   console.log("di if");
			          //                   swal("Berhasil!", "Data telah disimpan", "success");
									    // setTimeout(function () {
									    //     swal.close();
									    // }, 1300);
			          //               } else {
			          //               	console.log(data.messages);
			          //                 	console.log("masuk else");
			          //               }

							    },
							    error: function (jqXHR, exception) {
							        location.reload();
							    }
							});
						  	break;
						default:
						  	swal.close();
						  	console.log('default')
				  	}	
				});    
	    });

	    function updateMateri(id){
	    	save_method = 'update';
	    	$('#form_materi')[0].reset();

	    	$.ajax({
			    url 	: 'http://localhost/codepolitan/index.php/Materi/ajax_edit/' + id,
			    type  : "GET",
			    dataType: "JSON",
			    success: function(data) {
			    	console.log(data);
			    	$('[name="id_materi"]').val(data.id_materi);
			    	$('[name="judul_materi"]').val(data.judul_materi);

			    	// $('#id_materi').val(data.id_materi);
			    	// $('#image').val(data.image);
			    	// $('#judul_materi').val(data.judul_materi);

			    	$(".modal-add").modal('show');
			    	// location.reload();
			    },
			    error: function (jqXHR, exception) {
			        // location.reload();
			        var msg = '';
				        if (jqXHR.status === 0) {
				            msg = 'Not connect.\n Verify Network.';
				        } else if (jqXHR.status == 404) {
				            msg = 'Requested page not found. [404]';
				        } else if (jqXHR.status == 500) {
				            msg = 'Internal Server Error [500].';
				        } else if (exception === 'parsererror') {
				            msg = 'Requested JSON parse failed.';
				        } else if (exception === 'timeout') {
				            msg = 'Time out error.';
				        } else if (exception === 'abort') {
				            msg = 'Ajax request aborted.';
				        } else {
				            msg = 'Uncaught Error.\n' + jqXHR.responseText;
				        }
				        // $('#post').html(msg);
				        console.log(msg);
			    }
			});
	    }

	    function deleteMateri(id){
	    	swal("Apakah anda yakin ingin menghapusnya ?", {
			  buttons: {
			    cancel: "Batal",
			    catch: {
			      text: "Ya",
			      value: "save",
			    },
			  },
			})
			.then((value) => {
				switch (value) {
					case "save":
						$.ajax({
						    url 	: 'http://localhost/codepolitan/index.php/Materi/materi_delete/' + id,
						    type  : "POST",
						    dataType : "JSON",
						    success: function(data) {
						    	console.log(data);
						    	location.reload();
						      //   var ajaxReturn = data.success;
		          //               if(ajaxReturn === true) {
		          //                   console.log(data.messages);
		          //                   console.log("di if");
		          //                   swal("Berhasil!", "Data telah disimpan", "success");
								    // setTimeout(function () {
								    //     swal.close();
								    // }, 1300);
		          //               } else {
		          //               	console.log(data.messages);
		          //                 	console.log("masuk else");
		          //               }

						    },
						    error: function (jqXHR, exception) {
						        location.reload();
						    }
						});
					  	break;
					default:
					  	swal.close();
					  	console.log('default');
			  	}	
			});    
	    }
	</script>

</body>
</html>