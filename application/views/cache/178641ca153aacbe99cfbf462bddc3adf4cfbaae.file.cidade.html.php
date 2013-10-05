<?php /* Smarty version Smarty-3.1.13, created on 2013-09-11 19:44:44
         compiled from "application\views\visualizar\cidade.html" */ ?>
<?php /*%%SmartyHeaderCode:120215230f25c154730-18110460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '178641ca153aacbe99cfbf462bddc3adf4cfbaae' => 
    array (
      0 => 'application\\views\\visualizar\\cidade.html',
      1 => 1373661223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120215230f25c154730-18110460',
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
  'unifunc' => 'content_5230f25c2bf503_92550590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5230f25c2bf503_92550590')) {function content_5230f25c2bf503_92550590($_smarty_tpl) {?><!doctype html>
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


<script type="text/javascript">
	$(document).ready(function(){}); 
	function setVal(codigo,nome,nomee){
		parent.$('input#cidade_id').val(codigo);
		parent.$('input#cidade').val(nome);
		
		parent.$('input#estado').val(nomee);
		parent.window.Shadowbox.close( );

	}

</script>

<link rel="stylesheet" type="text/css" href="http://localhost/estagio/static/js/shadowbox.css">
<script type="text/javascript" src="http://localhost/estagio/static/js/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init({  
	language: 'pt',  
	player: ['img', 'html', 'swf']  
});
</script>


</head>
	
<section id="main" class="column">
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">Cidade</h3>
		<ul class="tabs">
   			<li><a href="#tab1">Lista</a></li>
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
   					<th>Selecionar</th> 
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
                       <td><a href="javascript:void(0);" onClick="setVal('<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
','<?php echo $_smarty_tpl->tpl_vars['c']->value->nome;?>
','<?php echo $_smarty_tpl->tpl_vars['c']->value->estado->nome;?>
')"><input type="checkbox"></a></td>
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
                             <a href="/estagio/cidade/novocidadeinterna/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/edit"><img src="/estagio/static/img/icn_edit.png" /></a>
                             <a href="/estagio/cidade/novocidadeinterna/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/delete" onClick="return confirm('Deseja realmente excluir?');"><img src="/estagio/static/img/icn_trash.png" /></a>
                        </td> 
                    </tr> 
              <?php } ?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		<div id="tab2" class="tab_content" <?php if ($_smarty_tpl->tpl_vars['edit']->value=='true'){?> style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
				<div class="module_content" >
                     <form action="/estagio/cidade/novocidadeinterna" method="post" enctype="multipart/form-data">    
						<fieldset style="width:480px; float:left; margin-right: 3%;">
                         	<label style="width:12%;">Codigo</label>
							<label style="width:61%">Cidade</label>
							<label style="width:14%">DDD</label>
                             <input style="width:7%;"type="text" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->id;?>
<?php }?>" readonly>
							<input style="width:57%;text-transform:uppercase;"type="text" name="cidade" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->nome;?>
<?php }?>"  maxlength="40"  onkeypress="return somente_txt(event);" required  required="required">
							<input style="width:7%;text-transform:uppercase;"type="text" name="ddd" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->ddd;?>
<?php }?>"  maxlength="2" required>
						</fieldset>
						<fieldset style="width:480px; float:left; margin-right: 30%;">
                         	<label style="width:12%;">Codigo</label>
							<label style="width:61%">Estado</label>
							<label style="width:14%">Sigla</label>
                            <a href="http://localhost/estagio/estado/teste" rel="shadowbox;width=800;height=600;">
	                            <input style="width:7%;"type="text" name="idestado" id="idestado" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->estado->id;?>
<?php }?>" readonly>
                            </a>
                            <a href="http://localhost/estagio/estado/teste" rel="shadowbox;width=800;height=600;">
    	                        <input style="width:57%"type="text" name="estado" id="estado"  value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->estado->nome;?>
<?php }?>" readonly  required="required">
                            </a>
                            <a href="http://localhost/estagio/estado/teste" rel="shadowbox;width=800;height=600;">
        	                    <input style="width:7%"type="text" name="siglaestado" id="siglaestado" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->estado->sigla;?>
<?php }?>" readonly required>
                            </a>
                            <a href="http://localhost/estagio/estado/teste" rel="shadowbox;width=800;height=600;"> <input type="submit" value="..."></a>
                        </fieldset>                        
                        
                        
						<fieldset style="width:570px; float:left; margin-right: 3%;">
                         	<label style="width:10%;">Codigo</label>
							<label style="width:52%">Pais</label>
							<label style="width:12%">Sigla</label>
							<label style="width:15%">DDI</label>
                             <input style="width:6%;"type="text" name="idpais" id="idpais" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->estado->pais->id;?>
<?php }?>" readonly>
                                <a href="http://localhost/estagio/estado/teste" rel="shadowbox;width=800;height=600;">
                                	<input style="width:48%"type="text" name="pais"  id="pais" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->estado->pais->nome;?>
<?php }?>"  required="required" readonly>
                                </a>
                                <a href="http://localhost/estagio/estado/teste" rel="shadowbox;width=800;height=600;">
                                	<input style="width:7%"type="text" name="ddi" id="ddi" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->estado->pais->ddi;?>
<?php }?>" required readonly>
                                </a>
                                <a href="http://localhost/estagio/estado/teste" rel="shadowbox;width=800;height=600;">
                                <input style="width:6%"type="text" name="siglapais"  id="siglapais" value="<?php if (isset($_smarty_tpl->tpl_vars['cidades']->value)){?><?php echo $_smarty_tpl->tpl_vars['cidades']->value->estado->pais->sigla;?>
<?php }?>" required readonly >
                                	
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