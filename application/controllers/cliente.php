<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');
class Cliente extends CI_Controller {
	public function index()
	{
		
		$cliente = new clienteModel();
		$cliente->get();
		$this->smarty->assign('cliente',$cliente);
		
 		$edit = 'false';
		$tipo_pessoa = 'f';
		$this->smarty->assign('edit',$edit);	
		$this->smarty->assign('tipo_pessoa',$tipo_pessoa);
		$this->smarty->view('consulta/cliente.html');
	}

	public function novocliente($id='',$action=''){

		$erros = array();

		echo '<pre>';
		var_dump($action);
		die();

		if (($action != 'edit')){ 
			if (($action != 'delete')){
				if(strlen($_POST['condicao_pagamento_id'] == '')){
					$erros[] = "Selecione uma Condição de Pagamento.";
				}
				if(strlen($_POST['cidade_id'] == '')){
					$erros[] = "Selecione uma Cidade.";
				}		
				if(strlen($_POST['sexo'] == '')){
					$erros[] = "Selecione um Sexo.";
				}	

				if(isset($_POST['cpf'])){	
					if(strlen($_POST['cpf'] != '')){
						if ($this->isCpfValid($_POST['cpf'])){
						}else{
							$erros[] = "CPF Inválido .";
						}
					}

				}
				$this->smarty->assign('erros',$erros);
	     	}
	     }
		if(count($erros) > 0){
			$edit = 'true';
			$this->smarty->assign('edit',$edit);
			$this->smarty->view('consulta/cliente.html');
		}else{		

			if($id != '' and $action == "delete"){
				$cliente = new clienteModel();
				$cliente->where('id',$id)->get();
				$cliente->delete();
			}
			if($id != '' and $action == "edit"){
				$cliente = new clienteModel();
				$cliente->where(array('id'=>$id));
			$cliente->get();
				$this->smarty->assign('clientes',$cliente);				
			}
			
			if(isset($_POST['nome'])){			
				if((isset($_POST['id'])) and ($_POST['id'] != '')){
					$cliente = new clienteModel();
					if (!isset($_POST['sexo'])){
						$_POST['sexo'] = NULL;
					}
					$cliente->where(array('id'=>$_POST['id']))->update(array('nome'=>$_POST['nome'],
																				  'tipo_pessoa'=>$_POST['tipo_pessoa'],
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
																				  'data_alteracao'=>date("Y-j-n"),
																				  'insestadual'=>$_POST['insestadual'],
																				  'cpf'=>$_POST['cpf'],
																				  'rg'=>$_POST['rg'],
																				  'cnpj'=>$_POST['cnpj'],
																				  'condicao_pagamento_id'=>$_POST['condicao_pagamento_id'],
																				  'cidade_id'=>$_POST['cidade_id'],
																				  ));	
				}else{			
					$cliente = new clienteModel();
					$cliente->nome = $_POST['nome'];
					$cliente->tipo_pessoa = $_POST['tipo_pessoa'];
					$cliente->data_nascimento = $_POST['data_nascimento'];
					if (isset($_POST['sexo'])){
						$cliente->sexo = $_POST['sexo'];
					}
					$cliente->logradouro = $_POST['logradouro'];
					$cliente->bairro = $_POST['bairro'];
					$cliente->numero = $_POST['numero'];
					$cliente->complemento = $_POST['complemento'];
					$cliente->cep = $_POST['cep'];
					$cliente->tel_residencial = $_POST['tel_residencial'];
					$cliente->tel_comercial = $_POST['tel_comercial'];
					$cliente->celular = $_POST['celular'];
					$cliente->email = $_POST['email'];
					$cliente->data_cadastro = date("Y-j-n");  
					$cliente->data_alteracao = $_POST['data_alteracao'];
					$cliente->insestadual = $_POST['insestadual'];
					$cliente->rg = $_POST['rg'];
					$cliente->cpf = $_POST['cpf'];
					$cliente->cnpj = $_POST['cnpj'];
					$cliente->condicao_pagamento_id = $_POST['condicao_pagamento_id'];
					$cliente->cidade_id = $_POST['cidade_id'];
					$cliente->save();	
				}
			}
				$clientes = new clienteModel();
				$clientes->get_iterated();	
				$this->smarty->assign('cliente',$clientes);

				if($action == "edit"){
					$edit = 'true';
					$this->smarty->assign('edit',$edit);
				}else{
					$tipo_pessoa = 'f';
						$this->smarty->assign('tipo_pessoa',$tipo_pessoa);
					$edit = 'false';
					$this->smarty->assign('edit',$edit);
				}			
		
			$this->smarty->view('consulta/cliente.html');
		}	
	}
	
	function isCpfValid($cpf){
		$j=0;
		$num=array();
		for($i=0; $i<(strlen($cpf)); $i++){
			if(is_numeric($cpf[$i])){
				$num[$j]=$cpf[$i];
				$j++;
			}
		}
		if(count($num)!=11){
			$isCpfValid=false;
		}else{
			
			for($i=0; $i<10; $i++){
				if ($num[0]==$i && $num[1]==$i && $num[2]==$i && $num[3]==$i && $num[4]==$i && $num[5]==$i && $num[6]==$i && $num[7]==$i && $num[8]==$i){
					$isCpfValid=false;
					break;
				}
			}
		}
		if(!isset($isCpfValid)){
			$j=10;
			for($i=0; $i<9; $i++){
				$multiplica[$i]=$num[$i]*$j;
				$j--;
			}
			$soma = array_sum($multiplica);	
			$resto = $soma%11;			
			if($resto<2){
				$dg=0;
			}else{
				$dg=11-$resto;
			}
			if($dg!=$num[9]){
				$isCpfValid=false;
			}
		}
		if(!isset($isCpfValid)){
			$j=11;
			for($i=0; $i<10; $i++){
				$multiplica[$i]=$num[$i]*$j;
				$j--;
			}
			$soma = array_sum($multiplica);
			$resto = $soma%11;
			if($resto<2){
				$dg=0;
			}else{
				$dg=11-$resto;
			}
			if($dg!=$num[10]){
				$isCpfValid=false;
			}else{
				$isCpfValid=true;
			}
		}
		return $isCpfValid;					
	}	
	
}