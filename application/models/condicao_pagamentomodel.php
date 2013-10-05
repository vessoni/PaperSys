<?php

class Condicao_pagamentomodel extends DataMapper{
	var $table = "condicao_pagamento";	
	var $has_one = array('forma_pagamento' => array('class' => 'forma_pagamentomodel','other_field' => 'condicao_pagamento'));
	var $has_many = array('parcela' => array('class' => 'parcelamodel','other_field' => 'condicao_pagamento'),
						  'cliente' => array('class' => 'clientemodel','other_field' => 'condicao_pagamento'),
						  'fornecedor' => array('class' => 'fornecedormodel','other_field' => 'condicao_pagamento'));

	var $auto_populate_has_many = true;
	var $auto_populate_has_one= true;
	
	function Condicao_pagamentomodel($id = NULL)
	{ 
		 parent::__construct($id);
		
	}
}
