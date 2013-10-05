<?php /* Smarty version Smarty-3.1.13, created on 2013-09-24 20:23:42
         compiled from "application\views\consulta\estado.html" */ ?>
<?php /*%%SmartyHeaderCode:346752421efe777360-64085277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '498a7290b25dc9f0578e71af29b016f95a3c11b3' => 
    array (
      0 => 'application\\views\\consulta\\estado.html',
      1 => 1378929084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '346752421efe777360-64085277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
    'estado' => 0,
    'e' => 0,
    'erros' => 0,
    'erro' => 0,
    'estados' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52421eff0fb109_98899137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52421eff0fb109_98899137')) {function content_52421eff0fb109_98899137($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/topo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("includes/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="http://localhost/estagio/static/js/shadowbox.css">
<script type="text/javascript" src="http://localhost/estagio/static/js/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init({  
	language: 'pt',  
	player: ['img', 'html', 'swf']  
});
</script>

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

</script> 

	
	<section id="main" class="column">
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">Estado</h3>
		<ul class="tabs">
   			<li><a href="/estagio/estado/">Lista</a></li>
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
					<th>Selecionar </th>
    				<th>Codigo</th> 
                    <th>Estado</th> 
    				<th>Sigla</th> 
    				<th>Pais</th> 
					<th></th> 
    				<th>Ação</th> 
				</tr> 
			</thead> 
			<tbody> 
            	
                <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estado']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
                        <tr> 
                            <td><input type="checkbox"></td> 
                            <td><?php echo $_smarty_tpl->tpl_vars['e']->value->id;?>
</td> 
                            <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['e']->value->nome, 'UTF-8');?>
</td> 
                            <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['e']->value->sigla, 'UTF-8');?>
</td> 
                            <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['e']->value->pais->nome, 'UTF-8');?>
</td> 
                            <td></td>  
                            <td>
                                 <a href="/estagio/estado/novoestado/<?php echo $_smarty_tpl->tpl_vars['e']->value->id;?>
/edit"><img src="/estagio/static/img/icn_edit.png" /></a>
                                 <a href="/estagio/estado/novoestado/<?php echo $_smarty_tpl->tpl_vars['e']->value->id;?>
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
                  <form action="/estagio/estado/novoEstado" method="post" enctype="multipart/form-data">    
						<fieldset style="width:480px; float:left; margin-right: 3%;">
                         	<label style="width:12%;">Codigo</label>
							<label style="width:61%">Estado*</label>
							<label style="width:14%">Sigla</label>
                             <input style="width:7%;"type="text" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['estados']->value)){?><?php echo $_smarty_tpl->tpl_vars['estados']->value->id;?>
<?php }?>"  readonly="readonly">
							<input style="width:57%;text-transform:uppercase"type="text" name="estado" value="<?php if (isset($_smarty_tpl->tpl_vars['estados']->value)){?><?php echo $_smarty_tpl->tpl_vars['estados']->value->nome;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['estado'];?>
<?php }?>" maxlength="40"  onkeypress="return somente_txt(event);">
							<input style="width:7%;text-transform:uppercase"type="text" name="sigla" value="<?php if (isset($_smarty_tpl->tpl_vars['estados']->value)){?><?php echo $_smarty_tpl->tpl_vars['estados']->value->sigla;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['sigla'];?>
<?php }?>" maxlength="2"  onkeypress="return somente_txt(event);" >
						</fieldset>
						<fieldset style="width:570px; float:left; margin-right: 3%;">
                         	<label style="width:10%;">Codigo</label>
							<label style="width:52%">Pais*</label>
							<label style="width:12%">Sigla</label>
							<label style="width:15%">DDI</label>
                              <a href="http://localhost/estagio/pais/teste" rel="shadowbox;width=800;height=600;">
                             <input style="width:6%;"type="text" name="idpais" id="idpais" value="<?php if (isset($_smarty_tpl->tpl_vars['estados']->value)){?><?php echo $_smarty_tpl->tpl_vars['estados']->value->pais_id;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['idpais'];?>
<?php }?>" readonly="readonly">
                              
                                	<input style="width:48%"type="text" name="pais"  id="pais" value="<?php if (isset($_smarty_tpl->tpl_vars['estados']->value)){?><?php echo $_smarty_tpl->tpl_vars['estados']->value->pais->nome;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['pais'];?>
<?php }?>"  required="required" readonly="readonly">
                                </a>
                                <a href="http://localhost/estagio/pais/teste" rel="shadowbox;width=800;height=600;">
                                	<input style="width:6%"type="text" name="siglapais"  id="siglapais" value="<?php if (isset($_smarty_tpl->tpl_vars['estados']->value)){?><?php echo $_smarty_tpl->tpl_vars['estados']->value->pais->sigla;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['siglapais'];?>
<?php }?>" required="required" readonly="readonly" >
                                </a>
                                <a href="http://localhost/estagio/pais/teste" rel="shadowbox;width=800;height=600;">
                                	<input style="width:7%"type="text" name="ddi" id="ddi" value="<?php if (isset($_smarty_tpl->tpl_vars['estados']->value)){?><?php echo $_smarty_tpl->tpl_vars['estados']->value->pais->ddi;?>
<?php }?>" required="required" readonly="readonly">
                                </a>
                             <a href="http://localhost/estagio/pais/teste" rel="shadowbox;width=800;height=600;"> <input type="submit" value="..."></a>
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