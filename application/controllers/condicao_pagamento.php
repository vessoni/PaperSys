<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');
class Condicao_pagamento extends CI_Controller {
	public function index()
	{
		$condicao_pagamento = new condicao_pagamentoModel();
		$condicao_pagamento->get();
		$this->smarty->assign('condicao_pagamento',$condicao_pagamento);
		
		$edit = 'false';
		$this->smarty->assign('edit',$edit);			
		$this->smarty->view('consulta/condicao_pagamento.html');
	}

	public function novocondicao_pagamento($id='',$action=''){
		
		if($id != '' and $action == "delete"){
			$condicao_pagamento = new condicao_pagamentoModel();
			$condicao_pagamento->where('id',$id)->get();
			$condicao_pagamento->delete();
		}
		if($id != '' and $action == "edit"){
			$condicao_pagamento = new condicao_pagamentoModel();
			$condicao_pagamento->where(array('id'=>$id));
			$condicao_pagamento->get();
			
			$parcela = new parcelaModel();
			$parcela->where(array('condicao_pagamento_id'=>$id));
			$parcela->get();
			$this->smarty->assign('parcela',$parcela);
			$this->smarty->assign('condicao_pagamentos',$condicao_pagamento);				
		}
		if(isset($_POST['nome'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$condicao_pagamento = new condicao_pagamentoModel();
				$condicao_pagamento->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['nome']));	
			}else{			
				$condicao_pagamento = new condicao_pagamentoModel();
				$condicao_pagamento->nome = $_POST['nome'];
				$condicao_pagamento->taxa = $_POST['juros'];
				$condicao_pagamento->forma_pagamento_id = $_POST['forma_pagamento_id'];
				$condicao_pagamento->save();	
				$condicao_pagamento = new condicao_pagamentoModel();
				$condicao_pagamento->where('nome',$_POST['nome'])->get();
	
				session_start();
				if (isset($_SESSION['parcela'])){
					foreach ($_SESSION['parcela'] as $a){
						
						$parcela = new parcelaModel();
						$parcela->dia = $a["dias"];
						$parcela->numero = $a["numero"];
						$parcela->percentual = $a["percentual"];
						$parcela->condicao_pagamento_id = $condicao_pagamento->id;
						$parcela->save();
					}
				unset($_SESSION['parcela']);
				}
			}
		}
			$condicao_pagamentos = new condicao_pagamentoModel();
			$condicao_pagamentos->get_iterated();	
			$this->smarty->assign('condicao_pagamento',$condicao_pagamentos);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('consulta/condicao_pagamento.html');
		
	}
	
	public function novocondicao_pagamentointerna($id='',$action=''){

		if($id != '' and $action == "delete"){
			$condicao_pagamento = new condicao_pagamentoModel();
			$condicao_pagamento->where('id',$id)->get();
			$condicao_pagamento->delete();
		}
		if($id != '' and $action == "edit"){
			$condicao_pagamento = new condicao_pagamentoModel();
			$condicao_pagamento->where(array('id'=>$id));
			$condicao_pagamento->get();
			$this->smarty->assign('condicao_pagamentos',$condicao_pagamento);				
		}
		if(isset($_POST['nome'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$condicao_pagamento = new condicao_pagamentoModel();
				$condicao_pagamento->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['nome']));	
			}else{			
				$condicao_pagamento = new condicao_pagamentoModel();
				$condicao_pagamento->nome = $_POST['nome'];
				$condicao_pagamento->save();	
			}
		}
			$condicao_pagamentos = new condicao_pagamentoModel();
			$condicao_pagamentos->get_iterated();	
			$this->smarty->assign('condicao_pagamento',$condicao_pagamentos);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('visualizar/condicao_pagamento.html');
		
	}
	
	public function novoparcelamento(){
		
		if (isset($_POST['limpar'])){
			session_start();
			unset($_SESSION['parcela']);
		  $edit = 'true';
		  $this->smarty->assign('edit',$edit);
		}else{

				if (!isset($_SESSION['parcela'])){
					session_start();
					$_SESSION['parcela'][$_POST['numero']] = array('numero'=>$_POST['numero'],'dias'=>$_POST['dias'],'percentual'=>$_POST['percentual']);
					$parcelas = $_SESSION['parcela'];

					}

				$edit = 'true';
				$this->smarty->assign('edit',$edit);
				$this->smarty->assign('parcelas',$parcelas);
		}
		$this->smarty->view('consulta/condicao_pagamento.html');
		
	}
	
	public function teste(){
			$condicao_pagamento = new condicao_pagamentoModel();
			$condicao_pagamento->get_iterated();
			$this->smarty->assign('condicao_pagamento',$condicao_pagamento);
			$edit = 'false';
			$this->smarty->assign('edit',$edit);	
			
			$this->smarty->view('visualizar/condicao_pagamento.html');
	}				
	
	
}