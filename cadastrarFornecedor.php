<?php

include("conectar.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

if (isset($_POST['enviar'])){
	
	if (($_POST["nome"] != "") && ($_POST["cnpj"] != "") && ($_POST["endereco"] != "") && ($_POST["fone"] != "")){
	
	$nome = $_POST["nome"];
	$cnpj = $_POST["cnpj"];
	$endereco = $_POST["endereco"];
	$fone = $_POST["fone"];
	
	$query = mysql_query("SELECT * FROM fornecedor WHERE codFornecedor = (SELECT MAX(codFornecedor) FROM fornecedor)");
			
	while($array = mysql_fetch_array($query)){
		$_SESSION['ultimoFornecedor'] = $array['codFornecedor'];
	}
	
	$ultimoCod = $_SESSION['ultimoFornecedor'] + 1; 
	
	$sql1 = mysql_query("INSERT INTO fornecedor (codFornecedor, nome, endere�o, cnpj, telefone) VALUES ('$ultimoCod', '$nome', '$endereco', '$cnpj', '$fone')") or die( mysql_error());
				
		echo "<script> if(confirm('Cadastro Efeturado com Sucesso, deseja cadastrar outro Fornecedor?')) 
							window.location='cadastrarFornecedor.php' 
						else
							window.location='telaAdministrador.php' </script>";

	}
}
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>SISGEFRAN - Fornecedor</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">
<!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->
<style>#free-flash-header a,#free-flash-header a:hover {color:#c2cae0;}#free-flash-header a:hover {text-decoration:none}</style>
<!--END OF TERMS OF USE-->
<script src="flash/jscripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="flash/jscripts/AC_ActiveX.js" type="text/javascript"></script>
<script src="flash/jscripts/validacoes.js" type="text/javascript"></script>
<script src="flash/jscripts/jquery142.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link href="cssmenu/menu_assets/styles.css" rel="stylesheet" type="text/css">
<!--[if lt IE 7]>
  <link rel="stylesheet" type="text/css" href="css/stylesheetie6.css" />
<![endif]-->
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >					
	<div id="holder">
																																																																																																																																																																																																																																																																																																																																																																																																																																																																							 
<table width="100%" cellspacing="0" cellpadding="0" style="margin-top:20px; ">
  <tr> 
    <td align="center" valign="middle"> 
		<table width="850" border="0" cellspacing="0" cellpadding="0" style="border-top: 10px #c8efff solid;"> 

				<tr> 
				  <td style="font-family:arial;font-size:8px;">
					
					<!-- Flash Intro Header -->
					<script type="text/javascript">AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','850','height','165','src','flash/header','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/header','flashvars','xml_filename=header.xml&header_image_1=header_image_1.jpg&text_sup_y=50&text_inf_y=10' ); //end AC code</script><noscript>free template</noscript>																																																																																																																																																																																																																																																																																																																																																			
							</td> 
				</tr>
				<tr> 
				  <td width="100%">
				  				<table width="850"  border="0" cellspacing="0" cellpadding="0">
								<tr>
								<td   valign="top" style="padding-top:10px;background-color:#FFFFFF;">				
									  <table  width="302" border="0" cellspacing="0" cellpadding="0">
									  <tr>
										<td align="center" style="padding:1px;padding-top:10px;font-family:arial;font-size:7px;">
											<!-- "Home" button -->
											<script type="text/javascript">
												AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','250','height','30','src','flash/item','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/item','flashvars','xml_filename=menu.xml&item_text=In�cio&item_link=telaAdministrador.php&item_text_size=20&item_ajust=35&item_selected=0' ); //end AC code
											</script>
											<!-- "About us" button -->
											<script type="text/javascript">
												AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','250','height','30','src','flash/item','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/item','flashvars','xml_filename=menu.xml&item_text=Administrador&item_link=administrador.php&item_text_size=20&item_ajust=35&item_selected=0' ); //end AC code
											</script>	
											<!-- "About us" button -->
											<script type="text/javascript">
												AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','250','height','30','src','flash/item','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/item','flashvars','xml_filename=menu.xml&item_text=Funcion�rio&item_link=funcionario.php&item_text_size=20&item_ajust=35&item_selected=0' ); //end AC code
											</script>	
											<!-- "About us" button -->
											<script type="text/javascript">
												AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','250','height','30','src','flash/item','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/item','flashvars','xml_filename=menu.xml&item_text=Fornecedor&item_link=fornecedor.php&item_text_size=20&item_ajust=35&item_selected=0' ); //end AC code
											</script>
											<!-- "About us" button -->
											<script type="text/javascript">
												AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','250','height','30','src','flash/item','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/item','flashvars','xml_filename=menu.xml&item_text=Estoque&item_link=estoque.php&item_text_size=20&item_ajust=35&item_selected=0' ); //end AC code
											</script>																					
																					
											</td>
									  </tr>
									</table>
								</td>
								<td   style="background-color:#edfaff;">
									<table width="548"  border="0" cellspacing="0" >
									<tr>
									<td width="100%" style="padding:30px">
									<div style="text-align: right; border: 0;"><?php echo "Usu�rio Logado: "."<b>".$_SESSION['nomeLogado']."</b>".", <a href=index.php style=text-decoration:none> (Sair)</a>" ?></div>
									</table>
									<br>
									<div id='cssmenu'>
									<ul>
									   <li><a href='cadastrarFornecedor.php'><span>  Cadastrar Fornec  </span></a></li>
									   <li><a href='consultarFornecedor.php'><span>  Consultar Fornec  </span></a></li>
									   <li><a href='editarFornecedor.php'><span>  Editar Fornec  </span></a></li>
									   <li class='last'><a href='excluirFornecedor.php'><span>  Excluir Fornec  </span></a></li>
									</ul>
									</div>									
									
									<h1><center>Cadastrar Fornecedor</center></h1>
									<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
										<table>
										<tr>
										<td>Nome: </td>
										<td><font color="#FF0000">*</font> <input title="Informe o nome (Apenas Letras)." type="text" name="nome" size="50" maxlength="100" ><br></td>
										</tr>
										<tr>
										<td>Endereco:</td>
										<td><font color="#FF0000">*</font> <input title="Informe o Endere�o." type="text" name="endereco"  size="50" maxlength="100" /><br></td>
										</tr>
										<tr>
										<td>CNPJ: </td>
										<td><font color="#FF0000">*</font> <input title="Informe o CPF (Exemplo: 99.999.999/9999-99)." type="text" name="cnpj" size="50" maxlength="100" onblur="javascript: validarCNPJ(this,this.value);" onkeypress="javascript: mascaraCNPJ(this, cnpj_mask);" /><br></td>
										</tr>
										<tr>
										<td>Fone:</td>
										<td><font color="#FF0000">*</font> <input title="Informe o celular da editora (Formato: (00) 0000-0000)." type="text" name="fone"  size="50" maxlength="100" onkeydown="mascara( this )" onkeyup="mascara( this )" onkeypress="return numeros(event.keyCode, event.which);"/><br></td>
										</tr>
										</table>
														
										<center><table><tr>
											<td><br><input type="submit" name="enviar" value="Cadastrar Fornecedor"></td>
											<td><br><input type="Reset" name="apagar" value="Limpar Campos"></td>
											</tr></table></center>
															
										</form>
										<br>
								</td>
								</tr>
								</table>
				  </td> 
				</tr>				
				<tr> 
				  <td style="font-family:arial;font-size:8px;">
						<div id="copyright">Todos os direitos reservados. Proibida a reprodu��o total ou parcial do conte�do deste sistema sem pr�via autoriza��o.</div>
			  	  </td> 
				</tr>								 
	  </table>
    </td>
  </tr>   
</table>
<br/>
</div> 
</body>
</html>

<?php
	$_SESSION['ultimoFornecedor'] = "";
?>