<?php

class PromocaoModel extends DataMapper{
	var $table = "promocao";
	var $has_many = array('candidatopromocao' => array('class' => 'CandidatoPromocaoModel','other_field' => 'promocao'));
	var $auto_populate_has_many = TRUE;
	function PromocaoModel()
	{
		parent::DataMapper();
	}
}
