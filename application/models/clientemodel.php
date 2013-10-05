<?php

class ClienteModel extends DataMapper{
	var $table = "cliente";	
/*	var $has_one = array('pedido' => array('class' => 'pedidomodel','other_field' => 'funcionario'),
						 'compra' => array('class' => 'compramodel','other_field' => 'funcionario')
						 );*/
	var $has_one = array('cidade' => array('class' => 'cidademodel','other_field' => 'cliente'),
						 'condicao_pagamento' => array('class' => 'condicao_pagamentomodel','other_field' => 'cliente'));						 

	var $auto_populate_has_many = true;
	var $auto_populate_has_one= true;
	
	function ClienteModel($id = NULL)
	{ 
		 parent::__construct($id);
		
	}
}
