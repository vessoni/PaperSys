<?php /* Smarty version Smarty-3.1.13, created on 2013-09-24 20:23:53
         compiled from "application\views\consulta\cidade.html" */ ?>
<?php /*%%SmartyHeaderCode:2007252421f09708a78-57877936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce13b075c029c249740bc5afac0cf947d64540af' => 
    array (
      0 => 'application\\views\\consulta\\cidade.html',
      1 => 1376521046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2007252421f09708a78-57877936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
    'cidade' => 0,
    'c' => 0,
    'cidades' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52421f098e80d8_31559055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52421f098e80d8_31559055')) {function content_52421f098e80d8_31559055($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/topo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
         if (var_tecla == 8)
                  {return true;}
         if (var_tecla == 9)
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
		<header><h3 class="tabs_involved">Cidade</h3>
		<ul class="tabs">
   			<li><a href="/estagio/cidade/">Lista</a></li>
    		<li><a href="#tab2">Novo</a></li>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content"<?php if ($_smarty_tpl->tpl_vars['edit']->value=='false'){?> style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
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
    				<th>Cidade</th> 
                    <th>DDD</th>
    				<th>Estado</th> 
					<th>Pais</th>
					<th></th> 
    				<th>Ação</th> 
				</tr> 
			</thead> 
			<tbody> 
            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cidade']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <tr> 
                        <td><input type="checkbox"></td> 
                        <td><?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
</td> 
                        <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['c']->value->nome, 'UTF-8');?>
</td> 
                        <td><?php echo $_smarty_tpl->tpl_vars['c']->value->ddd;?>
</td> 
                        <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['c']->value->estado->nome, 'UTF-8');?>
</td> 
                        <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['c']->value->estado->pais->nome, 'UTF-8');?>
</td> 
                        <td></td>  
                        <td>
                             <a href="/estagio/cidade/novoCidade/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/edit"><img src="/estagio/static/img/icn_edit.png" /></a>
                             <a href="/estagio/cidade/novoCidade/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/delete" onClick="return confirm('Deseja realmente excluir?');"><img src="/estagio/static/img/icn_trash.png" /></a>
                        </td> 
                    </tr> 
              <?php } ?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		<div id="tab2" class="tab_content" <?php if ($_smarty_tpl->tpl_vars['edit']->value=='true'){?> style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
				<div class="module_content" >
                     <form action="/estagio/cidade/novoCidade" method="post" enctype="multipart/form-data">    
						<fieldset style="width:480px; float:left; margin-right: 3%;">
                         	<label style="width:12%;">Codigo</label>
							<label style="width:61%">Cidade*</label>
							<label style="width:14%">DDD</label>
                             <input style="width:7%;"type="text" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->id;?>
<?php }?>" readonly="readonly">
							<input style="width:57%;text-transform:uppercase;"type="text" name="cidade" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->nome;?>
<?php }?>"  maxlength="40"  onkeypress="return somente_txt(event);" required="required"  required="required">
							<input style="width:7%;text-transform:uppercase;"type="text" name="ddd" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->ddd;?>
<?php }?>"  maxlength="2" required>
						</fieldset>
						<fieldset style="width:480px; float:left; margin-right: 30%;">
                         	<label style="width:12%;">Codigo</label>
							<label style="width:61%">Estado*</label>
							<label style="width:14%">Sigla</label>
                            <a href="http://localhost/estagio/estado/teste" rel="shadowbox;width=800;height=600;">
	                            <input style="width:7%;"type="text" name="idestado" id="idestado" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->estado->id;?>
<?php }?>" readonly="readonly">
                            </a>
                            <a href="http://localhost/estagio/estado/teste" rel="shadowbox;width=800;height=600;">
    	                        <input style="width:57%"type="text" name="estado" id="estado"  value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->estado->nome;?>
<?php }?>" readonly="readonly"  required="required">
                            </a>
                            <a href="http://localhost/estagio/estado/teste" rel="shadowbox;width=800;height=600;">
        	                    <input style="width:7%"type="text" name="siglaestado" id="siglaestado" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->estado->sigla;?>
<?php }?>" readonly="readonly" required="required">
                            </a>
                            <a href="http://localhost/estagio/estado/teste" rel="shadowbox;width=800;height=600;"> <input type="submit" value="..."></a>
                        </fieldset>                        
                        
                        
						<fieldset style="width:570px; float:left; margin-right: 3%;">
                         	<label style="width:10%;">Codigo</label>
							<label style="width:52%">Pais</label>
							<label style="width:12%">Sigla</label>
							<label style="width:15%">DDI</label>
                             <input style="width:6%;"type="text" name="idpais" id="idpais" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->estado->pais->id;?>
<?php }?>" readonly="readonly">
                                <a href="http://localhost/estagio/estado/teste" rel="shadowbox;width=800;height=600;">
                                	<input style="width:48%"type="text" name="pais"  id="pais" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->estado->pais->nome;?>
<?php }?>"  required="required" readonly="readonly">
                                </a>
                                <a href="http://localhost/estagio/estado/teste" rel="shadowbox;width=800;height=600;">
                                	<input style="width:7%"type="text" name="ddi" id="ddi" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->estado->pais->ddi;?>
<?php }?>" required="required" readonly="readonly">
                                </a>
                                <a href="http://localhost/estagio/estado/teste" rel="shadowbox;width=800;height=600;">
                                <input style="width:6%"type="text" name="siglapais"  id="siglapais" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->estado->pais->sigla;?>
<?php }?>" required="required" readonly="readonly" >
                                	
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