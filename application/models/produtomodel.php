<?php

class produtoModel extends DataMapper{
	var $table = "produto";	
	var $has_one = array('grupo' => array('class' => 'grupomodel','other_field' => 'produto'),
						 'marca' => array('class' => 'marcamodel','other_field' => 'produto'));

	
	var $auto_populate_has_one= true;
	
	function produtoModel($id = NULL)
	{ 
		 parent::__construct($id);
		
	}
}
