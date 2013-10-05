<?php /* Smarty version Smarty-3.1.13, created on 2013-09-22 22:02:27
         compiled from "application\views\consulta\compra.html" */ ?>
<?php /*%%SmartyHeaderCode:31326523f93230bc0f9-84437231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3f60746c181aa2ea9a69871c7bf6f5e58458917' => 
    array (
      0 => 'application\\views\\consulta\\compra.html',
      1 => 1376521048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31326523f93230bc0f9-84437231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_523f93231402f2_83371965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523f93231402f2_83371965')) {function content_523f93231402f2_83371965($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/topo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("includes/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<section id="main" class="column">
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">Compra</h3>
		<ul class="tabs">
   			<li><a href="/estagio/compra/">Lista</a></li>
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
    				<th>Número da nota</th> 
    				<th>Número de Série</th> 
					<th>Fornecedor</th>
					<th></th> 
    				<th>Ação</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>1</td> 
    				<td>0001</td> 
					<td>0001</td> 
					<td>Tilibri</td> 
    				<td></td> 
    				<td><input type="image" src="/estagio/static/img/icn_edit.png" title="Editar"><input type="image" src="/estagio/static/img/icn_trash.png" title="Excluir"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>2</td> 
    				<td>0002</td>
					<td>0002</td> 
					<td>Copal</td> 
    				<td></td> 
   				 	<td><input type="image" src="/estagio/static/img/icn_edit.png" title="Editar"><input type="image" src="/estagio/static/img/icn_trash.png" title="Excluir"></td> 
				</tr>
				
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		<div id="tab2" class="tab_content" <?php if ($_smarty_tpl->tpl_vars['edit']->value=='true'){?> style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
				<div class="module_content">
                 <form>
						<fieldset style="width:900px; float:left; margin-right: 2%;">
                        	<label style="width:13%; float:left;">n° Nota</label>
							<label style="width:12%; float:left;">Serie</label>
							<label style="width:13%;float:left;">Codigo</label>
							<label style="width:50%;float:left;">Fornecedor</label>
                            <input style="width:10%;float:left; margin-bottom:10px"type="text" required="required">
                            <input style="width:10%;float:left;margin-bottom:10px"type="text" required="required">
                            <input style="width:10%;float:left;margin-bottom:10px"type="text" required="required">
                             <input style="width:23%;float:left;margin-bottom:10px"type="text" required="required">
                                <input type="submit" value="Buscar" style="float:left">
							
                            <label style="width:100%;float:left;"></label>


                        	<label style="width:26%; float:left;">Produto</label>
							<label style="width:10%; float:left;">Quantidade</label>
							<label style="width:9%;float:left;">Custo</label>
							<label style="width:10%;float:left;">%IPI</label>
                            <label style="width:9%;float:left;">IPI</label>
                            <label style="width:10%;float:left;">%ICMS</label>
                            <label style="width:10%;float:left;">ICMS</label>
                             <input style="width:15%;float:left;margin-bottom:10px"type="text" required="required">
                                <input type="submit" value="Buscar" style="float:left">
                            <input style="width:7%;float:left; margin-bottom:10px"type="text" required="required">
                            <input style="width:7%;float:left;margin-bottom:10px"type="text" required="required">
                            <input style="width:7%;float:left;margin-bottom:10px"type="text" required="required">
                            <input style="width:7%;float:left; margin-bottom:10px"type="text" required="required">
                            <input style="width:7%;float:left;margin-bottom:10px"type="text" required="required">
                            <input style="width:7%;float:left;margin-bottom:10px"type="text" required="required">   
                             <input type="submit" value="+" style="float:left">                         
                      
							
                            <label style="width:100%;float:left;"></label>
    <div style="float:left;margin-left:10px; width:95%; margin-bottom:20px; background:#FFF">	                             
		<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr>
							

							
				</tr> 		
				<tr> 
    				<th>Codigo</th> 
    				<th>Produto</th> 
    				<th>Quantidade</th> 
                    <th>Valor unitário</th>
                    <th>Valor Total</th>  

				</tr> 
			</thead> 
			<tbody> 

  			<tr> 
   					
    				<td> Não há registros</td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
     		</tr>

			</tbody> 
            <thead> 
				<tr> 
    				<th></th> 
    				<th></th> 
    				<th></th> 
					<th></th> 
    				<th></th> 
				</tr> 
             </thead>            
			</table>                                
 </div>	                           
                            
                  <br />          

                        	<label style="width:18%; float:left;">Total Produtos</label>
							<label style="width:10%; float:left;">Base ICMS</label>
							<label style="width:9%;float:left;">ICMS</label>
							<label style="width:9%;float:left;">IPI</label>
                            <label style="width:9%;float:left;">Peso Bruto</label>
                            <label style="width:10%;float:left;">Peso Liquido</label>
                            <label style="width:10%;float:left;">Total Nota</label>
                             <input style="width:15%;float:left;margin-bottom:10px"type="text" required="required">

                            <input style="width:7%;float:left; margin-bottom:10px"type="text" required="required">
                            <input style="width:7%;float:left;margin-bottom:10px"type="text" required="required">
                            <input style="width:7%;float:left;margin-bottom:10px"type="text" required="required">
                            <input style="width:7%;float:left; margin-bottom:10px"type="text" required="required">
                            <input style="width:7%;float:left;margin-bottom:10px"type="text" required="required">
                            <input style="width:7%;float:left;margin-bottom:10px"type="text" required="required">   
                     				
                            <label style="width:100%;float:left;"></label> 
	
                        	<label style="width:18%; float:left;">Forma de Pagamento</label>
							<label style="width:7%; float:left;">Codigo</label>
							<label style="width:55%;float:left;">Condicao de Pagamento</label>
                             <input style="width:15%;float:left;margin-bottom:10px"type="text" required="required">
             <input style="width:5%;float:left;margin-bottom:10px"type="text" required="required">
                            <input style="width:20%;float:left;margin-bottom:10px"type="text" required="required">
                            <input type="submit" value="Pesquisa" style="float:left">  
                            <input type="submit" value="Gerar" style="float:left">        			
                            <label style="width:100%;float:left;"></label>     						
							
 
 <div style="float:left;margin-left:10px; width:95%; margin-bottom:20px; background:#FFF">	                             
		<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr>
							

							
				</tr> 		
				<tr> 
    				<th>Numero</th> 
    				<th>Dias</th> 
    				<th>Percentual</th> 
                    <th>Data</th>
				</tr> 
			</thead> 
			<tbody> 

  			<tr> 
   					
    				<td> Não há registros</td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
     		</tr>

			</tbody> 
            <thead> 
				<tr> 
    				<th></th> 
    				<th></th> 
    				<th></th> 
					<th></th> 
    				<th></th> 
				</tr> 
             </thead>            
			</table>                                
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