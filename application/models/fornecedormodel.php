<?php

class fornecedorModel extends DataMapper{
	var $table = "fornecedor";	
/*	var $has_one = array('pedido' => array('class' => 'pedidomodel','other_field' => 'funcionario'),
						 'compra' => array('class' => 'compramodel','other_field' => 'funcionario')
						 );*/
	var $has_one = array('cidade' => array('class' => 'cidademodel','other_field' => 'fornecedor'),
						 'condicao_pagamento' => array('class' => 'condicao_pagamentomodel','other_field' => 'fornecedor'));						 

	var $auto_populate_has_many = true;
	var $auto_populate_has_one= true;
	
	function fornecedorModel($id = NULL)
	{ 
		 parent::__construct($id);
		
	}
}
