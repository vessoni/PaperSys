<?php /* Smarty version Smarty-3.1.13, created on 2013-09-11 20:03:27
         compiled from "application\views\consulta\cliente.html" */ ?>
<?php /*%%SmartyHeaderCode:16845230ec47650ff8-94722611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1383fc5bc897185397f5476028732dd39925b14d' => 
    array (
      0 => 'application\\views\\consulta\\cliente.html',
      1 => 1378940585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16845230ec47650ff8-94722611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5230ec477cc9a6_75580994',
  'variables' => 
  array (
    'edit' => 0,
    'tipo_pessoa' => 0,
    'clientes' => 0,
    'cliente' => 0,
    'c' => 0,
    'erros' => 0,
    'erro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5230ec477cc9a6_75580994')) {function content_5230ec477cc9a6_75580994($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\estagio\\application\\libraries\\Smarty\\plugins\\modifier.date_format.php';
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
	$("#pessoa_juridica").hide();
	$("#pessoa_juridica1").hide();
	$("#pessoa_juridica2").hide();
	<?php }else{ ?>
	$("#pessoa_fisica").hide();
	$("#pessoa_fisica1").hide();
	$("#pessoa_fisica2").hide();
	$("#pessoa_juridica").show();
	$("#pessoa_juridica1").show();
	$("#pessoa_juridica2").show();
	<?php }?>
<?php }else{ ?>
   <?php if (isset($_smarty_tpl->tpl_vars['clientes']->value->tipo_pessoa)){?>
		<?php if ($_smarty_tpl->tpl_vars['clientes']->value->tipo_pessoa=='f'){?>
		$("#pessoa_fisica").show();
		$("#pessoa_fisica1").show();
		$("#pessoa_fisica2").show();
		$("#pessoa_juridica").hide();
		$("#pessoa_juridica1").hide();
		$("#pessoa_juridica2").hide();
		<?php }else{ ?>
		$("#pessoa_fisica").hide();
		$("#pessoa_fisica1").hide();
		$("#pessoa_fisica2").hide();
		$("#pessoa_juridica").show();
		$("#pessoa_juridica1").show();
		$("#pessoa_juridica2").show();
		<?php }?>  
	<?php }?>

   <?php if (count($_POST)>0){?>
        <?php if ($_POST['tipo_pessoa']=='f'){?>
        $("#pessoa_fisica").show();
        $("#pessoa_fisica1").show();
        $("#pessoa_fisica2").show();
        $("#pessoa_juridica").hide();
        $("#pessoa_juridica1").hide();
        $("#pessoa_juridica2").hide();
        <?php }else{ ?>
        $("#pessoa_fisica").hide();
        $("#pessoa_fisica1").hide();
        $("#pessoa_fisica2").hide();
        $("#pessoa_juridica").show();
        $("#pessoa_juridica1").show();
        $("#pessoa_juridica2").show();
        <?php }?>  
    <?php }?>    


<?php }?>
	
	
});
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


jQuery(function($){
   $("#cpf").mask("999.999.999-99");
   $("#cep").mask("99999-999"); 
   $("#cnpj").mask("99.999.999/9999-99");
    $("#data_admissao").mask("9999-99-99"); 
   $("#tel").mask("(99)9999-9999"); 
   $("#tel1").mask("(99)9999-9999");
   $("#tel2").mask("(99)9999-9999");
   $("#money").mask('000.000.000.000.000,00', {reverse: true});
    $("#money2").mask('000.000.000.000.000,00', {reverse: true});
 });
</script>
 <script>
$(function() {
    $("#data_nascimento").datepicker({
       changeMonth: true, changeYear: true, yearRange: '1950:2010',
		dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
  
    });
});
</script>


</head>

	<section id="main" class="column">
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">Cliente</h3>
		<ul class="tabs">
   			<li><a href="/estagio/cliente/">Lista</a></li>
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
    				<th>Cliente</th> 
                    <th>CPF</th> 
					<th></th> 
    				<th>Ação</th> 
				</tr> 
			</thead> 
			<tbody> 
				   <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cliente']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                        <tr> 
                            <td><input type="checkbox"></td> 
                            <td><?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
</td> 
                            <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['c']->value->nome, 'UTF-8');?>
</td> 
                            <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['c']->value->cpf, 'UTF-8');?>
</td> 

                            <td></td>  
                            <td>
                                 <a href="/estagio/cliente/novocliente/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/edit"><img src="/estagio/static/img/icn_edit.png" /></a>
                                 <a href="/estagio/cliente/novocliente/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/delete" onClick="return confirm('Deseja realmente excluir?');"><img src="/estagio/static/img/icn_trash.png" /></a>
                            </td> 
                        </tr> 
                  <?php } ?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		<div id="tab2" class="tab_content" <?php if ($_smarty_tpl->tpl_vars['edit']->value=='true'){?> style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
				<div class="module_content">
				<div class="module_content">
          <form action="/estagio/cliente/novocliente" method="post" name="condicao" enctype="multipart/form-data">  

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
						<fieldset style="width:900px; float:left; margin-right: 2%;">
           
                                    <label style="width:20%;float:left;">Pessoa: *</label>
                                    <label style="width:15%;float:left;"></label>
                                    <label style="width:9%; float:left;"></label>
                                    <label style="width:30%;float:left;"></label>
                                    <label style="width:15%;float:left;"></label>
                                    <div style="width:21%;float:left;margin-bottom:10px;height:30px">
                                   		<input onClick="$('#tipo_pessoa').show();$('#some').show();$('#pessoa_fisica').show();$('#pessoa_juridica').hide();$('#pessoa_fisica1').show();$('#pessoa_juridica1').hide();$('#pessoa_fisica2').show();" name="tipo_pessoa" required type="radio" value="f"  <?php if (count($_POST)>0){?> <?php if ($_POST['tipo_pessoa']=='f'){?>checked<?php }?><?php }?> <?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php if ($_smarty_tpl->tpl_vars['clientes']->value->tipo_pessoa=='f'){?>checked<?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['edit']->value=='false'){?>checked <?php }?> />
                                        Física
                                        <input onClick="$('#tipo_pessoa').hide();$('#some').hide();$('#pessoa_fisica').hide();$('#pessoa_juridica').show();$('#pessoa_fisica1').hide();$('#pessoa_juridica1').show();$('#pessoa_fisica2').hide();" name="tipo_pessoa" required type="radio" value="j" <?php if (count($_POST)>0){?> <?php if ($_POST['tipo_pessoa']=='j'){?>checked<?php }?><?php }?> <?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php if ($_smarty_tpl->tpl_vars['clientes']->value->tipo_pessoa=='j'){?>checked<?php }?><?php }?> />
                                        Juridica</span>
                                    </div>
                                    <label style="width:15%;float:left;"></label>
                                    <label style="width:9%; float:left;"></label>
                                    <label style="width:70%;float:left;"></label>
                            
    							<!-- Inicio primeira linha -->
                                    <label style="width:9%; float:left;">Codigo</label>
                                    <label style="width:30%;float:left;">Cliente*</label>
                                    <label style="width:15%;float:left;">Data Nascimento</label>
                                    <label style="width:40%;float:left;"><div id="pessoa_fisica1">Sexo</div></label>
                                    <input style="width:6%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text" required="required" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->id;?>
<?php }?>" readonly="readonly">
                                    <input style="width:28%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text" required="required" maxlength="100"  onkeypress="return somente_txt(event);"  name="nome" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->nome;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['nome'];?>
<?php }?>" required="required">
                                    <input style="width:12%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text" id="data_nascimento" name="data_nascimento" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->data_nascimento;?>
<?php }?>">
                                    <div id="pessoa_fisica2" style="width:21%;float:left;margin-bottom:10px;height:30px" >
                                        <input type="radio" name="sexo" required value="m"   <?php if (count($_POST)>0){?> <?php if ($_POST['sexo']=='m'){?>checked<?php }?><?php }?>  <?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php if ($_smarty_tpl->tpl_vars['clientes']->value->sexo=='m'){?>checked<?php }?><?php }?>> Masculino &nbsp;
                                        <input type="radio" name="sexo" required value="f" <?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php if ($_smarty_tpl->tpl_vars['clientes']->value->sexo=='f'){?>checked<?php }?><?php }?>>  Feminino
                                    </div>       
                                     <div id="pessoa_juridica1" style="width:21%;float:left;margin-bottom:10px;height:30px" >
                                    </div>                              

                                    <label style="width:15%;float:left;"></label>
                                <!--Fim primeira linha -->                        
                             	<!-- Inicio Segunda linha -->
       								<label style="width:35%; float:left;">Logradouro*</label>
                                   <label style="width:14%;float:left;">Numero*</label>
                                    <label style="width:15%;float:left;">Complemento</label>
                                     <label style="width:30%;float:left;">Bairro*</label>
                                    <input style="width:32%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text" maxlength="40"  onkeypress="return somente_txt(event);"  name="logradouro" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->logradouro;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['logradouro'];?>
<?php }?>"  required="required">
                                    <input style="width:12%;float:left;margin-bottom:10px"type="text" maxlength="10"  onkeypress="return SomenteNumero(event);"  name="numero"value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->numero;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['numero'];?>
<?php }?>" required="required">
                                    <input style="width:12%;float:left; margin-bottom:10px;text-transform:uppercase;" maxlength="20" type="text" name="complemento" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->complemento;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['complemento'];?>
<?php }?>">
        							<input style="width:28%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text" maxlength="20"  onkeypress="return somente_txt(event);"  name="bairro"value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->bairro;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['bairro'];?>
<?php }?>" required="required">
                                   
                                <!--Fim primeira linha -->
                                <!-- Inicio Segunda linha -->
                                 <label style="width:15%; float:left;">Cep</label>
    								<label style="width:30%; float:left;">Cidade*</label>
                                    <label style="width:16%;float:left;"></label>
                                    <label style="width:30%;float:left;">Estado</label>
                                     <input style="width:12%;float:left;margin-bottom:10px"type="text" name="cep" id="cep" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->cep;?>
<?php }?>">
                                  <a href="http://localhost/estagio/cidade/teste" rel="shadowbox;width=800;height=600;">
                                    <input style="width:6%;"type="hidden" name="cidade_id" id="cidade_id" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->cidade_id;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['cidade_id'];?>
<?php }?>" readonly="readonly">
                                    <input style="width:32%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text" name="cidade" id="cidade"value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->cidade->nome;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['cidade'];?>
<?php }?>" required="required" readonly="readonly">
                                    <div style="width:12%;float:left;margin-bottom:10px;height:20px; margin-left:11px" >
                                    	<input type="submit" value="Buscar" />
                                    </div> 
                                  </a>
                                 <a href="http://localhost/estagio/pais/teste" rel="shadowbox;width=800;height=600;">                                
                                    <input style="width:32%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text" name="estado" id="estado" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->cidade->estado->nome;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['estado'];?>
<?php }?>" required="required" readonly="readonly">
                                 </a>
                                <!-- Fim Segunda linha -->     

                                
                                <!-- Inicio Quarta linha -->
                                    <label style="width:15%; float:left;">Tel. Residencial</label>
                                    <label style="width:15%;float:left;">Tel. Comercial</label>
                                    <label style="width:14%;float:left;">Celular</label>
                                    <label style="width:40%;float:left;">Email</label>
                                    <input style="width:12%;float:left;margin-bottom:10px"type="text"name="tel_residencial" id="tel" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->tel_residencial;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['tel_residencial'];?>
<?php }?>" >
                                    <input style="width:12%;float:left;margin-bottom:10px"type="text"name="tel_comercial" id="tel1" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->tel_comercial;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['tel_comercial'];?>
<?php }?>">
                                    <input style="width:12%;float:left;margin-bottom:10px"type="text"name="celular" id="tel2" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->celular;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['celular'];?>
<?php }?>">
                                    <input style="width:48%;float:left; margin-bottom:10px;text-transform:uppercase;" maxlength="50"  type="text"name="email" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->email;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['email'];?>
<?php }?>">                              
                                <!-- Fim Quarta linha -->
                                
                                <!-- Inicio Quinta linha -->
                                    <label style="width:18%; float:left;">Condição de pagamento*</label>
                                    <label style="width:22%;float:left;"></label>
                                    <label style="width:15%;float:left;">Data Cadastro</label>
                                    <label style="width:15%;float:left;">Data Alteração</label>
                                    <label style="width:24%;float:left;"></label>
                                    <a href="http://localhost/estagio/condicao_pagamento/teste" rel="shadowbox;width=800;height=600;">                  
                                     <input style="width:27%;float:left;margin-bottom:10px"type="hidden" id="condicao_pagamento_id" name="condicao_pagamento_id" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->condicao_pagamento_id;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['condicao_pagamento_id'];?>
<?php }?>" required="required">      
                                    <input style="width:27%;float:left;margin-bottom:10px"type="text" id="condicao_pagamento_nome" name="condicao_pagamento_nome" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->condicao_pagamento->nome;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['condicao_pagamento_nome'];?>
<?php }?>" required="required" readonly="">
                                    <div style="width:10%;float:left;height:30px; margin-left:11px ">
    	                                <input type="submit" value="Buscar" />
                                    </div> 
                                    </a> 
                                    <input style="width:12%;float:left;margin-bottom:10px"type="text"  name="data_cadastro" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['clientes']->value->data_cadastro,'%D');?>
<?php }?>" readonly="readonly">
                                    <input style="width:12%;float:left; margin-bottom:10px"type="text" name="data_alteracao" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['clientes']->value->data_alteracao,'%D');?>
<?php }?>" readonly="readonly">   
                                	 <label style="width:22%;float:left;height:40px"></label>
                                <!-- Fim Quinta linha -->
                                
                                <!-- Inicio Sexta linha -->  
                         			 <div id="pessoa_fisica">
                         					<label style="width:15%; float:left;">RG</label>
                                            <label style="width:70%;float:left;">CPF</label>
                                            <input style="width:11%;float:left;margin-bottom:10px"type="text"name="rg" maxlength="20" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->rg;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['rg'];?>
<?php }?>" >
                                            <input style="width:12%;float:left;margin-bottom:10px"type="text"name="cpf" maxlength="10" onkeypress="return SomenteNumero(event);" id="cpf" maxlength="11" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->cpf;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['cpf'];?>
<?php }?>" >
            						 </div>
                                    <div id="pessoa_juridica"> 
                                            <label style="width:15%; float:left;">Ins. Estadual</label>
                                            <label style="width:70%;float:left;">CNPJ</label>
                                            <input style="width:11%;float:left;margin-bottom:10px"type="text"name="insestadual" maxlength="20" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->insestadual;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['insestadual'];?>
<?php }?>" >
                                            <input style="width:12%;float:left;margin-bottom:10px"type="text"name="cnpj" id="cnpj" value="<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)){?><?php echo $_smarty_tpl->tpl_vars['clientes']->value->cnpj;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['cnpj'];?>
<?php }?>" >
             						</div>	
                               
                            <!-- Fim Sexta linha -->  
                           
                           <!-- Inicio Setima linha -->   


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