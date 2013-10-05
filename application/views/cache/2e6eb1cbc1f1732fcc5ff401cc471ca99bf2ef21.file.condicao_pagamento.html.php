<?php /* Smarty version Smarty-3.1.13, created on 2013-09-24 20:31:52
         compiled from "application\views\consulta\condicao_pagamento.html" */ ?>
<?php /*%%SmartyHeaderCode:17025524220e85887f9-59458793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e6eb1cbc1f1732fcc5ff401cc471ca99bf2ef21' => 
    array (
      0 => 'application\\views\\consulta\\condicao_pagamento.html',
      1 => 1377731984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17025524220e85887f9-59458793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
    'condicao_pagamento' => 0,
    'c' => 0,
    'condicao_pagamentos' => 0,
    'parcela' => 0,
    'p' => 0,
    'parcelas' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_524220e867f3a8_43807785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524220e867f3a8_43807785')) {function content_524220e867f3a8_43807785($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/topo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("includes/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="http://localhost/estagio/static/js/shadowbox.css">
<script type="text/javascript" src="http://localhost/estagio/static/js/shadowbox.js"></script>
<script type="text/javascript" src="http://localhost/estagio/static/js/validacao.js"></script>
<script type="text/javascript">
Shadowbox.init({  
	language: 'pt',  
	player: ['img', 'html', 'swf']  
});

jQuery(function($){
   $("#cpf").mask("99999999999");
   $("#cep").mask("99999-999"); 
   $("#data_nascimento").mask("9999-99-99"); 
    $("#data_admissao").mask("9999-99-99"); 
   $("#tel").mask("(99)9999-9999"); 
   $("#tel1").mask("(99)9999-9999");
   $("#tel2").mask("(99)9999-9999");
   $("#money").mask('000,00', {reverse: true});
    $("#money2").mask('000,00', {reverse: true});
 });
</script>


	<section id="main" class="column">
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">Condição de Pagamento</h3>
		<ul class="tabs">
   			<li><a href="/estagio/condicao_pagamento/">Lista</a></li>
    		<li><a href="#tab2">Novo</a></li>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content" <?php if ($_smarty_tpl->tpl_vars['edit']->value=='false'){?> style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr>
				<div class="module_content">				
					<fieldset>
						<label>Buscar</label>
						<input type="text">
                        <input type="submit" value="Buscar" style="float:left">
					</fieldset>
				</div>					
				</tr> 		
				<tr> 
   					<th></th> 
    				<th>Codigo</th> 
    				<th>Condição de pagamento</th> 
					<th></th> 
    				<th>Ação</th> 
				</tr> 
			</thead> 
			<tbody> 
	            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['condicao_pagamento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <tr> 
                        <td><input type="checkbox"></td> 
                        <td><?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
</td> 
                        <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['c']->value->nome, 'UTF-8');?>
</td> 
                        <td></td>  
                        <td>
                             <a href="/estagio/condicao_pagamento/novocondicao_pagamento/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/edit"><img src="/estagio/static/img/icn_edit.png" /></a>
                             <a href="/estagio/condicao_pagamento/novocondicao_pagamento/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/delete" onClick="return confirm('Deseja realmente excluir?');"><img src="/estagio/static/img/icn_trash.png" /></a>
                        </td> 
                    </tr> 
              <?php } ?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		<div id="tab2" class="tab_content" <?php if ($_smarty_tpl->tpl_vars['edit']->value=='true'){?> style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
				<div class="module_content">
              <form action="/estagio/condicao_pagamento/novocondicao_pagamento" method="post" name="condicao" enctype="multipart/form-data">    
						<fieldset style="width:900px; float:left; margin-right: 2%;">
							<!-- Inicio primeira linha -->
                                <label style="width:9%; float:left;">Codigo</label>
                                <label style="width:35%;float:left;">Condição de Pagamento*</label>
                                <label style="width:50%;float:left;">Taxa de Juros</label>
                                <input style="width:6%;float:left;margin-bottom:10px"type="text" name="codigo" id="codigo" value="<?php if (isset($_smarty_tpl->tpl_vars['condicao_pagamentos']->value)){?><?php echo $_smarty_tpl->tpl_vars['condicao_pagamentos']->value->id;?>
<?php }?>" readonly="readonly">
                                <input style="width:32%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text" required="required" maxlength="40" name="nome" id="nome"  value="<?php if (isset($_smarty_tpl->tpl_vars['condicao_pagamentos']->value)){?><?php echo $_smarty_tpl->tpl_vars['condicao_pagamentos']->value->nome;?>
<?php }?>" required="required">
                                <input style="width:28%;float:left;margin-bottom:10px"  onkeypress="return SomenteNumero(event);"  type="text" name="juros" id="money" value="<?php if (isset($_smarty_tpl->tpl_vars['condicao_pagamentos']->value)){?><?php echo $_smarty_tpl->tpl_vars['condicao_pagamentos']->value->taxa;?>
<?php }?>" required="required">
 
                            <!--Fim primeira linha -->                        
                         	<!-- Inicio primeira linha -->
                             
                                <label style="width:35%; float:left;">Forma de Pagamento</label>
                                <label style="width:60%;float:left;"></label>
                               
                                 <a href="http://localhost/estagio/forma_pagamento/teste" rel="shadowbox;width=800;height=600;">
                                  <input style="width:6%;"type="hidden" name="forma_pagamento_id" id="forma_pagamento_id" value="<?php if (isset($_smarty_tpl->tpl_vars['condicao_pagamentos']->value)){?><?php echo $_smarty_tpl->tpl_vars['condicao_pagamentos']->value->forma_pagamento_id;?>
<?php }?>" readonly="readonly">
                                  <input style="width:48%"type="text" name="forma_pagamento_nome"  id="forma_pagamento_nome" value="<?php if (isset($_smarty_tpl->tpl_vars['condicao_pagamentos']->value)){?><?php echo $_smarty_tpl->tpl_vars['condicao_pagamentos']->value->forma_pagamento->nome;?>
<?php }?>"  required="required" readonly="readonly">
                               <div style="width:10%;float:left;margin-bottom:10px;height:30px; margin-left:11px" >
                                	<input type="submit" value="Buscar" />
                                </div>   
                             </a>                              

                                <label style="width:60%;float:left;width: 90%; height: 10px;"></label>
            </form>
            <form action="/estagio/condicao_pagamento/novoparcelamento" method="post" name="parcelamento" enctype="multipart/form-data">    
                                <label style="width:18%; float:left;">Número*</label>
                                <label style="width:17%;float:left;">Dias*</label>
                                <label style="width:50%;float:left;">Percentual*</label>
                                <input style="width:15%;float:left;margin-bottom:10px"type="text" id="numero" name="numero" required="required">
                                <input style="width:15%;float:left;margin-bottom:10px"type="text" id="dias" name="dias" required="required">
                                <input style="width:15%;float:left;margin-bottom:10px"type="text" id="percentual" name="percentual" required="required"> 
                                <div style="width:5%;float:left;margin-bottom:10px;height:30px; margin-left:11px" >
                                	<input type="submit" value="+" onclick="document.parcelamento.submit();" />
                                </div>      
                                <div style="width:10%;float:left;margin-bottom:10px;height:30px; margin-left:11px" >
                                	<input type="submit" value="Limpar" onclick="document.parcelamento.submit();" name="limpar" />
                                </div>      
                                <label style="width:100%;float:left;"></label>                             
 			
   <div style="float:left;margin-left:10px; width:55%">	                             
		<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr>
							

							
				</tr> 		
				<tr> 
    				<th>Número</th> 
    				<th>Dias</th> 
    				<th>Percentual</th> 

				</tr> 
			</thead> 
			<tbody> 
            <?php if (isset($_smarty_tpl->tpl_vars['parcela']->value)){?>
             <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parcela']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
  			<tr> 
   					
    				<td><?php echo $_smarty_tpl->tpl_vars['p']->value->numero;?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->dias;?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->percentual;?>
%</td> 
     		</tr>
            <?php } ?>
            <?php }?>
            
            <?php if (isset($_smarty_tpl->tpl_vars['parcelas']->value)){?>
             <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parcelas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
  			<tr> 
   					
    				<td><?php echo $_smarty_tpl->tpl_vars['p']->value['numero'];?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value['dias'];?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value['percentual'];?>
%</td> 
     		</tr>
            <?php } ?>
            <?php }?>
			</tbody> 
            <thead> 
				<tr> 
    				<th></th> 
    				<th></th> 
    				<th>Total:  <?php if (isset($_smarty_tpl->tpl_vars['total']->value)){?> <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>%</th> 
					<th></th> 
    				<th></th> 
				</tr> 
             </thead>            
			</table>                                
 </div>		                               
                            
						</fieldset>

	        
  </form>         
  <input type="submit" value="Salvar" style="float:left" onclick="document.condicao.submit();">
<div class="clear"></div>
				</div>

		</div><!-- end of #tab2 -->

			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
		
		<div class="clear"></div>
		
	
	</section>


</body>

</html><?php }} ?>