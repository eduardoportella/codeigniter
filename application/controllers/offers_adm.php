<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers_adm extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('option_model', 'option');
		$this->load->model('offers_model', 'offers');
	}

	public function index()
	{
		redirect('offers_adm/read', 'refresh');
	}

	public function read()
	{
		verifica_login();

		$dados['titulo'] = 'Offers Admin';
		$dados['h2'] = 'Offers';
		$dados['tela'] = 'read';
		$this->load->view('painel/offers_adm', $dados);
	}

	public function create()
	{
		verifica_login();

		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('content', 'Content', 'trim|required');

		if ($this->form_validation->run() == FALSE){
			if (validation_errors()){
				set_msg(validation_errors());
			}
		} else {
			$this->load->library('upload', config_upload());
			if ($this->upload->do_upload('image')){
				$dados_upload = $this->upload->data();	
				$dados_form = $this->input->post();
				var_dump($dados_upload);
			} else {
				$msg = $this->upload->display_errors();
				$msg .= "<p>Only .jpg and .png files max size 512KB are allowed</p>";
				set_msg($msg);
			}
		}

		$dados['titulo'] = 'Offers Create';
		$dados['h2'] = 'Create Offer';
		$dados['tela'] = 'create';
		$this->load->view('painel/offers_adm', $dados);
	}
}
