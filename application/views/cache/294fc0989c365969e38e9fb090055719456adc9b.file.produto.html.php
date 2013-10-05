<?php /* Smarty version Smarty-3.1.13, created on 2013-09-22 21:58:49
         compiled from "application\views\consulta\produto.html" */ ?>
<?php /*%%SmartyHeaderCode:9478523f9249d7be92-41467115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '294fc0989c365969e38e9fb090055719456adc9b' => 
    array (
      0 => 'application\\views\\consulta\\produto.html',
      1 => 1376520979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9478523f9249d7be92-41467115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
    'produto' => 0,
    'c' => 0,
    'produtos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_523f924a14adf8_73511522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523f924a14adf8_73511522')) {function content_523f924a14adf8_73511522($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/topo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
   $("#cpf").mask("999.999.999-99");
   $("#cep").mask("99999-999"); 
   $("#data_nascimento").mask("9999-99-99"); 
    $("#data_admissao").mask("9999-99-99"); 
	 $("#data_demissao").mask("9999-99-99"); 
   $("#tel").mask("(99)9999-9999"); 
   $("#tel1").mask("(99)9999-9999");
   $("#tel2").mask("(99)9999-9999");
   $("#money").mask('000.000.000.000.000,00', {reverse: true});
    $("#money2").mask('000.000.000.000.000,00', {reverse: true});
 });

</script>
	<section id="main" class="column">
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">Produto</h3>
		<ul class="tabs">
   			<li><a href="/estagio/produto/">Lista</a></li>
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
    				<th>Produto</th> 
                    <th>Grupo</th> 
                    <th>Marca</th> 
					<th></th> 
    				<th>Ação</th> 
				</tr> 
			</thead> 
			<tbody> 
			  <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <tr> 
                        <td><input type="checkbox"></td> 
                        <td><?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
</td> 
                        <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['c']->value->descricao, 'UTF-8');?>
</td> 
                        <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['c']->value->grupo->nome, 'UTF-8');?>
</td> 
                         <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['c']->value->marca->nome, 'UTF-8');?>
</td> 
                       	<td></td>  
                        <td>
                             <a href="/estagio/produto/novoproduto/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/edit"><img src="/estagio/static/img/icn_edit.png" /></a>
                             <a href="/estagio/produto/novoproduto/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/delete" onClick="return confirm('Deseja realmente excluir?');"><img src="/estagio/static/img/icn_trash.png" /></a>
                        </td> 
                    </tr> 
              <?php } ?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		<div id="tab2" class="tab_content" <?php if ($_smarty_tpl->tpl_vars['edit']->value=='true'){?> style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
				<div class="module_content">
               <form action="/estagio/produto/novoproduto" method="post" enctype="multipart/form-data">    
						<fieldset style="width:900px; float:left; margin-right: 2%;">
							<!-- Inicio primeira linha -->
                                <label style="width:9%; float:left;">Codigo</label>
                                <label style="width:30%;float:left;">Descricao*</label>
                                <label style="width:55%;float:left;"></label>
                                <input style="width:6%;float:left;margin-bottom:10px" type="text" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['produtos']->value)){?><?php echo $_smarty_tpl->tpl_vars['produtos']->value->id;?>
<?php }?>" readonly="readonly">
                                <input style="width:38%;float:left;margin-bottom:10px;text-transform:uppercase" maxlength="30" type="text" name="descricao" value="<?php if (isset($_smarty_tpl->tpl_vars['produtos']->value)){?><?php echo $_smarty_tpl->tpl_vars['produtos']->value->descricao;?>
<?php }?>" required="required">
                               	 <label style="width:100%;height: 5px;float:left;"></label>
                                 <!--Fim primeira linha -->                        
                         	<!-- Inicio primeira linha -->
   								<label style="width:16%; float:left;">Codigo de Barras</label>
                             	  <label style="width:15%;float:left;">Referência</label>
                                <label style="width:32%;float:left;">Marca*</label>
                                 <label style="width:20%;float:left;">Grupo*</label>
                                <input style="width:13%;float:left;margin-bottom:10px;text-transform:uppercase" maxlength="30"type="text" onkeypress="return SomenteNumero(event);" name="codigo_barras" value="<?php if (isset($_smarty_tpl->tpl_vars['produtos']->value)){?><?php echo $_smarty_tpl->tpl_vars['produtos']->value->codigo_barras;?>
<?php }?>" required="required">
                                <input style="width:13%;float:left;margin-bottom:10px;text-transform:uppercase" maxlength="20"type="text" name="referencia"value="<?php if (isset($_smarty_tpl->tpl_vars['produtos']->value)){?><?php echo $_smarty_tpl->tpl_vars['produtos']->value->referencia;?>
<?php }?>" required="required">
                                <a href="http://localhost/estagio/marca/teste" rel="shadowbox;width=800;height=600;">
                                   <input style="width:15%;float:left;margin-bottom:10px"type="hidden" id="marca_id" name="marca_id" value="<?php if (isset($_smarty_tpl->tpl_vars['produtos']->value)){?><?php echo $_smarty_tpl->tpl_vars['produtos']->value->marca->id;?>
<?php }?>">
                                   <input style="width:18%;float:left; margin-bottom:10px;text-transform:uppercase"type="text"name="marca_nome" id="marca_nome" value="<?php if (isset($_smarty_tpl->tpl_vars['produtos']->value)){?><?php echo $_smarty_tpl->tpl_vars['produtos']->value->marca->nome;?>
<?php }?>" required="required" readonly="readonly">
                                     <div style="width:10%;float:left;margin-bottom:10px;height:20px; margin-left:11px" >
                                        <input type="submit" value="Buscar" />
                                    </div> 
                                 </a>
                                 <a href="http://localhost/estagio/grupo/teste" rel="shadowbox;width=800;height=600;">
                               		<input style="width:15%;float:left;margin-bottom:10px"type="hidden" id="grupo_id" name="grupo_id" value="<?php if (isset($_smarty_tpl->tpl_vars['produtos']->value)){?><?php echo $_smarty_tpl->tpl_vars['produtos']->value->grupo->id;?>
<?php }?>">
                                    <input style="width:18%;float:left; margin-bottom:10px;text-transform:uppercase"type="text"id="grupo_nome" name="grupo_nome"value="<?php if (isset($_smarty_tpl->tpl_vars['produtos']->value)){?><?php echo $_smarty_tpl->tpl_vars['produtos']->value->grupo->nome;?>
<?php }?>" required="required" readonly="readonly">
                                     <div style="width:10%;float:left;margin-bottom:10px;height:20px; margin-left:11px" >
                                        <input type="submit" value="Buscar" />
                                    </div>      
                                </a>                           
                                
                                 <label style="width:100%;height: 5px;float:left;"></label>
                            <!--Fim primeira linha -->
                            <!-- Inicio Segunda linha -->
   								<label style="width:21%; float:left;">Valor de Custo</label>
                             	  <label style="width:20%;float:left;">Valor de Venda</label>
                                <label style="width:20%;float:left;">Estoque mínimo</label>
                                 <label style="width:21%;float:left;">Estoque atual</label>
                                <input style="width:18%;float:left;margin-bottom:10px"type="text" name="valor_custo" onkeypress="return SomenteNumero(event);" id="money" value="<?php if (isset($_smarty_tpl->tpl_vars['produtos']->value)){?><?php echo $_smarty_tpl->tpl_vars['produtos']->value->valor_custo;?>
<?php }?>" required="required">
                                <input style="width:18%;float:left;margin-bottom:10px"type="text" name="valor_venda" onkeypress="return SomenteNumero(event);"  id="money2" value="<?php if (isset($_smarty_tpl->tpl_vars['produtos']->value)){?><?php echo $_smarty_tpl->tpl_vars['produtos']->value->valor_venda;?>
<?php }?>" required="required">
                                <input style="width:18%;float:left; margin-bottom:10px"type="text" maxlength="10" name="estoque_min" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['produtos']->value)){?><?php echo $_smarty_tpl->tpl_vars['produtos']->value->estoque_min;?>
<?php }?>" required="required">
                                <input style="width:18%;float:left; margin-bottom:10px"type="text" maxlength="10" name="estoque_atual" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['produtos']->value)){?><?php echo $_smarty_tpl->tpl_vars['produtos']->value->estoque_atual;?>
<?php }?>" required="required">
                              
                                
                                                     <!-- Inicio Setima linha -->   

                            <!-- Fim Setima linha --> 
                            
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