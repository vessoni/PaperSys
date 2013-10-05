<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');
class fornecedor extends CI_Controller {
	public function index()
	{
		
		$fornecedor = new fornecedorModel();
		$fornecedor->get();
		$this->smarty->assign('fornecedor',$fornecedor);
		
 		$edit = 'false';
		$tipo_pessoa = 'f';
		$this->smarty->assign('edit',$edit);	
				$this->smarty->assign('tipo_pessoa',$tipo_pessoa);
		$this->smarty->view('consulta/fornecedor.html');
	}

	public function novofornecedor($id='',$action=''){

		if($id != '' and $action == "delete"){
			$fornecedor = new fornecedorModel();
			$fornecedor->where('id',$id)->get();
			$fornecedor->delete();
		}
		if($id != '' and $action == "edit"){
			$fornecedor = new fornecedorModel();
			$fornecedor->where(array('id'=>$id));
		$fornecedor->get();
			$this->smarty->assign('fornecedors',$fornecedor);				
		}
		
		if(isset($_POST['nome'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$fornecedor = new fornecedorModel();
				if (!isset($_POST['sexo'])){
					$_POST['sexo'] = NULL;
				}
				$fornecedor->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['nome'],
																			'nome'=>$_POST['nome'],
																			'razao'=>$_POST['razao'],
																			'apelido'=>$_POST['apelido'],
																			'nome_fantasia'=>$_POST['nome_fantasia'],
																			'tipo_pessoa'=>$_POST['tipo_pessoa'],
																			
																			  'logradouro'=>$_POST['logradouro'],
																			  'bairro'=>$_POST['bairro'],
																			  'numero'=>$_POST['numero'],
																			  'complemento'=>$_POST['complemento'],
																			  'cep'=>$_POST['cep'],
																			  'fax'=>$_POST['fax'],
																			  'telefone'=>$_POST['telefone'],
																			  'celular'=>$_POST['celular'],
																			  'email'=>$_POST['email'],
																			  'site'=>$_POST['site'],
																			   'nome_contato'=>$_POST['nome_contato'],
																			  'data_alteracao'=>date("Y-j-n"),
																			  'insestadual'=>$_POST['insestadual'],
																			  'cpf'=>$_POST['cpf'],
																			  'rg'=>$_POST['rg'],
																			  'cnpj'=>$_POST['cnpj'],
																			  'condicao_pagamento_id'=>$_POST['condicao_pagamento_id'],
																			  'cidade_id'=>$_POST['cidade_id'],
																			  ));	
			}else{			
				$fornecedor = new fornecedorModel();
				$fornecedor->nome = $_POST['nome'];
				$fornecedor->razao = $_POST['razao'];
				$fornecedor->apelido = $_POST['apelido'];
				$fornecedor->nome_fantasia = $_POST['nome_fantasia'];
				$fornecedor->tipo_pessoa = $_POST['tipo_pessoa'];
				$fornecedor->logradouro = $_POST['logradouro'];
				$fornecedor->bairro = $_POST['bairro'];
				$fornecedor->numero = $_POST['numero'];
				$fornecedor->complemento = $_POST['complemento'];
				$fornecedor->cep = $_POST['cep'];
				$fornecedor->fax = $_POST['fax'];
				$fornecedor->telefone = $_POST['telefone'];
				$fornecedor->celular = $_POST['celular'];
				$fornecedor->email = $_POST['email'];
				$fornecedor->site = $_POST['site'];
				$fornecedor->nome_contato = $_POST['nome_contato'];
				$fornecedor->data_cadastro = date("Y-j-n");  
				$fornecedor->insestadual = $_POST['insestadual'];
				$fornecedor->rg = $_POST['rg'];
				$fornecedor->cpf = $_POST['cpf'];
				$fornecedor->cnpj = $_POST['cnpj'];
				$fornecedor->condicao_pagamento_id = $_POST['condicao_pagamento_id'];
				$fornecedor->cidade_id = $_POST['cidade_id'];
				$fornecedor->save();	
			}
		}
			$fornecedors = new fornecedorModel();
			$fornecedors->get_iterated();	
			$this->smarty->assign('fornecedor',$fornecedors);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$tipo_pessoa = 'f';
					$this->smarty->assign('tipo_pessoa',$tipo_pessoa);
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('consulta/fornecedor.html');
		
	}
	
}