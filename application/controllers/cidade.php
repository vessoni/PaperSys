<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');
class Cidade extends CI_Controller {
	public function index()
	{
		$cidade = new cidadeModel();
		$cidade->get();
		$this->smarty->assign('cidade',$cidade);

		$edit = 'false';
		$this->smarty->assign('edit',$edit);
		$this->smarty->view('consulta/cidade.html');
	}
	
	public function novocidade($id='',$action=''){              
		if($id != '' and $action == "delete"){
			$cidade = new cidadeModel();
			$cidade->where('id',$id)->get();
			$cidade->delete();
		}
		if($id != '' and $action == "edit"){
			$cidade = new cidadeModel();
			$cidade->where(array('id'=>$id));
			$cidade->get();
			$this->smarty->assign('cidades',$cidade);				
		}
		if(isset($_POST['cidade'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$cidade = new cidadeModel();
				$cidade->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['cidade'],'ddd'=>$_POST['ddd'],'estado_id'=>$_POST['idestado']));	
			}else{			
				$cidade = new cidadeModel();
				$cidade->nome = $_POST['cidade'];
				$cidade->ddd = $_POST['ddd'];
				$cidade->estado_id = $_POST['idestado'];
				$cidade->save();	
			}
		}

			$cidade = new cidadeModel();
			$cidade->get_iterated();	

			$this->smarty->assign('cidade',$cidade);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('consulta/cidade.html');
		
	}
	
	public function novocidadeinterna($id='',$action=''){
	
		if($id != '' and $action == "delete"){
			$cidade = new cidadeModel();
			$cidade->where('id',$id)->get();
			$cidade->delete();
		}
		if($id != '' and $action == "edit"){
			$cidade = new cidadeModel();
			$cidade->where(array('id'=>$id));
			$cidade->get();
			$this->smarty->assign('cidades',$cidade);				
		}
		if(isset($_POST['cidade'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$cidade = new cidadeModel();
				$cidade->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['cidade'],'ddd'=>$_POST['ddd'],'estado_id'=>$_POST['idestado']));	
			}else{			
				$cidade = new cidadeModel();
				$cidade->nome = $_POST['cidade'];
				$cidade->ddd = $_POST['ddd'];
				$cidade->estado_id = $_POST['idestado'];
				$cidade->save();	
			}
		}

			$cidade = new cidadeModel();
			$cidade->get_iterated();	

			$this->smarty->assign('cidade',$cidade);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('visualizar/cidade.html');		
	}	
	public function teste(){
			$cidade = new cidadeModel();
			$cidade->get();
			$this->smarty->assign('cidade',$cidade);

			$edit = 'false';
			$this->smarty->assign('edit',$edit);	
			
			$this->smarty->view('visualizar/cidade.html');
	}		
		
}