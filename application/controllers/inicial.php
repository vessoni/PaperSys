<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');
class Inicial extends CI_Controller {
	public function index()
	{	
		$this->smarty->view('inicial.html');
	}
	
	public function teste(){
		$this->smarty->view('teste/teste.html');	
	}
	
}