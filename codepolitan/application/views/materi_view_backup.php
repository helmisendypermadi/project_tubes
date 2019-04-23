<!DOCTYPE html>
<html>
<head>
	<title>Codepolitan</title>

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
			<form id="form_materi">
				<!-- <input type="hidden" name="id_materi" id="id_materi"> -->
				<!-- <div class="form-group">
				    <label for="image">Upload Image</label>
				    <input type="file" class="form-control-file" name="image" id="image">
				</div> -->
				<div class="form-group">
					<label for="id_materi">Nama Materi</label>
					<input type="email" class="form-control" name="id_materi" id="id_materi" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="image">Nama Materi</label>
					<input type="email" class="form-control" name="image" id="image" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="judul_materi">Nama Materi</label>
					<input type="email" class="form-control" name="judul_materi" id="judul_materi" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
			</form>
		</div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
	        <button type="button" class="btn btn-primary button-save">Simpan Data</button>
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
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
				</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Articles</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Event</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Forum</a>
				</li>
			</ul>
				<button type="button" class="btn btn-outline-secondary button-login">LOGIN</button>
			  	<button type="button" class="btn btn-primary button-register">REGISTER</button>
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
			<div class="col-md-4">
				<div class="card">
					<img src="<?php echo base_url('assets/images/intcoding-c.jpg') ?>" class="card-img-top" alt="...">
					<div class="card-body" style="height: 220px; position: relative;">
						<h5 class="card-title" style="color: #2c2c2c; font-weight: 600;">Belajar Pemrograman C</h5>
						<div class="bottom-act">
							<button type="button" class="btn btn-outline-secondary button-belajar">Mulai Belajar</button>
							<div class="action-button">
								<button class="btn btn-success waves-effect waves-light"><i class="fas fa-pen"></i></button>
								<button class="btn btn-danger waves-effect waves-light"><i class="fas fa-trash"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<br><br><br><br><br>
	</div>

	<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js') ?>"></script>
	<script>
		$(document).ready(function(){

			var save_method, link;

			$(".button-add").click(function () {
				save_method = 'add';
				$(".modal-add").modal('show');
			});


		    $('.button-save').click(function () {
				if (save_method == 'add') {
					link = 'http://localhost/codepolitan/index.php/Materi/materi_add';
				}else{
					link = 'http://localhost/codepolitan/index.php/Materi/materi_update';
				}
				// console.log($('form#form_materi').serialize());

				$.ajax({
				    url: link,
				    type: 'POST',
				    data: $('#form_materi').serialize(),
				    success: function(data, jqXHR, exception) {
				        // var ret = data.success;
            //             if(ret == true) {
            //                 console.log(data.messages);
            //                 console.log("di if");
            //             } else {
            //             	console.log(data.messages);
            //               	console.log("masuk else");
            //             }
                        console.log(data);
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
				        } else if (exception.status === 200) {
				        	msg = 'success';
				        } else {
				            msg = 'Uncaught Error.\n' + jqXHR.responseText;
				        }
				        // $('#post').html(msg);
				        console.log(msg);
				    },
				    error: function (jqXHR, exception) {
				        console.log('masuk error');
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

		  //       swal("Apakah Data Yang Anda Masukan Sudah Benar ?", {
				//   buttons: {
				//     cancel: "Batal",
				//     catch: {
				//       text: "Ya",
				//       value: "save",
				//     },
				//   },
				// })
				// .then((value) => {
				// 	switch (value) {
				// 		case "save":
				// 			$.ajax({
				// 			    url: link,
				// 			    type: 'POST',
				// 			    dataType: 'JSON',
				// 			    data: $('#form_materi').serialize(),
				// 			    success: function(data) {
				// 			    	console.log(data);
				// 			        // var ret = data.success;
				// 			        // if(ret === true) {
				// 			        //     $("#modal_add_agama").modal('hide');
				// 			        //     swal(
				// 			        //         'Berhasil!',
				// 			        //         'Data Berhasil Disimpan.',
				// 			        //         'success'
				// 			        //       )
				// 			        // } else {
				// 			        //     $('#modal_card_message').html(data.messages);
				// 			        //     swal(
				// 			        //         'Gagal!',
				// 			        //         'Data Gagal Disimpan.',
				// 			        //         'error'
				// 			        //       )
				// 			        // }
				// 			    }
				// 			});
				// 			console.log('save')
				// 		  	// swal("Berhasil!", "Data telah dihapus", "success");
				// 		   //  setTimeout(function () {
				// 		   //      swal.close();
				// 		   //  }, 1300);
				// 		  	// break;
				// 		default:
				// 		  	swal.close();
				// 		  	console.log('default')
				//   	}	
				// });
		    });

		});
	</script>

</body>
</html>