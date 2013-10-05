<?php /* Smarty version Smarty-3.1.13, created on 2013-09-11 19:33:28
         compiled from "application\views\consulta\pais.html" */ ?>
<?php /*%%SmartyHeaderCode:184895230efb8793be2-74041881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a54364a86d1efa9edba806833bee47e873bd6388' => 
    array (
      0 => 'application\\views\\consulta\\pais.html',
      1 => 1377730840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184895230efb8793be2-74041881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
    'pais' => 0,
    'p' => 0,
    'erros' => 0,
    'erro' => 0,
    'paises' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5230efb8844a66_30025077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5230efb8844a66_30025077')) {function content_5230efb8844a66_30025077($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/topo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("includes/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script language="javascript">

function somente_txt(par_tecla)
{
         var var_tecla = par_tecla.keyCode ? par_tecla.keyCode : par_tecla.which;
         /* Tecla Backspace */
		 if (var_tecla == 9)
                  {return true;}
         if (var_tecla == 8)
                  {return true;}
         /* Tecla Space */
         if (var_tecla == 32)
                  {return true;}
         /* Teclas a-z e A-Z */
         if ((var_tecla > 64 && var_tecla < 91) || (var_tecla > 96 && var_tecla < 123))
                  {return true;}
         /* Teclas acentuadas e cidilha */
         if ((var_tecla > 191 && var_tecla < 221) || (var_tecla > 223 && var_tecla < 253))
                  {return true;}
         return false;
}
function SomenteNumero(e){
 var tecla=(window.event)?event.keyCode:e.which;
 if((tecla>47 && tecla<58)) return true;
 else{
 if (tecla==8 || tecla==0) return true;
 else  return false;
 }
}
</script>  
	
	<section id="main" class="column">
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">Pais</h3>
		<ul class="tabs">
   			<li><a href="/estagio/pais/">Lista</a></li>
    		<li><a href="#tab2">Novo</a></li>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content" <?php if ($_smarty_tpl->tpl_vars['edit']->value=='false'){?>style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
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
    				<th>Pais</th> 
    				<th>Sigla</th> 
					<th>DDI</th>
					<th></th> 
    				<th>Ação</th> 
				</tr> 
			</thead> 
			<tbody> 
		<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pais']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                <tr> 
   					<td><input type="checkbox"></td> 
    				<td><?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
</td> 
    				<td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['p']->value->nome, 'UTF-8');?>
</td> 
					<td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['p']->value->sigla, 'UTF-8');?>
</td> 
					<td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['p']->value->ddi, 'UTF-8');?>
</td> 
    				<td></td>  
                    <td>
                         <a href="/estagio/pais/novopais/<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
/edit"><img src="/estagio/static/img/icn_edit.png" /></a>
                         <a href="/estagio/pais/novopais/<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
/delete" onClick="return confirm('Deseja realmente excluir?');"><img src="/estagio/static/img/icn_trash.png" /></a>
                    </td> 
				</tr> 
          <?php } ?>
           		 
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		<div id="tab2" class="tab_content" <?php if ($_smarty_tpl->tpl_vars['edit']->value=='true'){?> style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
			<?php if (isset($_smarty_tpl->tpl_vars['erros']->value)){?> 

				<h4 class="alert_error"  onClick="$('#alert_error').hide();">
					Algo aconteceu errado, verifique: <br>
						 <?php  $_smarty_tpl->tpl_vars['erro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['erro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['erros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['erro']->key => $_smarty_tpl->tpl_vars['erro']->value){
$_smarty_tpl->tpl_vars['erro']->_loop = true;
?>
						 <div style="margin-left: 10px;"> - <?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
						 <?php } ?>
				</h4>
			<?php }?>
				<div class="module_content">
                  <form action="/estagio/pais/novopais" method="post" enctype="multipart/form-data">  
                    	<fieldset style="width:550px; float:left; margin-right: 3%;">
                         	<label style="width:10%;">Codigo</label>
							<label style="width:55%">Pais*</label>
							<label style="width:12%">Sigla*</label>
							<label style="width:15%">DDI*</label>
                             <input style="width:6%;"type="text" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['paises']->value)){?><?php echo $_smarty_tpl->tpl_vars['paises']->value->id;?>
<?php }?>" readonly="readonly">
							<input style="width:50%;text-transform:uppercase"type="text" name="pais" value="<?php if (isset($_smarty_tpl->tpl_vars['paises']->value)){?><?php echo $_smarty_tpl->tpl_vars['paises']->value->nome;?>
<?php }?> <?php if (count($_POST)>0){?><?php echo $_POST['pais'];?>
<?php }?>"   maxlength="40"  onkeypress="return somente_txt(event);" >
							<input style="width:7%;text-transform:uppercase"type="text" name="sigla" value="<?php if (isset($_smarty_tpl->tpl_vars['paises']->value)){?><?php echo $_smarty_tpl->tpl_vars['paises']->value->sigla;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['sigla'];?>
<?php }?>"  maxlength="3" onkeypress="return somente_txt(event);">
							<input style="width:7%;text-transform:uppercase"type="text" name="ddi" value="<?php if (isset($_smarty_tpl->tpl_vars['paises']->value)){?><?php echo $_smarty_tpl->tpl_vars['paises']->value->ddi;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['ddi'];?>
<?php }?>" onkeypress="return SomenteNumero(event);"  maxlength="2">
						</fieldset>

						
							<input type="submit" value="<?php if (isset($_smarty_tpl->tpl_vars['paises']->value)){?> Editar <?php }else{ ?>Salvar <?php }?>" style="float:left">
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