<?php /* Smarty version Smarty-3.1.13, created on 2013-09-11 19:33:33
         compiled from "application\views\consulta\funcionario.html" */ ?>
<?php /*%%SmartyHeaderCode:200945230efbd874c82-54579527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b98660da104a4c154171d69aae0132a76b4c2b65' => 
    array (
      0 => 'application\\views\\consulta\\funcionario.html',
      1 => 1378936434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200945230efbd874c82-54579527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
    'funcionario' => 0,
    'e' => 0,
    'erros' => 0,
    'erro' => 0,
    'funcionarios' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5230efbda40db3_96651637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5230efbda40db3_96651637')) {function content_5230efbda40db3_96651637($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/topo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("includes/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="http://localhost/estagio/static/js/shadowbox.css">
<script type="text/javascript" src="http://localhost/estagio/static/js/shadowbox.js"></script>
<script type="text/javascript" src="http://localhost/estagio/static/js/validacao.js"></script>
<script type="text/javascript">
Shadowbox.init({  
	language: 'pt',  
	player: ['img', 'html', 'swf']  
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
   $("#cep").mask("99999-999"); 

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
    $("#data_admissao").datepicker({
       changeMonth: true, changeYear: true, yearRange: '1950:2010',
		dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
  
    });
    $("#data_demissao").datepicker({
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

	<section id="main" class="column">
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">Funcionario</h3>
		<ul class="tabs">
   			<li><a href="/estagio/funcionario/">Lista</a></li>
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
			        <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['funcionario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
                        <tr> 
                            <td><input type="checkbox"></td> 
                            <td><?php echo $_smarty_tpl->tpl_vars['e']->value->id;?>
</td> 
                            <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['e']->value->nome, 'UTF-8');?>
</td> 

                            <td></td>  
                            <td>
                                 <a href="/estagio/funcionario/novofuncionario/<?php echo $_smarty_tpl->tpl_vars['e']->value->id;?>
/edit"><img src="/estagio/static/img/icn_edit.png" /></a>
                                 <a href="/estagio/funcionario/novofuncionario/<?php echo $_smarty_tpl->tpl_vars['e']->value->id;?>
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
               <form action="/estagio/funcionario/novoFuncionario" method="post" enctype="multipart/form-data">    
						<fieldset style="width:900px; float:left; margin-right: 2%;">
							<!-- Inicio primeira linha -->
                                <label style="width:9%; float:left;">Codigo</label>
                                <label style="width:30%;float:left;">Funcionario*</label>
                                <label style="width:15%;float:left;">Data Nascimento</label>
                                <label style="width:20%;float:left;">Sexo*</label>
                                 <label style="width:15%;float:left;"></label>
                                <input style="width:6%;float:left;margin-bottom:10px" type="text" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->id;?>
<?php }?>" readonly="readonly">
                                <input style="width:28%;float:left;margin-bottom:10px;text-transform:uppercase"type="text" name="nome" maxlength="100"  onkeypress="return somente_txt(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->nome;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['nome'];?>
<?php }?>" required="required">
                               <input style="width:12%;float:left;margin-bottom:10px;text-transform:uppercase;"type="text" id="data_nascimento" name="data_nascimento" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->data_nascimento;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['data_nascimento'];?>
<?php }?>" readonly="readonly" >
                                <div style="width:21%;float:left;margin-bottom:10px;height:30px">
                                    <input type="radio" required  name="sexo" value="m" <?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->sexo=='f';?>
checked<?php }else{ ?><?php }?>> Masculino &nbsp;
                                    <input type="radio" required  name="sexo" value="f" <?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->sexo=='m';?>
checked<?php }else{ ?><?php }?> >Feminino
                                </div>
                                <label style="width:15%;float:left;"></label>
                            <!--Fim primeira linha -->                        
                         	<!-- Inicio primeira linha -->
   								<label style="width:35%; float:left;">Logradouro*</label>
                             	  <label style="width:14%;float:left;">Numero*</label>
                                <label style="width:15%;float:left;">Complemento</label>
                                 <label style="width:30%;float:left;">Bairro*</label>
                                <input style="width:32%;float:left;margin-bottom:10px;text-transform:uppercase"type="text" name="logradouro" maxlength="40"  onkeypress="return somente_txt(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->logradouro;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['logradouro'];?>
<?php }?>" required="required">
                                <input style="width:12%;float:left;margin-bottom:10px"type="text" name="numero"   maxlength="10" id="numero" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->numero;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['numero'];?>
<?php }?>" required="required">
                                <input style="width:12%;float:left; margin-bottom:10px;text-transform:uppercase"type="text"name="complemento" maxlength="20" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->complemento;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['complemento'];?>
<?php }?>">
                            	 <input style="width:28%;float:left;margin-bottom:10px;text-transform:uppercase"type="text" name="bairro" maxlength="20"  onkeypress="return somente_txt(event);"value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->bairro;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['bairro'];?>
<?php }?>" required="required">
                            <!--Fim primeira linha -->
                            <!-- Inicio Segunda linha -->
                             <label style="width:15%; float:left;">Cep</label>
								<label style="width:30%; float:left;">Cidade*</label>
                                <label style="width:16%;float:left;"></label>
                                <label style="width:30%;float:left;">Estado</label>
                                 <input style="width:12%;float:left;margin-bottom:10px"type="text" onkeypress="return SomenteNumero(event);" name="cep" id="cep" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->cep;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['cep'];?>
<?php }?>">
                              <a href="http://localhost/estagio/cidade/teste" rel="shadowbox;width=800;height=600;">
                                <input style="width:6%;"type="hidden" name="cidade_id" id="cidade_id" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->cidade_id;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['cidade_id'];?>
<?php }?>" readonly="readonly">
                                <input style="width:32%;float:left;margin-bottom:10px;text-transform:uppercase"type="text" name="cidade" id="cidade"value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->cidade->nome;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['cidade'];?>
<?php }?>" required="required" readonly="readonly">
                                <div style="width:12%;float:left;margin-bottom:10px;height:20px; margin-left:11px" >
                                	<input type="submit" value="Buscar" />
                                </div> 
                              </a>
                             <a href="http://localhost/estagio/pais/teste" rel="shadowbox;width=800;height=600;">                                
                                <input style="width:32%;float:left;margin-bottom:10px;text-transform:uppercase"type="text" name="estado" id="estado" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->cidade->estado->nome;?>
<?php }?>" required="required" readonly="readonly">
                             </a>
                            
                            <!-- Inicio Quarta linha -->
                                <label style="width:15%; float:left;">Tel. Residencial</label>
                                <label style="width:15%;float:left;">Tel. Comercial</label>
                                <label style="width:14%;float:left;">Celular</label>
                                <label style="width:40%;float:left;">Email</label>
                                <input style="width:12%;float:left;margin-bottom:10px"type="text"name="tel_residencial" onkeypress="return SomenteNumero(event);" id="tel" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->tel_residencial;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['tel_residencial'];?>
<?php }?>">
                                <input style="width:12%;float:left;margin-bottom:10px"type="text"name="tel_comercial" onkeypress="return SomenteNumero(event);" id="tel1" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->tel_comercial;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['tel_comercial'];?>
<?php }?>" >
                                <input style="width:12%;float:left;margin-bottom:10px"type="text"name="celular" onkeypress="return SomenteNumero(event);" id="tel2" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->celular;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['celular'];?>
<?php }?>">
                                <input style="width:48%;float:left; margin-bottom:10px;text-transform:uppercase"type="text"name="email" maxlength="50" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->email;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['email'];?>
<?php }?>" >                             
                            <!-- Fim Quarta linha -->
                            
                            <!-- Inicio Quinta linha -->
                                <label style="width:18%; float:left;">Cargo*</label>
                                <label style="width:10%;float:left;"></label>
                                <label style="width:14%;float:left;">Salário*</label>
                                <label style="width:15%;float:left;">Comissao*</label>
                                <label style="width:14%;float:left;">Data Admissão</label>
                                <label style="width:15%;float:left;">Data Demissão</label>
                                <a href="http://localhost/estagio/cargo/teste" rel="shadowbox;width=800;height=600;">
                                <input style="width:15%;float:left;margin-bottom:10px;text-transform:uppercase"type="hidden" id="cargo_id" name="cargo_id" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->cargo->id;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['cargo_id'];?>
<?php }?>">
                                    <input style="width:15%;float:left;margin-bottom:10px"type="text" id="cargo" name="cargo" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->cargo->nome;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['cargo'];?>
<?php }?>" required="required" readonly="readonly">
                                    <div style="width:10%;float:left;height:30px; margin-left:11px ">
                                        <input type="submit" value="Buscar" />
                                    </div>  
                                </a>   
                                <input style="width:12%;float:left;margin-bottom:10px"  onkeypress="return SomenteNumero(event);"type="text"name="salario" id="money" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->salario;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['salario'];?>
<?php }?>" required="required">
                                <input style="width:12%;float:left;margin-bottom:10px"  onkeypress="return SomenteNumero(event);"type="text"name="comissao"  id="money2" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->comissao;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['comissao'];?>
<?php }?>" required="required">
                                <input style="width:12%;float:left;margin-bottom:10px"type="text"name="data_admissao" id="data_admissao"value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->data_admissao;?>
<?php }?>" required="required" readonly="readonly">
                                <input style="width:12%;float:left; margin-bottom:10px"type="text"name="data_demissao"  id="data_demissao" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->data_demissao;?>
<?php }?>" readonly="readonly" >
                            <!-- Fim Quinta linha -->
                            
                            <!-- Inicio Sexta linha -->  
                                <label style="width:22%;float:left;">Carteira de Trabalho</label>
                                <label style="width:14%; float:left;">CPF</label>
                                <label style="width:14%;float:left;">RG</label>
                                <label style="width:40%;float:left;"></label>
                                <input style="width:19%;float:left;margin-bottom:10px"type="text"name="clt" maxlength="20" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->clt;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['clt'];?>
<?php }?>" required="required">
                                <input style="width:11%;float:left;margin-bottom:10px"type="text"name="cpf" id="cpf" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->cpf;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['cpf'];?>
<?php }?>">
                                <input style="width:12%;float:left;margin-bottom:10px"type="text"name="rg" maxlength="20" onkeypress="return SomenteNumero(event);" value="<?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->rg;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['rg'];?>
<?php }?>">
                               
                            <!-- Fim Sexta linha -->  
                           
                           <!-- Inicio Setima linha -->   
                               <label style="width:100%; float:left;">Obs.</label>
                               <textarea name="obs" maxlength="255"  style="text-transform:uppercase"><?php if (isset($_smarty_tpl->tpl_vars['funcionarios']->value)){?><?php echo $_smarty_tpl->tpl_vars['funcionarios']->value->obs;?>
<?php }?><?php if (count($_POST)>0){?><?php echo $_POST['obs'];?>
<?php }?></textarea>
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