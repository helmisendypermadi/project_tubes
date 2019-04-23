<?php

class Materi extends CI_Controller
{
    
    public function __construct()
    {
    	parent::__construct();
    	$this->load->model('materi_model');
    }

    public function index()
	{
		$data_materi['materi'] = $this->materi_model->get_materi_data();
		$this->load->view('materi_view', $data_materi);
	}

	public function materi_add(){
		if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){

	        $new_image_name =  $this->input->post('judul_materi');
			
			$config['upload_path']="./assets/images/materi";
	        $config['allowed_types']='gif|jpg|jpeg|png';
	        $config['file_name'] = $new_image_name;
	         
	        $this->load->library('upload', $config);


	        if($this->upload->do_upload('image')){
	            $data = array('upload_data' => $this->upload->data());

	            $data_materi = array(
					'id_materi'		=> $this->input->post('id_materi'),
					'image'			=> $data['upload_data']['file_name'],
					'judul_materi'	=> $this->input->post('judul_materi')
				);

	            $insert = $this->materi_model->materi_add($data_materi);
	            
	            if($insert){
					$res = array(
		                'success' => true,
		                'messages' => 'Materi berhasil ditambahkan'
		            );
		            echo json_encode($res);
		        }else{
		        	$res = array(
		                'success' => false,
		                'messages' => 'Materi Gagal ditambahkan'
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

	public function materi_delete($id){
		$id_materi	= $this->input->post($id);
		$delete = $this->materi_model->materi_delete($id);
	            
        if($delete){
			$res = array(
                'success' => true,
                'messages' => 'Materi berhasil dihapus'
            );
            echo json_encode($res);
        }else{
        	$res = array(
                'success' => false,
                'messages' => 'Materi Gagal dihapus'
            );
            echo json_encode($res);
        }
	}

	public function ajax_edit($id){
		$data = $this->materi_model->get_materi_by_id($id);
		$res = array(
                'success' => false,
                'messages' => 'Materi Gagal dihapus'
            );
		echo json_encode($data);
	}

	public function materi_update(){

		if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){

	        $new_image_name =  $this->input->post('judul_materi');
			
			$config['upload_path']="./assets/images/materi";
	        $config['allowed_types']='gif|jpg|jpeg|png';
	        $config['file_name'] = $new_image_name;
	         
	        $this->load->library('upload', $config);


	        if($this->upload->do_upload('image')){
	            $data = array('upload_data' => $this->upload->data());

	            $data_materi = array(
					'id_materi'		=> $this->input->post('id_materi'),
					'image'			=> $data['upload_data']['file_name'],
					'judul_materi'	=> $this->input->post('judul_materi')
				);
				echo json_encode($data_materi);

	            $update = $this->materi_model->materi_update(array('id_materi' => $this->input->post('id_materi')), $data_materi);
	            
	            if($update){
					$res = array(
		                'success' => true,
		                'messages' => 'Materi berhasil ditambahkan'
		            );
		            echo json_encode($res);
		        }else{
		        	$res = array(
		                'success' => false,
		                'messages' => 'Materi Gagal ditambahkan'
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

            $data_materi = array(
				'id_materi'		=> $this->input->post('id_materi'),
				'judul_materi'	=> $this->input->post('judul_materi')
			);
			echo json_encode($data_materi);

            $update = $this->materi_model->materi_update(array('id_materi' => $this->input->post('id_materi')), $data_materi);
            
            if($update){
				$res = array(
	                'success' => true,
	                'messages' => 'Materi berhasil ditambahkan'
	            );
	            echo json_encode($res);
	        }else{
	        	$res = array(
	                'success' => false,
	                'messages' => 'Materi Gagal ditambahkan'
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