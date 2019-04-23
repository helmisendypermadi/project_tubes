// $(document).ready(function(){

// 	// swal("Good job!", "You clicked the button!", "success");

// 	var save_method, link;

// 	$(".button-add").click(function () {
// 		save_method = 'add';
// 		$(".modal-add").modal('show');
// 	});

//     $('.button-save').click(function () {

// 		if (save_method == 'add') {
// 			link = '<?php site_url ?>';
// 		}

//         swal("Apakah Data Yang Anda Masukan Sudah Benar ?", {
// 		  buttons: {
// 		    cancel: "Batal",
// 		    catch: {
// 		      text: "Ya",
// 		      value: "save",
// 		    },
// 		  },
// 		})
// 		.then((value) => {
// 			switch (value) {
// 				case "save":
// 					$.ajax({
// 					    // url: ci_baseurl + "masterdata/agama/do_create_agama",
// 					    url: site_url('index.php/Materi/materi_add'),
// 					    type: 'POST',
// 					    dataType: 'JSON',
// 					    data: $('form#fmCreateAgama').serialize(),
					      
// 					    success: function(data) {
// 					        var ret = data.success;
// 					        if(ret === true) {
// 					            $("#modal_add_agama").modal('hide');
// 					            swal(
// 					                'Berhasil!',
// 					                'Data Berhasil Disimpan.',
// 					                'success'
// 					              )
// 					        } else {
// 					            $('#modal_card_message').html(data.messages);
// 					            swal(
// 					                'Gagal!',
// 					                'Data Gagal Disimpan.',
// 					                'error'
// 					              )
// 					        }
// 					    }
// 					});
// 				  	// swal("Berhasil!", "Data telah dihapus", "success");
// 				   //  setTimeout(function () {
// 				   //      swal.close();
// 				   //  }, 1300);
// 				  	// break;
// 				default:
// 				  	swal.close();
// 		  	}	
// 		});
//     });


// });