<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');
class Pais extends CI_Controller {
	public function index()
	{
		$pais = new PaisModel();
		$pais->get_iterated();
		$this->smarty->assign('pais',$pais);
		$edit = 'false';
		$this->smarty->assign('edit',$edit);		

		$this->smarty->view('consulta/pais.html');
	}
	
	public function novopais($id='',$action=''){
		 $erros = array();

		if (($action != 'edit')){ 
			if (($action != 'delete')){
				if(strlen($_POST['pais'] == '')){
					$erros[] = "Pais inválido.";
				}
				if(strlen($_POST['ddi'] <= 0)){
					$erros[] = "DDI inválido.";
				}	
				if(strlen($_POST['sigla'] == '')){
					$erros[] = "Sigla inválido.";
				}
			
				$this->smarty->assign('erros',$erros);
	     	}
	     }
		if(count($erros) > 0){
			$edit = 'true';
			$this->smarty->assign('edit',$edit);
			$this->smarty->view('consulta/pais.html');
		}else{


			if($id != '' and $action == "delete"){
				$pais = new paisModel();
				$pais->where('id',$id)->get();
				$pais->delete();
			}
			if($id != '' and $action == "edit"){
				$pais = new paisModel();
				$pais->where(array('id'=>$id));
				$pais->get();
				$this->smarty->assign('paises',$pais);				
			}
			if(isset($_POST['pais'])){			
				if((isset($_POST['id'])) and ($_POST['id'] != '')){
					$pais = new paisModel();
					$pais->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['pais'],'sigla'=>$_POST['sigla'],'ddi'=>$_POST['ddi'],));	
				}else{			
					$pais = new paisModel();
					$pais->nome = $_POST['pais'];
					$pais->sigla = $_POST['sigla'];
					$pais->ddi = $_POST['ddi'];
					$pais->save();	
				}
			}
				$paiss = new paisModel();
				$paiss->get_iterated();	
				$this->smarty->assign('pais',$paiss);

				if($action == "edit"){
					$edit = 'true';
					$this->smarty->assign('edit',$edit);
				}else{
					$edit = 'false';
					$this->smarty->assign('edit',$edit);
				}			
		
			$this->smarty->view('consulta/pais.html');
		}
			
	}
	
	public function novopaisinterna($id='',$action=''){
		if($id != '' and $action == "delete"){
			$pais = new paisModel();
			$pais->where('id',$id)->get();
			$pais->delete();
		}
		if($id != '' and $action == "edit"){
			$pais = new paisModel();
			$pais->where(array('id'=>$id));
			$pais->get();
			$this->smarty->assign('paises',$pais);				
		}
		if(isset($_POST['pais'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$pais = new paisModel();
				$pais->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['pais'],'sigla'=>$_POST['sigla'],'ddi'=>$_POST['ddi'],));	
			}else{			
				$pais = new paisModel();
				$pais->nome = $_POST['pais'];
				$pais->sigla = $_POST['sigla'];
				$pais->ddi = $_POST['ddi'];
				$pais->save();	
			}
		}

			$paiss = new paisModel();
			$paiss->get_iterated();	
			$this->smarty->assign('pais',$paiss);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
		$this->smarty->view('visualizar/pais.html');
	}	
	
	public function teste(){
			$pais = new PaisModel();
			$pais->get_iterated();
			$this->smarty->assign('pais',$pais);
			$edit = 'false';
			$this->smarty->assign('edit',$edit);	
			
			$this->smarty->view('visualizar/pais.html');
	}
	
}