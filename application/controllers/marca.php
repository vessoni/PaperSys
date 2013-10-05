<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');
class marca extends CI_Controller {
	public function index()
	{

		$marca = new marcaModel();
		$marca->get_iterated();
		$this->smarty->assign('marca',$marca);
		$edit = 'false';
		$this->smarty->assign('edit',$edit);				
		$this->smarty->view('consulta/marca.html');
	}

	public function novomarca($id='',$action=''){
		if($id != '' and $action == "delete"){
			$marca = new marcaModel();
			$marca->where('id',$id)->get();
			$marca->delete();
		}
		if($id != '' and $action == "edit"){
			$marca = new marcaModel();
			$marca->where(array('id'=>$id));
			$marca->get();
			$this->smarty->assign('marcas',$marca);				
		}
		if(isset($_POST['marca'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$marca = new marcaModel();
				$marca->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['marca']));	
			}else{			
				$marca = new marcaModel();
				$marca->nome = $_POST['marca'];
				$marca->save();	
			}
		}
			$marcas = new marcaModel();
			$marcas->get_iterated();	
			$this->smarty->assign('marca',$marcas);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('consulta/marca.html');
		
	}
	
	public function novomarcainterna($id='',$action=''){
		if($id != '' and $action == "delete"){
			$marca = new marcaModel();
			$marca->where('id',$id)->get();
			$marca->delete();
		}
		if($id != '' and $action == "edit"){
			$marca = new marcaModel();
			$marca->where(array('id'=>$id));
			$marca->get();
			$this->smarty->assign('marcas',$marca);				
		}
		if(isset($_POST['marca'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$marca = new marcaModel();
				$marca->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['marca']));	
			}else{			
				$marca = new marcaModel();
				$marca->nome = $_POST['marca'];
				$marca->save();	
			}
		}
			$marcas = new marcaModel();
			$marcas->get_iterated();	
			$this->smarty->assign('marca',$marcas);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('visualizar/marca.html');
		
	}	

	
	public function teste(){
			$marca = new marcaModel();
			$marca->get_iterated();
			$this->smarty->assign('marca',$marca);
			$edit = 'false';
			$this->smarty->assign('edit',$edit);	
			
			$this->smarty->view('visualizar/marca.html');
	}	


}