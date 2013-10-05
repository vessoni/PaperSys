<?php /* Smarty version Smarty-3.1.13, created on 2013-09-24 20:32:06
         compiled from "application\views\consulta\forma_pagamento.html" */ ?>
<?php /*%%SmartyHeaderCode:20262524220f64190f9-20914548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a87e20e543e1390550d148fc3fc1bda481bde430' => 
    array (
      0 => 'application\\views\\consulta\\forma_pagamento.html',
      1 => 1376521049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20262524220f64190f9-20914548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
    'forma_pagamento' => 0,
    'c' => 0,
    'forma_pagamentos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_524220f64b8d91_03155029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524220f64b8d91_03155029')) {function content_524220f64b8d91_03155029($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/topo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("includes/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<section id="main" class="column">
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">Forma de Pagamento</h3>
		<ul class="tabs">
   			<li><a href="/estagio/forma_pagamento/">Lista</a></li>
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
    				<th>Forma de Pagamento</th> 

					<th></th> 
    				<th>Ação</th> 
				</tr> 
			</thead> 
			<tbody> 
				 <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['forma_pagamento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                             <a href="/estagio/forma_pagamento/novoforma_pagamento/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/edit"><img src="/estagio/static/img/icn_edit.png" /></a>
                             <a href="/estagio/forma_pagamento/novoforma_pagamento/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/delete" onClick="return confirm('Deseja realmente excluir?');"><img src="/estagio/static/img/icn_trash.png" /></a>
                        </td> 
                    </tr> 
              <?php } ?> 
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		<div id="tab2" class="tab_content" <?php if ($_smarty_tpl->tpl_vars['edit']->value=='true'){?> style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
				<div class="module_content">
            <form action="/estagio/forma_pagamento/novoforma_pagamento" method="post" enctype="multipart/form-data">    
                <fieldset style="float: left; margin-right: 2%; width: 400px;">
                    <label style="float: left; width: 17%;" >Codigo</label>
                    <label style="float: left; width: 70%;">Forma de Pagamento*</label>
                    <input type="text" name="id" id="id" style="float: left; margin-bottom: 10px; width: 11%;"  value="<?php if (isset($_smarty_tpl->tpl_vars['forma_pagamentos']->value)){?><?php echo $_smarty_tpl->tpl_vars['forma_pagamentos']->value->id;?>
<?php }?>" readonly="readonly">
                    <input type="text" required="required" name="nome" id="nome" maxlength="40" style="float: left; margin-bottom: 10px; width: 70%;text-transform:uppercase" value="<?php if (isset($_smarty_tpl->tpl_vars['forma_pagamentos']->value)){?><?php echo $_smarty_tpl->tpl_vars['forma_pagamentos']->value->nome;?>
<?php }?>">
                </fieldset>

						
			<input type="submit" value="Salvar" style="float:left">
            
            </form>
<div class="clear"></div>
				</div>

		</div><!-- end of #tab2 -->

			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
		
		<div class="clear"></div>
		
	
	</section>


</body>

</html><?php }} ?>