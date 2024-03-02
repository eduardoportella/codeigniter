<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('set_msg')){
	function set_msg($msg=null){
		$ci = & get_instance();
		$ci->session->set_userdata('aviso', $msg);
	}
}

if (!function_exists('get_msg')){
	function get_msg($destroy=true){
		$ci = & get_instance();
		$retorno = $ci->session->userdata('aviso');
		if ($destroy) $ci->session->unset_userdata('aviso');
		return $retorno;
	}
}

if (!function_exists('verifica_login')){
	function verifica_login($redirect='setup/login'){
		$ci = & get_instance();
		if (!$ci->session->userdata('logged')){
				set_msg('<p>Acesso restrito! Faça login para continuar.</p>');
				redirect($redirect, 'refresh');
		}
	}
}
