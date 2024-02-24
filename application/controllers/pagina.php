<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$dados['titulo'] = 'Home';
		$this->load->view('index', $dados);
	}
}
