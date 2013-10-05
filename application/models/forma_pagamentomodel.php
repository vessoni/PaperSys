<?php
class Forma_pagamentoModel extends DataMapper{
	var $table = "forma_pagamento";
	var $has_many = array('condicao_pagamento' => array('class' => 'Condicao_pagamentoModel','other_field' => 'forma_pagamento'));

	var $auto_populate_has_many = true;
	
	function Forma_pagamentoModel($id = NULL){
		 parent::__construct($id);
	}	
}
