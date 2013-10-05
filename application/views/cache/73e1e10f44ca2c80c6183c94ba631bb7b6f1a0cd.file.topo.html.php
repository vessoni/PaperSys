<?php /* Smarty version Smarty-3.1.13, created on 2013-09-11 19:18:47
         compiled from "application\views\includes\topo.html" */ ?>
<?php /*%%SmartyHeaderCode:54375230ec47929849-30747496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73e1e10f44ca2c80c6183c94ba631bb7b6f1a0cd' => 
    array (
      0 => 'application\\views\\includes\\topo.html',
      1 => 1377730324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54375230ec47929849-30747496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5230ec479d1274_43797406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5230ec479d1274_43797406')) {function content_5230ec479d1274_43797406($_smarty_tpl) {?><!doctype html>
<html lang="pt">

<head>
	<meta charset="utf-8"/>
	<title>SYSPAPER</title>
	
	<link rel="stylesheet" href="/estagio/static/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


<link rel="stylesheet" href="/estagio/static/css/jquery.css" />
<script src="/estagio/static/js/jquery-1.8.2.js"></script>
<script src="/estagio/static/js/jquery-ui.js"></script>
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

  $("#alert_error").hide();
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

</head>


<body>
	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="/estagio/pais/"></a></h1>
			<h2 class="section_title">SYSPAPER</h2>
		</hgroup>
	</header> <!-- end of header bar --><?php }} ?>