<?php
class CargoModel extends DataMapper{
	var $table = "cargo";
	 var $has_many = array('funcionario' => array('class' => 'funcionarioModel','other_field' => 'cidade'));
	function CargoModel($id = NULL){
		 parent::__construct($id);
	}	
}
