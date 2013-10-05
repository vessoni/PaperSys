<?php /* Smarty version Smarty-3.1.13, created on 2013-09-22 22:00:04
         compiled from "application\views\consulta\fornecedor.html" */ ?>
<?php /*%%SmartyHeaderCode:23290523f9294dc22b3-30906601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec3402b9b5d163975b1cdd5eb20c84c12477c7e5' => 
    array (
      0 => 'application\\views\\consulta\\fornecedor.html',
      1 => 1376521050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23290523f9294dc22b3-30906601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
    'tipo_pessoa' => 0,
    'fornecedors' => 0,
    'fornecedor' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_523f929508f6c6_84864170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523f929508f6c6_84864170')) {function content_523f929508f6c6_84864170($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\estagio\\application\\libraries\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("includes/topo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("includes/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="http://localhost/estagio/static/js/shadowbox.css">
<script type="text/javascript" src="http://localhost/estagio/static/js/shadowbox.js"></script>
<script type="text/javascript" src="http://localhost/estagio/static/js/validacao.js"></script>
<script type="text/javascript">
Shadowbox.init({  
	language: 'pt',  
	player: ['img', 'html', 'swf']  
});
</script>

<script type="text/javascript">
$(document).ready(function() {	
	

<?php if ($_smarty_tpl->tpl_vars['edit']->value=='false'){?>	
	<?php if ($_smarty_tpl->tpl_vars['tipo_pessoa']->value=='f'){?>
	$("#pessoa_fisica").show();
	$("#pessoa_fisica1").show();
	$("#pessoa_fisica2").show();
	$("#pessoa_fisica3").show();
	$("#pessoa_fisica4").show();
	$("#pessoa_fisica5").show();
	$("#pessoa_fisica6").show();
	$("#pessoa_juridica").hide();
	$("#pessoa_juridica1").hide();
	$("#pessoa_juridica2").hide();
	$("#pessoa_juridica3").hide();
	$("#pessoa_juridica4").hide();
	$("#pessoa_juridica5").hide();
	$("#pessoa_juridica6").hide();
	
	<?php }else{ ?>
	$("#pessoa_fisica").hide();
	$("#pessoa_fisica1").hide();
	$("#pessoa_fisica2").hide();
	$("#pessoa_fisica3").hide();
	$("#pessoa_fisica4").hide();
	$("#pessoa_fisica5").hide();
	$("#pessoa_fisica6").hide();	
	$("#pessoa_juridica").show();
	$("#pessoa_juridica1").show();
	$("#pessoa_juridica2").show();
	$("#pessoa_juridica3").show();
	$("#pessoa_juridica4").show();
	$("#pessoa_juridica5").show();
	$("#pessoa_juridica6").show();

	<?php }?>
<?php }else{ ?>
   <?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value->tipo_pessoa)){?>
		<?php if ($_smarty_tpl->tpl_vars['fornecedors']->value->tipo_pessoa=='f'){?>
$("#pessoa_fisica").show();
	$("#pessoa_fisica1").show();
	$("#pessoa_fisica2").show();
	$("#pessoa_fisica3").show();
	$("#pessoa_fisica4").show();
	$("#pessoa_fisica5").show();
	$("#pessoa_fisica6").show();
	$("#pessoa_juridica").hide();
	$("#pessoa_juridica1").hide();
	$("#pessoa_juridica2").hide();
	$("#pessoa_juridica3").hide();
	$("#pessoa_juridica4").hide();
	$("#pessoa_juridica5").hide();
	$("#pessoa_juridica6").hide();
	
	<?php }else{ ?>
	$("#pessoa_fisica").hide();
	$("#pessoa_fisica1").hide();
	$("#pessoa_fisica2").hide();
	$("#pessoa_fisica3").hide();
	$("#pessoa_fisica4").hide();
	$("#pessoa_fisica5").hide();
	$("#pessoa_fisica6").hide();	
	$("#pessoa_juridica").show();
	$("#pessoa_juridica1").show();
	$("#pessoa_juridica2").show();
	$("#pessoa_juridica3").show();
	$("#pessoa_juridica4").show();
	$("#pessoa_juridica5").show();
	$("#pessoa_juridica6").show();
		<?php }?>  
	<?php }?>


<?php }?>
	
	
});
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
function SomenteNumero(e){
 var tecla=(window.event)?event.keyCode:e.which;
 if((tecla>47 && tecla<58)) return true;
 else{
 if (tecla==8 || tecla==0) return true;
 else  return false;
 }
}
function verificarCPF(c){
    var i;
    s = c;
    var c = s.substr(0,9);
    var dv = s.substr(9,2);
    var d1 = 0;
    var v = false;
 
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(10-i);
    }
    if (d1 == 0){
        alert("CPF Inválido")
        v = true;
        return false;
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(0) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }
 
    d1 *= 2;
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(11-i);
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(1) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }
    if (!v) {
      
    }
}
jQuery(function($){
   $("#cpf").mask("999.999.999-99");
   $("#cnpj").mask("99.999.999/9999-99");
   $("#cep").mask("99999-999"); 
   $("#tel").mask("(99) 9999-9999");
   $("#tel1").mask("(99) 9999-9999");
   $("#tel2").mask("(99) 9999-9999");

});
</script>


	<section id="main" class="column">
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">Fornecedor</h3>
		<ul class="tabs">
   			<li><a href="/estagio/fornecedor/">Lista</a></li>
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
    				<th>Código</th> 
    				<th>Razão social/ Nome</th> 
	                <th>CNPJ/ CPF</th>
					<th></th> 
    				<th>Ação</th> 
				</tr> 
			</thead> 
			<tbody> 
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fornecedor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                        <tr> 
                            <td><input type="checkbox"></td> 
                            <td><?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
</td> 
                            <td><?php if ($_smarty_tpl->tpl_vars['c']->value->tipo_pessoa=='j'){?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['c']->value->razao, 'UTF-8');?>
<?php }else{ ?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['c']->value->nome, 'UTF-8');?>
<?php }?></td> 
                            <td><?php if ($_smarty_tpl->tpl_vars['c']->value->tipo_pessoa=='j'){?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['c']->value->cnpj, 'UTF-8');?>
<?php }else{ ?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['c']->value->cpf, 'UTF-8');?>
<?php }?></td> 

                            <td></td>  
                            <td>
                                 <a href="/estagio/fornecedor/novofornecedor/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/edit"><img src="/estagio/static/img/icn_edit.png" /></a>
                                 <a href="/estagio/fornecedor/novofornecedor/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/delete" onClick="return confirm('Deseja realmente excluir?');"><img src="/estagio/static/img/icn_trash.png" /></a>
                            </td> 
                        </tr> 
                  <?php } ?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		<div id="tab2" class="tab_content" <?php if ($_smarty_tpl->tpl_vars['edit']->value=='true'){?> style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
				<div class="module_content">
          <form action="/estagio/fornecedor/novofornecedor" method="post" name="condicao" enctype="multipart/form-data">   
						<fieldset style="width:900px; float:left; margin-right: 2%;">
           
                                <label style="width:20%;float:left;">Pessoa:</label>
                                <label style="width:15%;float:left;"></label>
                                <label style="width:9%; float:left;"></label>
                                <label style="width:30%;float:left;"></label>
                                <label style="width:15%;float:left;"></label>
                                <div style="width:21%;float:left;margin-bottom:10px;height:30px">
                               		<input onClick="$('#tipo_pessoa').show();$('#some').show();$('#pessoa_fisica').show();$('#pessoa_juridica').hide();$('#pessoa_fisica1').show();$('#pessoa_juridica1').hide();$('#pessoa_fisica2').show();$('#pessoa_juridica2').hide();$('#pessoa_fisica3').show();$('#pessoa_juridica3').hide();$('#pessoa_fisica4').show();$('#pessoa_juridica4').hide();" name="tipo_pessoa" type="radio" value="f" <?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php if ($_smarty_tpl->tpl_vars['fornecedors']->value->tipo_pessoa=='f'){?>checked<?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['edit']->value=='false'){?>checked <?php }?> />
                                    Física
                                    <input onClick="$('#tipo_pessoa').hide();$('#some').hide();$('#pessoa_fisica').hide();$('#pessoa_juridica').show();$('#pessoa_fisica1').hide();$('#pessoa_juridica1').show();$('#pessoa_fisica2').hide();$('#pessoa_juridica2').show();$('#pessoa_fisica3').hide();$('#pessoa_juridica3').show();$('#pessoa_fisica4').hide();$('#pessoa_juridica4').show();" name="tipo_pessoa" type="radio" value="j" <?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php if ($_smarty_tpl->tpl_vars['fornecedors']->value->tipo_pessoa=='j'){?>checked<?php }?><?php }?> />
                                    Juridica</span>
                                </div>
                                <label style="width:15%;float:left;"></label>
                                <label style="width:9%; float:left;"></label>
                                <label style="width:70%;float:left;"></label>
                        
							<!-- Inicio primeira linha -->
                                <label style="width:9%; float:left;">Codigo</label>
                                <div id="pessoa_juridica3"> 
                                	<label style="width:43%;float:left;">Razão Social*</label>
                                </div>
                                <div id="pessoa_fisica3"> 
                                	<label style="width:43%;float:left;">Nome Completo*</label>
                                </div>                                
                                <div id="pessoa_juridica1"> 
                                	<label style="width:15%;float:left;">Nome Fantasia</label>
                                </div>
                                 <div id="pessoa_fisica1"> 
                                	<label style="width:15%;float:left;">Apelido</label>
                                </div>
                                <label style="width:20%;float:left;"></label>
                                <input style="width:6%;float:left;margin-bottom:10px"type="text" required="required" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->id;?>
<?php }?>" readonly="readonly">
                                
                                 <div id="pessoa_juridica4"> 
                                	<input style="width:40%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text" maxlength="100"  onkeypress="return somente_txt(event);"   name="razao" maxlength="40"  onkeypress="return somente_txt(event);"  value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->razao;?>
<?php }?>" >
                    			</div>
                                <div id="pessoa_fisica4"> 
                                	<input style="width:40%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text"  maxlength="100"  onkeypress="return somente_txt(event);"  name="nome" maxlength="40"  onkeypress="return somente_txt(event);"  value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->nome;?>
<?php }?>" >
                    			</div>              
                                <div id="pessoa_juridica2"> 
                                	<input style="width:40%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text" maxlength="20"  onkeypress="return somente_txt(event);"   name="nome_fantasia"  maxlength="40"  onkeypress="return somente_txt(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->nome_fantasia;?>
<?php }?>" >
                    			</div>
                                <div id="pessoa_fisica2"> 
                                	<input style="width:40%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text"  maxlength="20"  onkeypress="return somente_txt(event);"   name="apelido"  maxlength="40"  onkeypress="return somente_txt(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->apelido;?>
<?php }?>" >
                    			</div>                                
                            <!--Fim primeira linha -->                        
                         	<!-- Inicio primeira linha -->
   								<label style="width:35%; float:left;">Logradouro*</label>
                                <label style="width:14%;float:left;">Numero*</label>
                                <label style="width:15%;float:left;">Complemento</label>
                                 <label style="width:30%;float:left;">Bairro*</label>
                                <input style="width:32%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text" name="logradouro"  maxlength="40"  onkeypress="return somente_txt(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->logradouro;?>
<?php }?>" required="required">
                               
                                <input style="width:12%;float:left;margin-bottom:10px"type="text" name="numero"  maxlength="10"  onkeypress="return SomenteNumero(event);"value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->numero;?>
<?php }?>" required="required">
                                <input style="width:12%;float:left; margin-bottom:10px;text-transform:uppercase;"type="text"name="complemento" maxlength="20"  value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->complemento;?>
<?php }?>" required="required">
    						    <input style="width:28%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text" name="bairro"  maxlength="20"  onkeypress="return somente_txt(event);"value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->bairro;?>
<?php }?>" required="required">
                               
                            <!--Fim primeira linha -->
                            <!-- Inicio Segunda linha -->
                             <label style="width:15%; float:left;">Cep</label>
								<label style="width:30%; float:left;">Cidade*</label>
                                <label style="width:16%;float:left;"></label>
                                <label style="width:30%;float:left;">Estado</label>
                                 <input style="width:12%;float:left;margin-bottom:10px"type="text" name="cep" id="cep" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->cep;?>
<?php }?>" onkeypress="return SomenteNumero(event);" required="required">
                              <a href="http://localhost/estagio/cidade/teste" rel="shadowbox;width=800;height=600;">
                                <input style="width:6%;"type="hidden" name="cidade_id" id="cidade_id" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->cidade_id;?>
<?php }?>" readonly="readonly">
                                <input style="width:32%;text-transform:uppercase;float:left;margin-bottom:10px"type="text" name="cidade" id="cidade"value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->cidade->nome;?>
<?php }?>" required="required">
                                <div style="width:12%;float:left;margin-bottom:10px;height:20px; margin-left:11px" >
                                	<input type="submit" value="Buscar" />
                                </div> 
                              </a>
                             <a href="http://localhost/estagio/pais/teste" rel="shadowbox;width=800;height=600;">                                
                                <input style="width:32%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text" name="estado" id="estado" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->cidade->estado->nome;?>
<?php }?>" required="required">
                             </a>
                            <!-- Fim Segunda linha -->     

                            
                            <!-- Inicio Quarta linha -->
                                <label style="width:15%; float:left;">FAX</label>
                                <label style="width:15%;float:left;">Telefone</label>
                                <label style="width:14%;float:left;">Celular</label>
                                <label style="width:40%;float:left;">Email</label>
                                <input style="width:12%;float:left;margin-bottom:10px"type="text"name="fax" id="tel" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->fax;?>
<?php }?>" required="required">
                                <input style="width:12%;float:left;margin-bottom:10px"type="text"name="telefone" onkeypress="return SomenteNumero(event);" id="tel1" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->telefone;?>
<?php }?>" required="required">
                                <input style="width:12%;float:left;margin-bottom:10px"type="text"name="celular" onkeypress="return SomenteNumero(event);" id="tel2" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->celular;?>
<?php }?>" required="required">
                                <input style="width:48%;float:left; margin-bottom:10px;text-transform:uppercase;"type="text"name="email" maxlength="50"  value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->email;?>
<?php }?>" required="required">                              
                            <!-- Fim Quarta linha -->
                            <!-- Inicio Quarta linha -->
                                <label style="width:31%;float:left;">Site</label>
                                <label style="width:15%; float:left;">Nome Contato</label>
                                <label style="width:15%;float:left;"></label>
                                <label style="width:14%;float:left;"></label>
                                <input style="width:28%;float:left; margin-bottom:10px;text-transform:uppercase;"type="text"name="site" maxlength="50"  value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->site;?>
<?php }?>" required="required">  
                                <input style="width:28%;float:left;margin-bottom:10px;text-transform:uppercase"type="text"name="nome_contato" maxlength="100"  onkeypress="return somente_txt(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->nome_contato;?>
<?php }?>" required="required">
                                <label style="width:100%;float:left;height:5px"></label>                       
                            <!-- Fim Quarta linha -->                            
                            
                            <!-- Inicio Quinta linha -->
                                <label style="width:18%; float:left;">Condição de pagamento*</label>
                                <label style="width:22%;float:left;"></label>
                                <label style="width:15%;float:left;">Data Cadastro</label>
                                <label style="width:15%;float:left;">Data Alteração</label>
                                <label style="width:24%;float:left;"></label>
                                <a href="http://localhost/estagio/condicao_pagamento/teste" rel="shadowbox;width=800;height=600;">                  
                                 <input style="width:27%;float:left;margin-bottom:10px"type="hidden" id="condicao_pagamento_id" name="condicao_pagamento_id" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->condicao_pagamento_id;?>
<?php }?>" required="required">      
                                <input style="width:27%;float:left;margin-bottom:10px"type="text" id="condicao_pagamento_nome" name="condicao_pagamento_nome" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->condicao_pagamento->nome;?>
<?php }?>" required="required">
                                <div style="width:10%;float:left;height:30px; margin-left:11px ">
	                                <input type="submit" value="Buscar" />
                                </div> 
                                </a> 
                                <input style="width:12%;float:left;margin-bottom:10px"type="text"  name="data_cadastro" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['fornecedors']->value->data_cadastro,'%D');?>
<?php }?>" readonly="readonly" >
                                <input style="width:12%;float:left; margin-bottom:10px"type="text" name="data_alteracao" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['fornecedors']->value->data_alteracao,'%D');?>
<?php }?>" readonly="readonly">   
                            	 <label style="width:22%;float:left;height:40px"></label>
                            <!-- Fim Quinta linha -->
                            
                            <!-- Inicio Sexta linha -->  
             			 <div id="pessoa_fisica">
             					<label style="width:15%; float:left;">RG</label>
                                <label style="width:70%;float:left;">CPF</label>
                                <input style="width:11%;float:left;margin-bottom:10px"type="text"name="rg" maxlength="20" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->rg;?>
<?php }?>" >
                                <input style="width:12%;float:left;margin-bottom:10px"type="text"name="cpf" id="cpf" maxlength="10" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->cpf;?>
<?php }?>" >
						 </div>
                        <div id="pessoa_juridica"> 
                                <label style="width:15%; float:left;">Ins. Estadual</label>
                                <label style="width:70%;float:left;">CNPJ</label>
                                <input style="width:11%;float:left;margin-bottom:10px"type="text"name="insestadual" maxlength="20" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->insestadual;?>
<?php }?>" >
                                <input style="width:12%;float:left;margin-bottom:10px"type="text"name="cnpj" id="cnpj" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['fornecedors']->value)){?><?php echo $_smarty_tpl->tpl_vars['fornecedors']->value->cnpj;?>
<?php }?>" >
 						</div>	
                               
                            <!-- Fim Sexta linha -->  
                           
                           <!-- Inicio Setima linha -->   

                            <!-- Fim Setima linha -->
</div>                 


                            
                            
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