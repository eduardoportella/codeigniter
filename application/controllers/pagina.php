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

	public function about()
	{
		$dados['titulo'] = 'About us';
		$this->load->view('about', $dados);
	}

	public function blog()
	{
		$dados['titulo'] = 'Blog';
		$this->load->view('blog', $dados);
	}

	public function contact()
	{
		$this->load->helper('form');
		$this->load->library(array('form_validation', 'email'));
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');
	
		if ($this->form_validation->run() == false){
			$dados['formerror'] = validation_errors();
		} else {
			$dados['formerror'] = 'A validacao funcionou corretamente';
			$dados_form = $this->input->post();
			$this->email->from($dados_form['email'], $dados_form['nome']);
			$this->email->to($dados_form['emailteste@email.com']);
			$this->email->subject($dados_form['subject']);
			$this->email->message($dados_form['message']);
			if ($this->email->send()){
				$dados['formerror'] = 'Email enviado com sucesso';
			} else {
				$dados['formerror'] = 'Erro ao enviar email';
			}
		}

		$dados['titulo'] = 'Contact';
		$this->load->view('contact', $dados);
	}

	public function faq()
	{
		$dados['titulo'] = 'FAQ';
		$this->load->view('faq', $dados);
	}

	public function fleet()
	{
		$dados['titulo'] = 'Fleet';
		$this->load->view('fleet', $dados);
	}

	public function offers()
	{
		$dados['titulo'] = 'Offers';
		$this->load->view('offers', $dados);
	}

	public function team()
	{
		$dados['titulo'] = 'Team';
		$this->load->view('team', $dados);
	}

	public function terms()
	{
		$dados['titulo'] = 'Terms';
		$this->load->view('terms', $dados);
	}

	public function testimonials()
	{
		$dados['titulo'] = 'Testimonials';
		$this->load->view('testimonials', $dados);
	}
}
