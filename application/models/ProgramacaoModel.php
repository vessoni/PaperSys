<?php

class ProgramacaoModel extends DataMapper{
	var $table = "programacao";	
	var $has_one = array('locutor' => array('class' => 'LocutorModel','other_field' => 'programacao'));
	var $auto_populate_has_one = TRUE;
	
	function ProgramacaoModel()
	{
		parent::DataMapper();
	}
}
