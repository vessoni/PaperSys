<?php

class ParcelaModel extends DataMapper{
	var $table = "parcela";	
	var $has_one = array('condicao_pagamento' => array('class' => 'condicao_pagamentomodel','other_field' => 'parcela'));
	
	var $auto_populate_has_one= true;
	
	function ParcelaModel($id = NULL)
	{ 
		 parent::__construct($id);
		
	}
}
