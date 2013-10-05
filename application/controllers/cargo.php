<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');
class cargo extends CI_Controller {
	public function index()
	{

		$cargo = new cargoModel();
		$cargo->get_iterated();
		$this->smarty->assign('cargo',$cargo);
		$edit = 'false';
		$this->smarty->assign('edit',$edit);				
		$this->smarty->view('consulta/cargo.html');
	}

	public function novocargo($id='',$action=''){
		if($id != '' and $action == "delete"){
			$cargo = new cargoModel();
			$cargo->where('id',$id)->get();
			$cargo->delete();
		}
		if($id != '' and $action == "edit"){
			$cargo = new cargoModel();
			$cargo->where(array('id'=>$id));
			$cargo->get();
			$this->smarty->assign('cargos',$cargo);				
		}
		if(isset($_POST['cargo'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$cargo = new cargoModel();
				$cargo->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['cargo']));	
			}else{			
				$cargo = new cargoModel();
				$cargo->nome = $_POST['cargo'];
				$cargo->save();	
			}
		}
			$cargos = new cargoModel();
			$cargos->get_iterated();	
			$this->smarty->assign('cargo',$cargos);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('consulta/cargo.html');
		
	}
	
	public function novocargointerna($id='',$action=''){
		if($id != '' and $action == "delete"){
			$cargo = new cargoModel();
			$cargo->where('id',$id)->get();
			$cargo->delete();
		}
		if($id != '' and $action == "edit"){
			$cargo = new cargoModel();
			$cargo->where(array('id'=>$id));
			$cargo->get();
			$this->smarty->assign('cargos',$cargo);				
		}
		if(isset($_POST['cargo'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$cargo = new cargoModel();
				$cargo->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['cargo']));	
			}else{			
				$cargo = new cargoModel();
				$cargo->nome = $_POST['cargo'];
				$cargo->save();	
			}
		}
			$cargos = new cargoModel();
			$cargos->get_iterated();	
			$this->smarty->assign('cargo',$cargos);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('visualizar/cargo.html');
		
	}	
	public function teste(){

		$cargo = new cargoModel();
		$cargo->get_iterated();
		$this->smarty->assign('cargo',$cargo);

			$edit = 'false';
			$this->smarty->assign('edit',$edit);	
			
			$this->smarty->view('visualizar/cargo.html');
	}	



}