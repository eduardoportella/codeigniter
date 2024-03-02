<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Setup extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('option_model', 'option');
	}

	public function index()
	{
		if ($this->option->get_option('setup_executado') == 1): 
			redirect('setup/alterar', 'refresh');
		else:
			redirect('setup/instalar', 'refresh');
		endif;
	}

	public function instalar()
	{
		if ($this->option->get_option('setup_executado') == 1):
			redirect('setup/alterar', 'refresh');
		endif;

		$dados['titulo'] = 'Painel';
		$dados['h2'] = 'Setup do sistema';
		$this->load->view('painel/setup', $dados);
	}

}
