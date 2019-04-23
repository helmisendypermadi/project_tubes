<?php

class Event extends CI_Controller
{
    
    public function __construct()
    {
    	parent::__construct();
    	$this->load->model('event_model');
    }

    public function index()
	{
		$data_event['event'] = $this->event_model->get_event_data();
		$this->load->view('event_view', $data_event);
	}

	public function event_add(){
		if(isset($_FILES['image_event']['name']) && !empty($_FILES['image_event']['name'])){

	        $new_image_name =  $this->input->post('judul_event');
			
			$config['upload_path']="./assets/images/event";
	        $config['allowed_types']='gif|jpg|jpeg|png';
	        $config['file_name'] = $new_image_name;
	         
	        $this->load->library('upload', $config);


	        if($this->upload->do_upload('image_event')){
	            $data = array('upload_data' => $this->upload->data());

	            $data_event = array(
					'id_event'		=> $this->input->post('id_event'),
					'image_event'	=> $data['upload_data']['file_name'],
					'judul_event'	=> $this->input->post('judul_event'),
					'tanggal'		=> $this->input->post('tanggal'),
<<<<<<< HEAD
					'tempat'			=> $this->input->post('tempat')
=======
					'waktu'			=> $this->input->post('waktu')
>>>>>>> 770f73d504e3377fd5bade5e9e6ffea6c9c50d11
				);

	            $insert = $this->event_model->event_add($data_event);
	            
	            if($insert){
					$res = array(
		                'success' => true,
		                'messages' => 'Event berhasil ditambahkan'
		            );
		            echo json_encode($res);
		        }else{
		        	$res = array(
		                'success' => false,
		                'messages' => 'Event Gagal ditambahkan'
		            );
		            echo json_encode($res);
		        }
		    }else{
		    	$res = array(
	                'success' => false,
	                'messages' => $this->upload->display_errors()
	            );
	            echo json_encode($res);

	            $error = array('error' => $this->upload->display_errors());
		        print_r($error);
		        exit;
		    }
		}
	}

<<<<<<< HEAD
	public function event_delete($id){
		$id_event	= $this->input->post($id);
		$delete = $this->event_model->event_delete($id);
=======
	public function materi_delete($id){
		$id_materi	= $this->input->post($id);
		$delete = $this->materi_model->event_delete($id);
>>>>>>> 770f73d504e3377fd5bade5e9e6ffea6c9c50d11
	            
        if($delete){
			$res = array(
                'success' => true,
                'messages' => 'Event berhasil dihapus'
            );
            echo json_encode($res);
        }else{
        	$res = array(
                'success' => false,
                'messages' => 'Event Gagal dihapus'
            );
            echo json_encode($res);
        }
	}

	public function ajax_edit($id){
		$data = $this->event_model->get_event_by_id($id);
		$res = array(
                'success' => false,
<<<<<<< HEAD
                'messages' => 'Event Gagal dihapus'
=======
                'messages' => 'Materi Gagal dihapus'
>>>>>>> 770f73d504e3377fd5bade5e9e6ffea6c9c50d11
            );
		echo json_encode($data);
	}

	public function event_update(){

		if(isset($_FILES['image_event']['name']) && !empty($_FILES['image_event']['name'])){

	        $new_image_name =  $this->input->post('judul_event');
			
<<<<<<< HEAD
			$config['upload_path']="./assets/images/event";
=======
			$config['upload_path']="./assets/images/materi";
>>>>>>> 770f73d504e3377fd5bade5e9e6ffea6c9c50d11
	        $config['allowed_types']='gif|jpg|jpeg|png';
	        $config['file_name'] = $new_image_name;
	         
	        $this->load->library('upload', $config);


	        if($this->upload->do_upload('image_event')){
	            $data = array('upload_data' => $this->upload->data());

	            $data_event = array(
					'id_event'		=> $this->input->post('id_event'),
					'image_event'	=> $data['upload_data']['file_name'],
					'judul_event'	=> $this->input->post('judul_event'),
					'tanggal'		=> $this->input->post('tanggal'),
<<<<<<< HEAD
					'tempat'			=> $this->input->post('tempat')
=======
					'waktu'			=> $this->input->post('waktu')
>>>>>>> 770f73d504e3377fd5bade5e9e6ffea6c9c50d11
				);
				echo json_encode($data_event);

	            $update = $this->event_model->event_update(array('id_event' => $this->input->post('id_event')), $data_event);
	            
	            if($update){
					$res = array(
		                'success' => true,
		                'messages' => 'Event berhasil ditambahkan'
		            );
		            echo json_encode($res);
		        }else{
		        	$res = array(
		                'success' => false,
		                'messages' => 'Event Gagal ditambahkan'
		            );
		            echo json_encode($res);
		        }
		    }else{
		    	$res = array(
	                'success' => false,
	                'messages' => $this->upload->display_errors()
	            );
	            echo json_encode($res);

	            $error = array('error' => $this->upload->display_errors());
		        print_r($error);
		        exit;
		    }
		}else{

            $data_event = array(
				'id_event'		=> $this->input->post('id_event'),
				'judul_event'	=> $this->input->post('judul_event'),
				'tanggal'		=> $this->input->post('tanggal'),
<<<<<<< HEAD
				'tempat'			=> $this->input->post('tempat')
			);
			echo json_encode($data_event);
=======
				'waktu'			=> $this->input->post('waktu')
			);
			echo json_encode($data_materi);
>>>>>>> 770f73d504e3377fd5bade5e9e6ffea6c9c50d11

            $update = $this->event_model->event_update(array('id_event' => $this->input->post('id_event')), $data_event);
            
            if($update){
				$res = array(
	                'success' => true,
	                'messages' => 'Event berhasil ditambahkan'
	            );
	            echo json_encode($res);
	        }else{
	        	$res = array(
	                'success' => false,
	                'messages' => 'Event Gagal ditambahkan'
	            );
	            echo json_encode($res);
	        }

	    	$res = array(
                'success' => false,
                'messages' => $this->upload->display_errors()
            );
            echo json_encode($res);

            $error = array('error' => $this->upload->display_errors());
	        print_r($error);
	        exit;


		}
	}

}