<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');
class Estado extends CI_Controller {
	public function index()
	{
		$estado = new estadoModel();
		$estado->get();
		$this->smarty->assign('estado',$estado);

		$edit = 'false';
		$this->smarty->assign('edit',$edit);
		$this->smarty->view('consulta/estado.html');
	}
	
	public function novoEstado($id='',$action=''){
		 $erros = array();
		if (($action != 'edit')){ 
			if (($action != 'delete')){
				if(strlen($_POST['estado'] == '')){
					$erros[] = "Estado inválido.";
				}
				if(strlen($_POST['sigla'] == '')){
					$erros[] = "Sigla inválido.";
				}
				if(strlen($_POST['idpais'] == '')){
					$erros[] = "Selecione um Pais.";
				}				
			
				$this->smarty->assign('erros',$erros);
	     	}
	    }
		if(count($erros) > 0){
			$edit = 'true';
			$this->smarty->assign('edit',$edit);
			$this->smarty->view('consulta/estado.html');
		}else{


			if($id != '' and $action == "delete"){
				$estado = new estadoModel();
				$estado->where('id',$id)->get();
				$estado->delete();
			}
			if($id != '' and $action == "edit"){
				$estado = new estadoModel();
				$estado->where(array('id'=>$id));
				$estado->get();
				$this->smarty->assign('estados',$estado);				
			}
			if(isset($_POST['estado'])){			
				if((isset($_POST['id'])) and ($_POST['id'] != '')){
					$estado = new estadoModel();
					$estado->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['estado'],'sigla'=>$_POST['sigla'],'pais_id'=>$_POST['idpais']));	
				}else{			
					$estado = new estadoModel();
					$estado->nome = $_POST['estado'];
					$estado->sigla = $_POST['sigla'];
					$estado->ddi = $_POST['ddi'];
					$estado->pais_id = $_POST['idpais'];
					$estado->save();	
				}
			}

				$estado = new estadoModel();
				$estado->get_iterated();	
				$this->smarty->assign('estado',$estado);

				if($action == "edit"){
					$edit = 'true';
					$this->smarty->assign('edit',$edit);
				}else{
					$edit = 'false';
					$this->smarty->assign('edit',$edit);
				}			
		
			$this->smarty->view('consulta/estado.html');
		}
		
	}
	
	public function novoEstadointerna($id='',$action=''){
		if($id != '' and $action == "delete"){
			$estado = new estadoModel();
			$estado->where('id',$id)->get();
			$estado->delete();
		}
		if($id != '' and $action == "edit"){
			$estado = new estadoModel();
			$estado->where(array('id'=>$id));
			$estado->get();
			$this->smarty->assign('estados',$estado);				
		}
		if(isset($_POST['estado'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$estado = new estadoModel();
				$estado->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['estado'],'sigla'=>$_POST['sigla'],'pais_id'=>$_POST['idpais']));	
			}else{			
				$estado = new estadoModel();
				$estado->nome = $_POST['estado'];
				$estado->sigla = $_POST['sigla'];
				$estado->ddi = $_POST['ddi'];
				$estado->pais_id = $_POST['idpais'];
				$estado->save();	
			}
		}

			$estado = new estadoModel();
			$estado->get_iterated();	
			$this->smarty->assign('estado',$estado);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('visualizar/estado.html');
		
	}	
	public function teste(){
			$estado = new estadoModel();
			$estado->get_iterated();
			$this->smarty->assign('estado',$estado);
			$edit = 'false';
			$this->smarty->assign('edit',$edit);	
			
			$this->smarty->view('visualizar/estado.html');
	}		
		
}