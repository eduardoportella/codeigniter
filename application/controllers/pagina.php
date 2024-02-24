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
