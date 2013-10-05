<?php /* Smarty version Smarty-3.1.13, created on 2013-09-11 19:49:55
         compiled from "application\views\visualizar\condicao_pagamento.html" */ ?>
<?php /*%%SmartyHeaderCode:43475230f393018df6-26883468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e10d378818e5dd5ab99c50a0fbb96caa85c6b731' => 
    array (
      0 => 'application\\views\\visualizar\\condicao_pagamento.html',
      1 => 1373658434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43475230f393018df6-26883468',
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
  'unifunc' => 'content_5230f3931307b0_93678578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5230f3931307b0_93678578')) {function content_5230f3931307b0_93678578($_smarty_tpl) {?><!doctype html>
<html lang="pt">

<head>
	<meta charset="utf-8"/>
	<title>SYSPAPER</title>
	
	<link rel="stylesheet" href="/estagio/static/css/interna.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="/estagio/static/js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="/estagio/static/js/hideshow.js" type="text/javascript"></script>
	<script src="/estagio/static/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="/estagio/static/js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	<?php if ($_smarty_tpl->tpl_vars['edit']->value=='true'){?>
		$("ul.tabs li:eq(1)").addClass("active").show(); //Activate first tab
		$(".tab_content:eq(1)").show(); //Show first tab content
    <?php }else{ ?>
		$("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(".tab_content:first").show(); //Show first tab content
	<?php }?>
	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});

    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>


<script type="text/javascript">
	$(document).ready(function(){}); 
	function setVal(codigo,nome){
		parent.$('input#condicao_pagamento_id').val(codigo);
		parent.$('input#condicao_pagamento_nome').val(nome);
	
		parent.window.Shadowbox.close( );

	}

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
function SomenteNumero(e){
 var tecla=(window.event)?event.keyCode:e.which;
 if((tecla>47 && tecla<58)) return true;
 else{
 if (tecla==8 || tecla==0) return true;
 else  return false;
 }
}


</script> 


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




</head>
	
	<section id="main" class="column">
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">Condição de Pagamento</h3>
		<ul class="tabs">
   			<li><a href="#tab1">Lista</a></li>
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
                         <td><a href="javascript:void(0);" onClick="setVal('<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
','<?php echo $_smarty_tpl->tpl_vars['c']->value->nome;?>
')"><input type="checkbox"></a></td> 
                        <td><?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
</td> 
                        <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['c']->value->nome, 'UTF-8');?>
</td> 
                        <td></td>  
                        <td>
                             <a href="/estagio/condicao_pagamento/novocondicao_pagamentointerna/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/edit"><img src="/estagio/static/img/icn_edit.png" /></a>
                             <a href="/estagio/condicao_pagamento/novocondicao_pagamentointerna/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/delete" onClick="return confirm('Deseja realmente excluir?');"><img src="/estagio/static/img/icn_trash.png" /></a>
                        </td> 
                    </tr> 
              <?php } ?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		<div id="tab2" class="tab_content" <?php if ($_smarty_tpl->tpl_vars['edit']->value=='true'){?> style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
				<div class="module_content">
              <form action="/estagio/condicao_pagamento/novocondicao_pagamentointerna" method="post" name="condicao" enctype="multipart/form-data">    
<fieldset style="width:900px; float:left; margin-right: 2%;">
							<!-- Inicio primeira linha -->
                                <label style="width:9%; float:left;">Codigo</label>
                                <label style="width:35%;float:left;">Condição de Pagamento</label>
                                <label style="width:50%;float:left;">Taxa de Juros</label>
                                <input style="width:6%;float:left;margin-bottom:10px"type="text" name="codigo" id="codigo" value="<?php if (isset($_smarty_tpl->tpl_vars['condicao_pagamentos']->value)){?><?php echo $_smarty_tpl->tpl_vars['condicao_pagamentos']->value->id;?>
<?php }?>" readonly>
                                <input style="width:32%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text" required maxlength="40" name="nome" id="nome"  value="<?php if (isset($_smarty_tpl->tpl_vars['condicao_pagamentos']->value)){?><?php echo $_smarty_tpl->tpl_vars['condicao_pagamentos']->value->nome;?>
<?php }?>" required="required">
                                <input style="width:28%;float:left;margin-bottom:10px"  onkeypress="return SomenteNumero(event);"  type="text" name="juros" id="money" value="<?php if (isset($_smarty_tpl->tpl_vars['condicao_pagamentos']->value)){?><?php echo $_smarty_tpl->tpl_vars['condicao_pagamentos']->value->taxa;?>
<?php }?>" required>
 
                            <!--Fim primeira linha -->                        
                         	<!-- Inicio primeira linha -->
                             
                                <label style="width:35%; float:left;">Forma de Pagamento</label>
                                <label style="width:60%;float:left;"></label>
                               
                                 <a href="http://localhost/estagio/forma_pagamento/teste" rel="shadowbox;width=800;height=600;">
                                  <input style="width:6%;"type="hidden" name="forma_pagamento_id" id="forma_pagamento_id" value="<?php if (isset($_smarty_tpl->tpl_vars['condicao_pagamentos']->value)){?><?php echo $_smarty_tpl->tpl_vars['condicao_pagamentos']->value->forma_pagamento_id;?>
<?php }?>" readonly>
                                  <input style="width:48%"type="text" name="forma_pagamento_nome"  id="forma_pagamento_nome" value="<?php if (isset($_smarty_tpl->tpl_vars['condicao_pagamentos']->value)){?><?php echo $_smarty_tpl->tpl_vars['condicao_pagamentos']->value->forma_pagamento->nome;?>
<?php }?>"  required="required" readonly>
                               <div style="width:10%;float:left;margin-bottom:10px;height:30px; margin-left:11px" >
                                	<input type="submit" value="Buscar" />
                                </div>   
                             </a>                              

                                <label style="width:60%;float:left;width: 90%; height: 10px;"></label>
            </form>
            <form action="/estagio/condicao_pagamento/novoparcelamento" method="post" name="parcelamento" enctype="multipart/form-data">    
                                <label style="width:18%; float:left;">Número</label>
                                <label style="width:17%;float:left;">Dias</label>
                                <label style="width:50%;float:left;">Percentual</label>
                                <input style="width:15%;float:left;margin-bottom:10px"type="text" id="numero" name="numero" required>
                                <input style="width:15%;float:left;margin-bottom:10px"type="text" id="dias" name="dias" required>
                                <input style="width:15%;float:left;margin-bottom:10px"type="text" id="percentual" name="percentual" required> 
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