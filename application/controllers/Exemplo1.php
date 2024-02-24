<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1 extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		echo 'index foi chamado na funcao exermplo1';
	}

	public function login()
	{
		echo 'login foi chamado na funcao exermplo1';
	}
}
