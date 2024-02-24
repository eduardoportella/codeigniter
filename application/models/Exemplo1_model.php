<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function salvar()
	{
		echo 'executado o método salvar do model';
	}
}



