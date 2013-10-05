<?php

class CidadeModel extends DataMapper{
	var $table = "cidade";	
	var $has_one = array('estado' => array('class' => 'estadomodel','other_field' => 'cidade'));
	var $has_many = array('funcionario' => array('class' => 'funcionarioModel','other_field' => 'cidade'),
	'cliente' => array('class' => 'clienteModel','other_field' => 'cidade'),
	'fornecedor' => array('class' => 'fornecedorModel','other_field' => 'cidade'));
	
	var $auto_populate_has_one= true;
	
	function CidadeModel($id = NULL)
	{ 
		 parent::__construct($id);
		
	}
}
