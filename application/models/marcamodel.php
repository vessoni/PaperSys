<?php
class marcaModel extends DataMapper{
	var $table = "marca";
	var $has_many = array('produto' => array('class' => 'produtoModel','other_field' => 'marca'));

	var $auto_populate_has_many = true;
	
	function marcaModel($id = NULL){
		 parent::__construct($id);
	}	
}
