<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');
class produto extends CI_Controller {
	public function index()
	{
		
		$produto = new produtoModel();
		$produto->get();
		$this->smarty->assign('produto',$produto);
		
		$edit = 'false';
		$this->smarty->assign('edit',$edit);			
		$this->smarty->view('consulta/produto.html');
	}
	
	
	public function novoproduto($id='',$action=''){

		if($id != '' and $action == "delete"){
			$produto = new produtoModel();
			$produto->where('id',$id)->get();
			$produto->delete();
		}
		if($id != '' and $action == "edit"){
			$produto = new produtoModel();
			$produto->where(array('id'=>$id));
			$produto->get();
			$this->smarty->assign('produtos',$produto);				
		}
		
		if(isset($_POST['descricao'])){			
			if((isset($_POST['id'])) and ($_POST['id'] != '')){
				$produto = new produtoModel();
				$produto->where(array('id'=>$_POST['id']))->update(array(	  'descricao'=>$_POST['descricao'],
																			  'codigo_barras'=>$_POST['codigo_barras'],
																			  'referencia'=>$_POST['referencia'],
																			  'valor_custo'=>$_POST['valor_custo'],
																			  'valor_venda'=>$_POST['valor_venda'],
																			  'estoque_min'=>$_POST['estoque_min'],
																			  'estoque_atual'=>$_POST['estoque_atual'],
																			 // 'info'=>$_POST['info'],
																			 // 'restricoes'=>$_POST['restricoes'],
																			  'grupo_id'=>$_POST['grupo_id'],
																			  'marca_id'=>$_POST['marca_id'],
																			  ));	
			}else{			
			
				$produto = new produtoModel();
				$produto->descricao = $_POST['descricao'];
				$produto->codigo_barras = $_POST['codigo_barras'];
				$produto->referencia = $_POST['referencia'];
				$produto->valor_custo = $_POST['valor_custo'];
				$produto->valor_venda = $_POST['valor_venda'];
				$produto->estoque_min = $_POST['estoque_min'];
				$produto->estoque_atual = $_POST['estoque_atual'];
			//	$produto->info = $_POST['info'];
			//	$produto->restricoes = $_POST['restricoes'];
				$produto->grupo_id = $_POST['grupo_id'];
				$produto->marca_id = $_POST['marca_id'];
				$produto->save();	
			}
		}
			$produtos = new produtoModel();
			$produtos->get_iterated();	
			$this->smarty->assign('produto',$produtos);

			if($action == "edit"){
				$edit = 'true';
				$this->smarty->assign('edit',$edit);
			}else{
				$edit = 'false';
				$this->smarty->assign('edit',$edit);
			}			
	
		$this->smarty->view('consulta/produto.html');
		
	}
	
	public function teste(){
			$produto = new produtoModel();
			$produto->get_iterated();
			$this->smarty->assign('produto',$produto);
			$edit = 'false';
			$this->smarty->assign('edit',$edit);	
			
			$this->smarty->view('visualizar/produto.html');
	}			
}