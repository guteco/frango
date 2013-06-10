<?php

include("conectar.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

if (isset($_POST['enviar'])){
	
	if (($_POST["codigo"] != "") && ($_POST["fornecedor"] != "") && ($_POST["nome"] != "") && ($_POST["preco"] != "")){
	
	$codigoProduto = $_POST["codigo"];
	$codFornecedor = $_POST["fornecedor"];
	$nome = $_POST["nome"];
	$preco = $_POST["preco"];
	$quantidade = $_POST["quantidade"];

	$sql1 = mysql_query("INSERT INTO produto (codProduto, codFornecedor, nome, preço, qtd) VALUES ('$codigoProduto', '$codFornecedor', '$nome', '$preco', '$quantidade')") or die( mysql_error());
	
	echo "<script> if(confirm('Cadastro Efeturado com Sucesso, deseja cadastrar outro Produto?')) 
							window.location='cadastrarProduto.php' 
						else
							window.location='telaInicial.php' </script>";

	}
}
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>SISGEFRAN - Produtos</title>
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
												AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','250','height','30','src','flash/item','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/item','flashvars','xml_filename=menu.xml&item_text=Início&item_link=telaInicial.php&item_text_size=20&item_ajust=35&item_selected=0' ); //end AC code
											</script>
											<!-- "About us" button -->
											<script type="text/javascript">
												AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','250','height','30','src','flash/item','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/item','flashvars','xml_filename=menu.xml&item_text=Clientes&item_link=clientes.php&item_text_size=20&item_ajust=35&item_selected=0' ); //end AC code
											</script>	
											<!-- "About us" button -->
											<script type="text/javascript">
												AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','250','height','30','src','flash/item','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/item','flashvars','xml_filename=menu.xml&item_text=Produtos&item_link=produtos.php&item_text_size=20&item_ajust=35&item_selected=0' ); //end AC code
											</script>
											<!-- "Services" button -->								
											<script type="text/javascript">
												AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','250','height','30','src','flash/item','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/item','flashvars','xml_filename=menu.xml&item_text=Vendas &item_link=vendas.php&item_text_size=20&item_ajust=35&item_selected=0' ); //end AC code
											</script>
											<!-- "Solutions" button -->								
											<script type="text/javascript">
												AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','250','height','30','src','flash/item','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/item','flashvars','xml_filename=menu.xml&item_text=Reservas&item_link=reserva.php&item_text_size=20&item_ajust=35&item_selected=0' ); //end AC code
											</script>													
											<!-- "Contact" button -->								
											<script type="text/javascript">
												AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','250','height','30','src','flash/item','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/item','flashvars','xml_filename=menu.xml&item_text=Contato&item_link=contato.php&item_text_size=20&item_ajust=35&item_selected=0' ); //end AC code
											</script>																						
																					
											</td>
									  </tr>
									</table>
								</td>
								<td   style="background-color:#edfaff;">
									<table width="548"  border="0" cellspacing="0" >
									<tr>
									<td width="100%" style="padding:30px">
									<div style="text-align: right; border: 0;"><?php echo "Usuário Logado: "."<b>".$_SESSION['nomeLogado']."</b>".", <a href=../index.php style=text-decoration:none> (Sair)</a>" ?></div>
									</table>
									<br>
									<div id='cssmenu'>
									<ul>
									   <li><a href='cadastrarProduto.php'><span>Cadastrar Produto</span></a></li>
									   <li><a href='consultarProduto.php'><span>Consultar Produto</span></a></li>
									   <li><a href='editarProduto.php'><span>Editar Produto</span></a></li>
									   <li class='last'><a href='excluirProduto.php'><span>Excluir Produto</span></a></li>
									</ul>
									</div>									
									
									<h1><center>Cadastrar Produto</center></h1>
									<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
										<table>
										<tr>
										<td>Código do Produto: </td>
										<td><font color="#FF0000">*</font> <input title="Informe o código." type="text" name="codigo" size="50" maxlength="100" onkeypress="return numeros(event.keyCode, event.which);"><br></td>
										</tr>
										<tr>
										<td>Código do Fornecedor: </td>
										<td><font color="#FF0000">*</font> <select name="fornecedor">
										<?php
										 $sql="SELECT * FROM `fornecedor`";
										 
										 $result = mysql_query($sql);
										 
										 while ($resultado = mysql_fetch_array($result)){
											$codigoFornecedor = $resultado["codFornecedor"];
											$nomeFornecedor = $resultado["nome"];
											echo "<option value=\"$codigoFornecedor\">$codigoFornecedor - $nomeFornecedor</option>";
										}?>
										</select></td>
										</tr>
										<tr>
										<td>Nome do Produto: </td>
										<td><font color="#FF0000">*</font> <input title="Informe o CPF (Exemplo: 999.999.999-99)." type="text" name="nome" size="50" maxlength="100" /><br></td>
										</tr>
										<tr>
										<td>Preço:</td>
										<td><font color="#FF0000">*</font> <input title="Informe o Preço do Produto." type="text" name="preco"  size="50" maxlength="100" /><br></td>
										</tr>
										<tr>
										<td>Quantidade:</td>
										<td><font color="#FFFFFF">*</font> <input title="Informe a quantidade" type="text" name="quantidade"  size="50" maxlength="100" onkeypress="return numeros(event.keyCode, event.which);"/><br></td>
										</tr>
										</table>
														
										<center><table><tr>
											<td><br><input type="submit" name="enviar" value="Cadastrar Produto"></td>
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
						<div id="copyright">Todos os direitos reservados. Proibida a reprodução total ou parcial do conteúdo deste sistema sem prévia autorização.</div>
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

