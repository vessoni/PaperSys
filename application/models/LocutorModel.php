<?php
class LocutorModel extends DataMapper{
	var $table = "locutor";
	var $has_many = array('programacao' => array('class' => 'ProgramacaoModel','other_field' => 'locutor'));
	var $auto_populate_has_many = TRUE;
	
	function LocutorModel(){
		parent::DataMapper();
	}	
}
