<?php

class CandidatoPromocaoModel extends DataMapper{
	var $table = "candidatopromocao";	
	var $has_one = array('promocao' => array('class' => 'PromocaoModel','other_field' => 'candidatopromocao'));
	var $auto_populate_has_one = TRUE;
	function CandidatoPromocaoModel()	{
		parent::DataMapper();
	}
}
