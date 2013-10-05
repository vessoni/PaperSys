<?php
class PaisModel extends DataMapper{
	var $table = "pais";
	var $has_many = array('estado' => array('class' => 'EstadoModel','other_field' => 'pais'));

	var $auto_populate_has_many = true;
	
	function PaisModel($id = NULL){
		 parent::__construct($id);
	}	
}
