<?php
class tipo_loginModel extends DataMapper{
	var $table = "tipo_login";
	var $has_many = array('usuario' => array('class' => 'usuarioModel','other_field' => 'tipo_login'));

	var $auto_populate_has_many = true;
	
	function tipo_loginModel($id = NULL){
		 parent::__construct($id);
	}	
}
