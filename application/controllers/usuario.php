<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');
class usuario extends CI_Controller {
	public function index()
	{
		$usuario = new usuarioModel();
		$usuario->get();
		$this->smarty->assign('usuario',$usuario);

		$edit = 'false';
		$this->smarty->assign('edit',$edit);
		$this->smarty->view('consulta/usuario.html');
	}
	
	public function novousuario($id='',$action=''){
		if($id != '' and $action == "delete"){
			$usuario = new usuarioModel();
			$usuario->where('id',$id)->get();
			$usuario->delete();
		}
		if($id != '' and $action == "edit"){
			$usuario = new usuarioModel();
			$usuario->where(array('id'=>$id));
			$usuario->get();
			$this->smarty->assign('usuarios',$usuario);				
		}
		if(isset($_POST['login'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$usuario = new usuarioModel();
				$usuario->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['nome'],
																		 'tipo_login_id'=>$_POST['tipo_login_id'],
																		 'login'=>$_POST['login'],
																		 'senha'=>$_POST['senha'],
																		 ));	
			}else{			
				$usuario = new usuarioModel();
				$usuario->nome = $_POST['nome'];
				$usuario->tipo_login_id = $_POST['tipo_login_id'];
				$usuario->login = $_POST['login'];
				$usuario->senha = $_POST['senha'];
				$usuario->save();	
			}
		}

			$usuario = new usuarioModel();
			$usuario->get_iterated();	
			$this->smarty->assign('usuario',$usuario);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('consulta/usuario.html');
		
	}
	
	public function novousuariointerna($id='',$action=''){
		if($id != '' and $action == "delete"){
			$usuario = new usuarioModel();
			$usuario->where('id',$id)->get();
			$usuario->delete();
		}
		if($id != '' and $action == "edit"){
			$usuario = new usuarioModel();
			$usuario->where(array('id'=>$id));
			$usuario->get();
			$this->smarty->assign('usuarios',$usuario);				
		}
		if(isset($_POST['usuario'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$usuario = new usuarioModel();
				$usuario->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['usuario'],'sigla'=>$_POST['sigla'],'pais_id'=>$_POST['idpais']));	
			}else{			
				$usuario = new usuarioModel();
				$usuario->nome = $_POST['usuario'];
				$usuario->sigla = $_POST['sigla'];
				$usuario->ddi = $_POST['ddi'];
				$usuario->pais_id = $_POST['idpais'];
				$usuario->save();	
			}
		}

			$usuario = new usuarioModel();
			$usuario->get_iterated();	
			$this->smarty->assign('usuario',$usuario);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('visualizar/usuario.html');
		
	}	
	public function teste(){
			$usuario = new usuarioModel();
			$usuario->get_iterated();
			$this->smarty->assign('usuario',$usuario);
			$edit = 'false';
			$this->smarty->assign('edit',$edit);	
			
			$this->smarty->view('visualizar/usuario.html');
	}		
		
}