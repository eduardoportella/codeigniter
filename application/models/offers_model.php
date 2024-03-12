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

}
