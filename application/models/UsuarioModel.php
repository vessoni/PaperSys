<?php

class usuarioModel extends DataMapper{
	var $table = "usuario";	
	var $has_one = array('tipo_login' => array('class' => 'tipo_loginmodel','other_field' => 'usuario'));


	var $auto_populate_has_many = true;
	var $auto_populate_has_one= true;
	
	function usuarioModel($id = NULL)
	{ 
		 parent::__construct($id);
		
	}
}
