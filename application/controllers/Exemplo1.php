<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1 extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Exemplo1_model', 'apelido_model');
	}

	public function index()
	{
		$dados['titulo'] = 'Essa é minha primeira view!';
		$dados['conteudo'] = 'Lorem ipsum dolor sit amet, consectet.';
		$this->load->view('exemplo1', $dados);
	}

	public function login()
	{
		$this->apelido_model->salvar();
	}
}
