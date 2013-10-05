<?php

class EstadoModel extends DataMapper{
	var $table = "estado";	
	var $has_one = array('pais' => array('class' => 'paismodel','other_field' => 'estado'));
	var $has_many = array('cidade' => array('class' => 'CidadeModel','other_field' => 'estado'));

	var $auto_populate_has_many = true;
	var $auto_populate_has_one= true;
	
	function EstadoModel($id = NULL)
	{ 
		 parent::__construct($id);
		
	}
}
