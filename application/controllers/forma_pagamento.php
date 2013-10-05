<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');
class Forma_pagamento extends CI_Controller {
	public function index()
	{
		$forma_pagamento = new forma_pagamentoModel();
		$forma_pagamento->get();
		$this->smarty->assign('forma_pagamento',$forma_pagamento);
		
		$edit = 'false';
		$this->smarty->assign('edit',$edit);			
		$this->smarty->view('consulta/forma_pagamento.html');
	}

	public function novoforma_pagamento($id='',$action=''){
		if($id != '' and $action == "delete"){
			$forma_pagamento = new forma_pagamentoModel();
			$forma_pagamento->where('id',$id)->get();
			$forma_pagamento->delete();
		}
		if($id != '' and $action == "edit"){
			$forma_pagamento = new forma_pagamentoModel();
			$forma_pagamento->where(array('id'=>$id));
			$forma_pagamento->get();
			$this->smarty->assign('forma_pagamentos',$forma_pagamento);				
		}
		if(isset($_POST['nome'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$forma_pagamento = new forma_pagamentoModel();
				$forma_pagamento->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['nome']));	
			}else{			
				$forma_pagamento = new forma_pagamentoModel();
				$forma_pagamento->nome = $_POST['nome'];
				$forma_pagamento->save();	
			}
		}
			$forma_pagamentos = new forma_pagamentoModel();
			$forma_pagamentos->get_iterated();	
			$this->smarty->assign('forma_pagamento',$forma_pagamentos);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('consulta/forma_pagamento.html');
		
	}
	
	public function novoforma_pagamentointerna($id='',$action=''){
		if($id != '' and $action == "delete"){
			$forma_pagamento = new forma_pagamentoModel();
			$forma_pagamento->where('id',$id)->get();
			$forma_pagamento->delete();
		}
		if($id != '' and $action == "edit"){
			$forma_pagamento = new forma_pagamentoModel();
			$forma_pagamento->where(array('id'=>$id));
			$forma_pagamento->get();
			$this->smarty->assign('forma_pagamentos',$forma_pagamento);				
		}
		if(isset($_POST['nome'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$forma_pagamento = new forma_pagamentoModel();
				$forma_pagamento->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['nome']));	
			}else{			
				$forma_pagamento = new forma_pagamentoModel();
				$forma_pagamento->nome = $_POST['nome'];
				$forma_pagamento->save();	
			}
		}
			$forma_pagamentos = new forma_pagamentoModel();
			$forma_pagamentos->get_iterated();	
			$this->smarty->assign('forma_pagamento',$forma_pagamentos);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('visualizar/forma_pagamento.html');
		
	}	
	
	public function teste(){
			$forma_pagamento = new forma_pagamentoModel();
			$forma_pagamento->get();
			$this->smarty->assign('forma_pagamento',$forma_pagamento);

			$edit = 'false';
			$this->smarty->assign('edit',$edit);	
			
			$this->smarty->view('visualizar/forma_pagamento.html');
	}		
	
	
}