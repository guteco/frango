<?php

include("conectar.php");

	if (isset($_POST['enviar'])){	

		if (isset($_POST['codigo']) && $_POST['codigo'] != ""){
				
				$codigo = $_POST["codigo"];
				
				$query = mysql_query("SELECT * FROM produto WHERE codProduto LIKE '".$codigo."%'") or die(mysql_error());
									
				while($array = mysql_fetch_array($query)){
					$codFornecedor = $array['codFornecedor'];
					
					$query2 = mysql_query("SELECT * FROM fornecedor WHERE codFornecedor = '".$codFornecedor."%'") or die(mysql_error());
					
					while($array2 = mysql_fetch_array($query2)){
						$_SESSION['codProduto_consulta'] = $array['codProduto'];
						$_SESSION['nomeFornecedor_consulta'] = $array2['nome'];
						$_SESSION['nomeProduto_consulta'] = $array['nome'];
						$_SESSION['preco_consulta'] = $array['pre�o'];
						$_SESSION['quantidade_consulta'] = $array['qtd'];
					}
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
												AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','250','height','30','src','flash/item','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/item','flashvars','xml_filename=menu.xml&item_text=In�cio&item_link=telaInicial.php&item_text_size=20&item_ajust=35&item_selected=0' ); //end AC code
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
									<div style="text-align: right; border: 0;"><?php echo "Usu�rio Logado: "."<b>".$_SESSION['nomeLogado']."</b>".", <a href=index.php style=text-decoration:none> (Sair)</a>" ?></div>
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
									
									<h1><center>Consultar Produto</center></h1>
													<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
														<center><table>
															<tr>
															<td>Informe o C�digo do Produto para Consulta?</td>
															</tr>
															<tr>
															<td>C�digo:</td>
															<td><font color="#FF0000">*</font> <input title="Informe o C�digo do produto a ser consultado." type="text" name="codigo" id="codigo" size="30" onkeypress="return numeros(event.keyCode, event.which);"><br></td>
															</tr>
														</table></center>
														<center><table>
															<tr>
															<td><input type="submit" name="enviar" value="Consultar"/></td>
															<td><input type="button" name="limpar" value="Limpar Campos" onclick="javascript: limparCampo()"></td>
															</tr>
														</table></center>
													</form>
													Ultimos Dados Consultados:
													<hr color="#333333" size="1px" style="margin-bottom:2px; margin-top:2px;" /><br>
													<center><br><div style="border: 1px solid black; overflow: scroll; width: 500px; height: 150px;">
														<?php

														 echo 
														 "<table border='1'>
														 <tr>
															<th>C�dProduto</th>
															<th>Nome do Fornecedor</th>
															<th>Nome do Produto</th>
															<th>Pre�o</th>
															<th>Quantidade</th>
														 </tr>";
														 
														 echo "<tr>";
														 echo "<td>" . $_SESSION['codProduto_consulta'] . "</td>";
														 echo "<td>" . $_SESSION['nomeFornecedor_consulta'] . "</td>";
														 echo "<td>" . $_SESSION['nomeProduto_consulta'] . "</td>";
														 echo "<td>" . $_SESSION['preco_consulta'] . "</td>";
														 echo "<td>" . $_SESSION['quantidade_consulta'] . "</td>";
														 echo "</tr>";

														 echo "</table>";

														?>
													</div></center>
															
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

	$_SESSION['codProduto_consulta'] = "";
	$_SESSION['nomeFornecedor_consulta'] = "";
	$_SESSION['nomeProduto_consulta'] = "";
	$_SESSION['preco_consulta'] = "";
	$_SESSION['quantidade_consulta'] = "";

?>
