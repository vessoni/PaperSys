<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');
class grupo extends CI_Controller {
	public function index()
	{

		$grupo = new grupoModel();
		$grupo->get_iterated();
		$this->smarty->assign('grupo',$grupo);
		$edit = 'false';
		$this->smarty->assign('edit',$edit);				
		$this->smarty->view('consulta/grupo.html');
	}

	public function novogrupo($id='',$action=''){
		if($id != '' and $action == "delete"){
			$grupo = new grupoModel();
			$grupo->where('id',$id)->get();
			$grupo->delete();
		}
		if($id != '' and $action == "edit"){
			$grupo = new grupoModel();
			$grupo->where(array('id'=>$id));
			$grupo->get();
			$this->smarty->assign('grupos',$grupo);				
		}
		if(isset($_POST['grupo'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$grupo = new grupoModel();
				$grupo->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['grupo']));	
			}else{			
				$grupo = new grupoModel();
				$grupo->nome = $_POST['grupo'];
				$grupo->save();	
			}
		}
			$grupos = new grupoModel();
			$grupos->get_iterated();	
			$this->smarty->assign('grupo',$grupos);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('consulta/grupo.html');
		
	}
	
	public function novogrupointerna($id='',$action=''){
		if($id != '' and $action == "delete"){
			$grupo = new grupoModel();
			$grupo->where('id',$id)->get();
			$grupo->delete();
		}
		if($id != '' and $action == "edit"){
			$grupo = new grupoModel();
			$grupo->where(array('id'=>$id));
			$grupo->get();
			$this->smarty->assign('grupos',$grupo);				
		}
		if(isset($_POST['grupo'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$grupo = new grupoModel();
				$grupo->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['grupo']));	
			}else{			
				$grupo = new grupoModel();
				$grupo->nome = $_POST['grupo'];
				$grupo->save();	
			}
		}
			$grupos = new grupoModel();
			$grupos->get_iterated();	
			$this->smarty->assign('grupo',$grupos);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('visualizar/grupo.html');
		
	}	

	
	public function teste(){
			$grupo = new grupoModel();
			$grupo->get_iterated();
			$this->smarty->assign('grupo',$grupo);
			$edit = 'false';
			$this->smarty->assign('edit',$edit);	
			
			$this->smarty->view('visualizar/grupo.html');
	}	


}