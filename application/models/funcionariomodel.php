<?php

class FuncionarioModel extends DataMapper{
	var $table = "funcionario";	
/*	var $has_one = array('pedido' => array('class' => 'pedidomodel','other_field' => 'funcionario'),
						 'compra' => array('class' => 'compramodel','other_field' => 'funcionario')
						 );*/
	var $has_one = array('cidade' => array('class' => 'cidademodel','other_field' => 'funcionario'),
						 'cargo' => array('class' => 'cargomodel','other_field' => 'funcionario'));						 

	
	var $auto_populate_has_many = true;
	var $auto_populate_has_one= true;
	
	function FuncionarioModel($id = NULL)
	{ 
		 parent::__construct($id);
		
	}
}
