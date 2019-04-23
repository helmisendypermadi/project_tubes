<?php

class Materi_model extends CI_Model 
{
	var $table = 'materi';

	public function materi_add($data=array()){
		$insert = $this->db->insert($this->table, $data);
		return $insert;
	}

	public function get_materi_data(){
		$this->db->from('materi');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_materi_by_id($id){
		$this->db->from('materi');
		$this->db->where('id_materi', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function materi_delete($id){
        $this->db->where('id_materi', $id);
		$this->db->delete($this->table);

		unlink('assets/images/materi/'.$id);

		return $query->result();
    }

    public function materi_update($where, $data){
        $this->db->update($this->table, $data, $where);
		// return $this->db->affected_rows();
		return $query->result();
    }

}