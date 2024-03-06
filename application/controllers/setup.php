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
		if ($this->option->get_option('setup_executado') == 1){
			redirect('setup/alterar', 'refresh');
		} else {
			redirect('setup/instalar', 'refresh');
		}
	}

	public function instalar()
	{
		if ($this->option->get_option('setup_executado') == 1){
			redirect('setup/alterar', 'refresh');
		}

		$this->form_validation->set_rules('login', 'Name', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('email', 'EMAIL', 'trim|required|valid_email[5]');
		$this->form_validation->set_rules('password', 'PASSWORD', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password2', 'REPEAT PASSWORD', 'trim|required|min_length[6]|matches[password]');

		if (!$this->form_validation->run()){
			if (validation_errors()){
				set_msg(validation_errors());
			}
		}
		else {
			$dados_form = $this->input->post();
			$this->option->update_option('user_login', $dados_form['login']);
			$this->option->update_option('user_email', $dados_form['email']);
			$this->option->update_option('user_password', password_hash($dados_form['password'], PASSWORD_DEFAULT));
			$inserido = $this->option->update_option('setup_executado',1);
			if ($inserido){
				set_msg('<p>Cadastro realizado com sucesso!</p>');
				redirect('setup/login', 'refresh');
			}
			set_msg('<p>validacao ok </p>');
		}

		$dados['titulo'] = 'Painel';
		$dados['h2'] = 'System Setup';
		$this->load->view('setup/offers', $dados);
	}

	public function login()
	{
		if ($this->option->get_option('setup_executado') != 1){
			redirect('setup/redirect', 'refresh');
		}

		$this->form_validation->set_rules('login', 'Name', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('password', 'PASSWORD', 'trim|required|min_length[5]');

		if (!$this->form_validation->run()){
			if (validation_errors()){
				set_msg(validation_errors());
			}
		}
		else {
			$dados_form = $this->input->post();
			if ($this->option->get_option('user_login') == $dados_form['login']){
				if (password_verify($dados_form['password'], $this->option->get_option('user_password'))){
					$this->session->set_userdata('logged', TRUE);
					$this->session->set_userdata('user_login', $dados_form['login']);
					$this->session->set_userdata('user_email', $this->option->get_option('user_email'));
					redirect('setup/alterar', 'refresh');
				} else {
					set_msg('<p>Incorrect password</p>');
				}
			} else {
				set_msg('<p>User not found</p>');
			}
		}
		$dados['titulo'] = 'Painel';
		$dados['h2'] = 'System Login';
		$this->load->view('painel/login', $dados);
	}

	public function alterar()
	{
		verifica_login();

		$this->form_validation->set_rules('login', 'Name', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('email', 'EMAIL', 'trim|required|valid_email[5]');
		$this->form_validation->set_rules('password', 'PASSWORD', 'trim|min_length[5]');
		$this->form_validation->set_rules('nome_site', 'NOME DO SITE', 'trim|required|min_length[5]');

		if (isset($_POST['senha']) && $_POST['senha'] != ''){
			$this->form_validation->set_rules('password2', 'REPEAT PASSWORD', 'trim|min_length[5]|matches[password]');
		}

		if (!$this->form_validation->run()){
			if (validation_errors()){
				set_msg(validation_errors());
			}
		} else {
			$dados_form = $this->input->post();
			$this->option->update_option('user_login', $dados_form['login']);
			$this->option->update_option('user_email', $dados_form['email']);
			$this->option->update_option('nome_site', $dados_form['nome_site']);
			if ($dados_form['password'] && $dados_form['password'] != ''){
				$this->option->update_option('user_password', password_hash($dados_form['password'], PASSWORD_DEFAULT));
			}
			set_msg('<p>Dados foram alterados com sucesso!</p>');
		}

		$_POST['login'] = $this->option->get_option('user_login');
		$_POST['email'] = $this->option->get_option('user_email');
		$_POST['nome_site'] = $this->option->get_option('nome_site');
		$dados['titulo'] = 'Alterar';
		$dados['h2'] = 'Change basics configs';
		$this->load->view('painel/config', $dados);
	}

	public function logout()
	{
		$this->session->unset_userdata('logged');
		$this->session->unset_userdata('user_login');
		$this->session->unset_userdata('user_email');
		set_msg('<p>You left the admin panel!</p>');
		redirect('setup/login', 'refresh');
	}
}
