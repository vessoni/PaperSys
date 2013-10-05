<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');
class tipo_login extends CI_Controller {
	public function index()
	{

		$tipo_login = new tipo_loginModel();
		$tipo_login->get_iterated();
		$this->smarty->assign('tipo_login',$tipo_login);
		$edit = 'false';
		$this->smarty->assign('edit',$edit);				
		$this->smarty->view('consulta/tipo_login.html');
	}

	public function novotipo_login($id='',$action=''){
		if($id != '' and $action == "delete"){
			$tipo_login = new tipo_loginModel();
			$tipo_login->where('id',$id)->get();
			$tipo_login->delete();
		}
		if($id != '' and $action == "edit"){
			$tipo_login = new tipo_loginModel();
			$tipo_login->where(array('id'=>$id));
			$tipo_login->get();
			$this->smarty->assign('tipo_logins',$tipo_login);				
		}
		if(isset($_POST['tipo_login'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$tipo_login = new tipo_loginModel();
				$tipo_login->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['tipo_login']));	
			}else{			
				$tipo_login = new tipo_loginModel();
				$tipo_login->nome = $_POST['tipo_login'];
				$tipo_login->save();	
			}
		}
			$tipo_logins = new tipo_loginModel();
			$tipo_logins->get_iterated();	
			$this->smarty->assign('tipo_login',$tipo_logins);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('consulta/tipo_login.html');
		
	}
	
	public function novotipo_logininterna($id='',$action=''){
		if($id != '' and $action == "delete"){
			$tipo_login = new tipo_loginModel();
			$tipo_login->where('id',$id)->get();
			$tipo_login->delete();
		}
		if($id != '' and $action == "edit"){
			$tipo_login = new tipo_loginModel();
			$tipo_login->where(array('id'=>$id));
			$tipo_login->get();
			$this->smarty->assign('tipo_logins',$tipo_login);				
		}
		if(isset($_POST['tipo_login'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$tipo_login = new tipo_loginModel();
				$tipo_login->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['tipo_login']));	
			}else{			
				$tipo_login = new tipo_loginModel();
				$tipo_login->nome = $_POST['tipo_login'];
				$tipo_login->save();	
			}
		}
			$tipo_logins = new tipo_loginModel();
			$tipo_logins->get_iterated();	
			$this->smarty->assign('tipo_login',$tipo_logins);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('visualizar/tipo_login.html');
		
	}	

	
	public function teste(){
			$tipo_login = new tipo_loginModel();
			$tipo_login->get_iterated();
			$this->smarty->assign('tipo_login',$tipo_login);
			$edit = 'false';
			$this->smarty->assign('edit',$edit);	
			
			$this->smarty->view('visualizar/tipo_login.html');
	}	


}