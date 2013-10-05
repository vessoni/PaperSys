<?php /* Smarty version Smarty-3.1.13, created on 2013-09-22 22:02:33
         compiled from "application\views\consulta\usuario.html" */ ?>
<?php /*%%SmartyHeaderCode:28223523f932929e591-85859120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '221d73bb8f4e498954f5003cefe2ffe2b5a03404' => 
    array (
      0 => 'application\\views\\consulta\\usuario.html',
      1 => 1376521001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28223523f932929e591-85859120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
    'usuario' => 0,
    'u' => 0,
    'usuarios' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_523f9329396cb1_65676395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523f9329396cb1_65676395')) {function content_523f9329396cb1_65676395($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/topo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("includes/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="http://localhost/estagio/static/js/shadowbox.css">
<script type="text/javascript" src="http://localhost/estagio/static/js/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init({  
	language: 'pt',  
	player: ['img', 'html', 'swf']  
});
</script>
	
	<section id="main" class="column">
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">Usuario</h3>
		<ul class="tabs">
   			<li><a href="/estagio/usuario/">Lista</a></li>
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
                    <th>Nome</th> 
    				<th>Login</th> 
					<th></th> 
    				<th>Ação</th> 
				</tr> 
			</thead> 
			<tbody>
				    <?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value){
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
                        <tr> 
                            <td><input type="checkbox"></td> 
                            <td><?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
</td> 
                             <td><?php echo $_smarty_tpl->tpl_vars['u']->value->nome;?>
</td> 
                            <td><?php echo $_smarty_tpl->tpl_vars['u']->value->login;?>
</td> 

                            <td></td>  
                            <td>
                                 <a href="/estagio/usuario/novousuario/<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
/edit"><img src="/estagio/static/img/icn_edit.png" /></a>
                                 <a href="/estagio/usuario/novousuario/<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
/delete" onClick="return confirm('Deseja realmente excluir?');"><img src="/estagio/static/img/icn_trash.png" /></a>
                            </td> 
                        </tr> 
                  <?php } ?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		<div id="tab2" class="tab_content" <?php if ($_smarty_tpl->tpl_vars['edit']->value=='true'){?> style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
				<div class="module_content">
              <form action="/estagio/usuario/novousuario" method="post" name="condicao" enctype="multipart/form-data">   
						<fieldset style="width:900px; float:left; margin-right: 2%;">
							<!-- Inicio primeira linha -->
                                <label style="width:9%; float:left;">Codigo</label>
                                <label style="width:30%;float:left;">Nome*</label>
                                <label style="width:50%;float:left;">Pefil*</label>
                                <input style="width:6%;float:left;margin-bottom:10px"type="text"  name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['usuarios']->value->id;?>
<?php }?>" readonly="readonly">
                               <input style="width:28%;text-transform:uppercase"type="text" maxlength="100" name="nome"  id="nome" value="<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['usuarios']->value->nome;?>
<?php }?>" onkeypress="return somente_txt(event);"   required="required">

                               <a href="http://localhost/estagio/tipo_login/teste" rel="shadowbox;width=800;height=600;">
                                 <input style="width:28%;float:left;margin-bottom:10px"type="hidden" name="tipo_login_id" id="tipo_login_id" value="<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['usuarios']->value->tipo_login_id;?>
<?php }?>" >
                               <input style="width:28%;text-transform:uppercase"type="text" name="tipo_login_nome"  id="tipo_login_nome" value="<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['usuarios']->value->tipo_login->nome;?>
<?php }?>"  required="required" readonly="readonly">
                                <div style="width:10%;float:left;margin-bottom:10px;height:30px; margin-left:11px" >
                                	<input type="submit" value="Buscar" />
                                </div> 
                              </a>
                            <!--Fim primeira linha -->                        
                         	<!-- Inicio primeira linha -->
                                <label style="width:35%; float:left;">Login*</label>
                                <label style="width:30%;float:left;">Senha*</label>
                             <!--   <label style="width:15%;float:left;">Conf. Senha</label>-->
                                
                                <input style="width:32%;float:left;margin-bottom:10px;text-transform:uppercase"type="text" maxlength="20"  name="login" value="<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['usuarios']->value->login;?>
<?php }?>"required="required">
                                <input style="width:28%;float:left;margin-bottom:10px;text-transform:uppercase"type="password" maxlength="20"  name="senha" value="<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['usuarios']->value->senha;?>
<?php }?>" required="required">
                          <!--      <input style="width:28%;float:left;margin-bottom:10px"type="text" required="required">-->
                                
                            
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