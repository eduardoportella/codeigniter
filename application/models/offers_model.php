<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class offers_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}

	public function save($dados)
	{
		if(isset($dados['id']) && $dados['id'] > 0){

		} else {
			$this->db->insert('offers', $dados);
			return $this->db->insert_id();
		}
	}

	public function get($limit=0, $offset=0)
	{
		if ($limit == 0){
			$this->db->order_by('id', 'desc');
			$query = $this->db->get('offers');
			if($query->num_rows() > 0){
				return $query->result();
			} else {
				return NULL;
			}
		} else {
			$this->db->order_by('id', 'desc');
			$query = $this->db->get('offers', $limit);
			if($query->num_rows() > 0){
				return $query->result();
			} else {
				return NULL;
			}
		}
	}

	public function get_single($id=0)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('offers');
		if ($query->num_rows() == 1){
			$row = $query->row();
			return $row;
		} else {
			return NULL;
		}
	}

	public function delete($id=0)
	{
		$this->db->where('id', $id);
		$this->db->delete('offers');
		return $this->db->affected_rows();
	}
}
