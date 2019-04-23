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
	        <h5 class="modal-title">Form Event</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <!-- <div class="modal-body">
	        <p>Modal body text goes here.</p>
	      </div> -->
		<div class="modal-body">
			<form id="form_event" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id_event" id="id_event">
				<div class="form-group">
				    <label for="image">Gambar Event</label>
				    <input type="file" class="form-control-file" name="image_event" id="image_event">
				</div>
				<!-- <div class="form-group">
					<label for="image">Nama Materi</label>
					<input type="email" class="form-control" name="image" id="image" aria-describedby="emailHelp" placeholder="Enter email">
				</div> -->
				<div class="form-group">
					<label for="judul_materi">Judul Event</label>
					<input type="text" class="form-control" id="judul_event" name="judul_event" placeholder="Nama Event">
				</div>
				<div class="form-group">
					<label for="judul_materi">Tanggal Event</label>
					<input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Event">
				</div>
				<div class="form-group">
					<label for="judul_materi">Waktu Event</label>
					<input type="text" class="form-control" id="waktu" name="waktu" placeholder="Waktu Event">
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
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
				</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Articles</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://localhost/codepolitan/event">Event</a>
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

	<!-- <header>
		<div class="col-md-6">
			<h2>Interactive Coding</h2>
			<p>Belajar dasar-dasar pemrograman secara online dengan media belajar interaktif dan dengan materi yang tersusun secara sistematis.</p>
		</div>
	</header> -->

	<div class="container">
		<div class="row main-content">
			<p class="publish">Untuk melakukan posting event silahkan login terlebih dahulu. Publish Event Sekarang!</p>
			<div class="col-md-12">
				<button class="btn btn-primary waves-effect waves-light button-add"><i class="fas fa-plus"></i> Tambah Data</button>
			</div>
			<?php foreach ($event as $data){ ?>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="card">
						<div class="image-frame">
							<img src="<?php echo base_url('assets/images/event/' . $data->image_event) ?>" class="card-img-top" alt="...">
						</div>
						<div class="card-body" style="height: 220px; position: relative;">
							<h5 class="card-title" style="color: #2c2c2c; font-weight: 600;"><?php echo $data->judul_event; ?></h5>
							<div class="bottom-act">
									<div class="col-md-7 col-sm-5 frame-event">
										<p><i class="fas fa-calendar-alt fa-fw mr-2"></i><span class="tanggal"><?php echo $data->tanggal; ?></span></p>
										<p><i class="fas fa-map-marked-alt fa-fw mr-2"></i><span class="waktu"><?php echo $data->waktu; ?></span></p>
									</div>
									<div class="col-md-5 col-sm-7 frame-action">
										<button class="btn btn-success waves-effect waves-light" onclick="updateEvent(<?php echo $data->id_event; ?>)"><i class="fas fa-pen"></i></button>
										<button class="btn btn-danger waves-effect waves-light" onclick="deleteEvent(<?php echo $data->id_event; ?>)"><i class="fas fa-trash"></i></button>
									</div>								
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

		<br><br><br><br><br>
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

	  	$('#form_event').submit(function(e){
	  		e.preventDefault(); 

	    	if (save_method == 'add') {
				link = 'http://localhost/codepolitan/index.php/Event/event_add';
			}else{
				link = 'http://localhost/codepolitan/index.php/Event/event_update';
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
				        } else if (exception.status === 200) {
				        	msg = 'success';
				        } else {
				            msg = 'Uncaught Error.\n' + jqXHR.responseText;
				        }
				        // $('#post').html(msg);
				        console.log(msg);
							    }
							});
						  	break;
						default:
						  	swal.close();
						  	console.log('default')
				  	}	
				});    
	    });

	    function updateEvent(id){
	    	save_method = 'update';
	    	$('#form_event')[0].reset();

	    	$.ajax({
			    url 	: 'http://localhost/codepolitan/index.php/Event/ajax_edit/' + id,
			    type  : "GET",
			    dataType: "JSON",
			    success: function(data) {
			    	console.log(data);
			    	$('[name="id_event"]').val(data.id_event);
			    	$('[name="judul_event"]').val(data.judul_event);
			    	$('[name="tanggal"]').val(data.tanggal);
			    	$('[name="waktu"]').val(data.waktu);

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

	    function deleteEvent(id){
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
						    url 	: 'http://localhost/codepolitan/index.php/Event/event_delete/' + id,
						    type  : "POST",
						    dataType : "JSON",
						    success: function(data) {
						    	console.log(data);
						    	location.reload();
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