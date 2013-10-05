<?php
class grupoModel extends DataMapper{
	var $table = "grupo";
	var $has_many = array('produto' => array('class' => 'produtoModel','other_field' => 'grupo'));

	var $auto_populate_has_many = true;
	
	function grupoModel($id = NULL){
		 parent::__construct($id);
	}	
}
