<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');
class Funcionario extends CI_Controller {
	public function index()
	{
		
		$funcionario = new funcionarioModel();
		$funcionario->get();
		$this->smarty->assign('funcionario',$funcionario);
		
		$edit = 'false';
		$this->smarty->assign('edit',$edit);			
		$this->smarty->view('consulta/funcionario.html');
		
	}
	
	
	public function novofuncionario($id='',$action=''){
		$erros = array();

		if (($action != 'edit')){ 
			if (($action != 'delete')){
				if(strlen($_POST['cargo_id'] == '')){
					$erros[] = "Selecione um Cargo.";
				}
				if(strlen($_POST['cidade_id'] == '')){
					$erros[] = "Selecione uma Cidade.";
				}		
				if(strlen($_POST['sexo'] == '')){
					$erros[] = "Selecione um Sexo.";
				}							
				$this->smarty->assign('erros',$erros);
	     	}
	     }
		if(count($erros) > 0){
			$edit = 'true';
			$this->smarty->assign('edit',$edit);
			$this->smarty->view('consulta/funcionario.html');
		}else{

			if($id != '' and $action == "delete"){
				$funcionario = new funcionarioModel();
				$funcionario->where('id',$id)->get();
			
				$funcionario->delete();	

			}
			if($id != '' and $action == "edit"){
				$funcionario = new funcionarioModel();
				$funcionario->where(array('id'=>$id));
				$funcionario->get();
				$this->smarty->assign('funcionarios',$funcionario);				
			}
			
			if(isset($_POST['nome'])){			
				if((isset($_POST['id'])) and ($_POST['id'] != '')){
					$funcionario = new funcionarioModel();
					
					$funcionario->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['nome'],
																				  'data_nascimento'=>$_POST['data_nascimento'],
																				  'sexo'=>$_POST['sexo'],
																				  'logradouro'=>$_POST['logradouro'],
																				  'bairro'=>$_POST['bairro'],
																				  'numero'=>$_POST['numero'],
																				  'complemento'=>$_POST['complemento'],
																				  'cep'=>$_POST['cep'],
																				  'tel_residencial'=>$_POST['tel_residencial'],
																				  'tel_comercial'=>$_POST['tel_comercial'],
																				  'celular'=>$_POST['celular'],
																				  'email'=>$_POST['email'],
																				  'comissao'=>$_POST['comissao'],
																				  'data_admissao'=>$_POST['data_admissao'],
																				  'data_demissao'=>$_POST['data_demissao'],
																				  'clt'=>$_POST['clt'],
																				  'cpf'=>$_POST['cpf'],
																				  'rg'=>$_POST['rg'],
																				  'obs'=>$_POST['obs'],
																				  'salario'=>$_POST['salario'],
																				  'cargo_id'=>$_POST['cargo_id'],
																				  'cidade_id'=>$_POST['cidade_id'],
																				  ));	
				}else{			
				
					$funcionario = new funcionarioModel();
					$funcionario->nome = $_POST['nome'];
					$funcionario->data_nascimento = $_POST['data_nascimento'];
					$funcionario->sexo = $_POST['sexo'];
					$funcionario->logradouro = $_POST['logradouro'];
					$funcionario->bairro = $_POST['bairro'];
					$funcionario->numero = $_POST['numero'];
					$funcionario->complemento = $_POST['complemento'];
					$funcionario->cep = $_POST['cep'];
					$funcionario->tel_residencial = $_POST['tel_residencial'];
					$funcionario->tel_comercial = $_POST['tel_comercial'];
					$funcionario->celular = $_POST['celular'];
					$funcionario->email = $_POST['email'];
					$funcionario->comissao = $_POST['comissao'];
					$funcionario->data_admissao = $_POST['data_admissao'];
					$funcionario->data_demissao = $_POST['data_demissao'];
					$funcionario->clt = $_POST['clt'];
					$funcionario->cpf = $_POST['cpf'];
					$funcionario->rg = $_POST['rg'];
					$funcionario->obs = $_POST['obs'];
					$funcionario->salario = $_POST['salario'];
					$funcionario->cargo_id = $_POST['cargo_id'];
					$funcionario->cidade_id = $_POST['cidade_id'];
					$funcionario->save();	
				}
			}
				$funcionarios = new funcionarioModel();
				$funcionarios->get_iterated();	
				$this->smarty->assign('funcionario',$funcionarios);

				if($action == "edit"){
					$edit = 'true';
					$this->smarty->assign('edit',$edit);
				}else{
					$edit = 'false';
					$this->smarty->assign('edit',$edit);
				}			
		
			$this->smarty->view('consulta/funcionario.html');
		}	
	}
	
	public function teste(){
			$funcionario = new funcionarioModel();
			$funcionario->get_iterated();
			$this->smarty->assign('funcionario',$funcionario);
			$edit = 'false';
			$this->smarty->assign('edit',$edit);	
			
			$this->smarty->view('visualizar/funcionario.html');
	}			
}