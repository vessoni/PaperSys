<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');
class Venda extends CI_Controller {
	public function index()
	{
		$edit = 'false';
		$this->smarty->assign('edit',$edit);			
		$this->smarty->view('consulta/venda.html');
	}
	
}