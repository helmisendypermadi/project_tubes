<?php

class Event_model extends CI_Model 
{
	var $table = 'event';

	public function event_add($data=array()){
		$insert = $this->db->insert($this->table, $data);
		return $insert;
	}

	public function get_event_data(){
		$this->db->from('event');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_event_by_id($id){
		$this->db->from('event');
		$this->db->where('id_event', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function event_delete($id){
        $this->db->where('id_event', $id);
		$this->db->delete($this->table);

		unlink('assets/images/event/'.$id);

		return $query->result();
    }

    public function event_update($where, $data){
        $this->db->update($this->table, $data, $where);
		return $query->result();
    }

}