<?php

include("conectar.php");

	if (isset($_POST['enviar'])){	

		if (isset($_POST['cpf']) && $_POST['cpf'] != ""){
				
				$cpf = $_POST["cpf"];
				
				$query = mysql_query("SELECT * FROM usuario WHERE cpf LIKE '".$cpf."%'") or die(mysql_error());
									
				while($array = mysql_fetch_array($query)){
					$codUsuario = $array['codUsuario'];
					
					$query2 = mysql_query("SELECT * FROM administrador WHERE codAdm = '".$codUsuario."%'") or die(mysql_error());
					
					while($array2 = mysql_fetch_array($query2)){
						$_SESSION['codigoAdministrador_excluir'] = $array2['codAdm'];
						$_SESSION['nomeAdministrador_excluir'] = $array['nome'];
						$_SESSION['cpfAdministrador_excluir'] = $array['cpf'];
						$_SESSION['dataNascAdministrador_excluir'] = $array['datnasc'];
							$d=explode("-",$_SESSION['dataNascAdministrador_excluir']);
							$_SESSION['dataNascAdministrador_excluir']=$d[2]."/".$d[1]."/".$d[0];
						$_SESSION['enderecoAdministrador_excluir'] = $array['endereco'];
						$_SESSION['telefoneAdministrador_excluir'] = $array['telefone'];
						$_SESSION['loginAdministrador_excluir'] = $array2['login'];
						$_SESSION['senhaAdministrador_excluir'] = $array2['senha'];
					}
				}
					
		}

	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>SISGEFRAN - Administrador</title>
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
									   <li><a href='cadastrarAdministrador.php'><span> Cadastrar Admin </span></a></li>
									   <li><a href='consultarAdministrador.php'><span> Consultar Admin </span></a></li>
									   <li><a href='editarAdministrador.php'><span> Editar Admin </span></a></li>
									   <li class='last'><a href='excluirAdministrador.php'><span> Excluir Admin </span></a></li>
									</ul>
									</div>									
									
									<h1><center>Excluir Administrador</center></h1>
													<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
														<center><table>
															<tr>
															<td>Informe o CPF do Administrador para Consulta?</td>
															</tr>
															<tr>
															<td>CPF:</td>
															<td><font color="#FF0000">*</font> <input title="Informe o CPF do funcionario a ser consultado." type="text" name="cpf" id="cpf" size="30" onblur="javascript: validarCPF(this,this.value);" onkeypress="javascript: mascaraCPF(this, cpf_mask);"><br></td>
															</tr>
														</table></center>
														<center><table>
															<tr>
															<td><input type="submit" name="enviar" value="Consultar"/></td>
															</tr>
														</table></center>
													</form>
													<br>
													<form id="form2" name="form2" method="post" action="excluirAdministrador2.php">
													Dados a Serem Excluidos:
													<hr color="#333333" size="1px" style="margin-bottom:2px; margin-top:2px;" /><br>
													<center><table>
															<tr>
															<td>Nome:</td><td><input type="text" name="nome_consulta" id="nome_consulta" size="30" value="<?php if(isset($_SESSION['nomeAdministrador_excluir'])) echo $_SESSION['nomeAdministrador_excluir']; ?>" readonly="readonly"/><br></td>
															</tr>
															<tr>
															<td>CPF:</td><td><input type="text" name="cpf_consulta" id="cpf_consulta" size="30" value="<?php if(isset($_SESSION['cpfAdministrador_excluir'])) echo $_SESSION['cpfAdministrador_excluir']; ?>" readonly="readonly"/><br></td>
															</tr>
															<tr>
															<td>Data de Nascimento:</td><td><input type="text" name="data_consulta" id="data_consulta" size="30" value="<?php if(isset($_SESSION['dataNascAdministrador_excluir'])) echo $_SESSION['dataNascAdministrador_excluir']; ?>" readonly="readonly"/><br></td>
															</tr>
															<tr>
															<td>Endereco:</td><td><input type="text" name="endereco_consulta" id="endereco_consulta" size="30" value="<?php if(isset($_SESSION['enderecoAdministrador_excluir'])) echo $_SESSION['enderecoAdministrador_excluir']; ?>" readonly="readonly"/><br></td>
															</tr>
															<tr>
															<td>Telefone:</td><td><input type="text" name="telefone_consulta" id="telefone_consulta" size="30" value="<?php if(isset($_SESSION['telefoneAdministrador_excluir'])) echo $_SESSION['telefoneAdministrador_excluir']; ?>" readonly="readonly"/><br></td>
															</tr>
															<tr>
															<td>Login:</td><td><input type="text" name="login_consulta" id="login_consulta" size="30" value="<?php if(isset($_SESSION['loginAdministrador_excluir'])) echo $_SESSION['loginAdministrador_excluir']; ?>" readonly="readonly"/><br></td>
															</tr>
															<tr>
															<td>Senha:</td><td><input type="password" name="senha_consulta" id="senha_consulta" size="30" value="<?php if(isset($_SESSION['senhaAdministrador_excluir'])) echo $_SESSION['senhaAdministrador_excluir']; ?>" readonly="readonly"/><br></td>
															</tr>
													</center></table>
													<center><table>
															<tr>
															<td><input type="submit" name="enviar" value="Confirmar Exclusao"/></td>
															<td><input type="Reset" name="apagar" value="Limpar Campos"></td>
															</tr>
														</table></center>
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

	$_SESSION['nomeAdministrador_excluir'] = "";
	$_SESSION['cpfAdministrador_excluir'] = "";
	$_SESSION['dataNascAdministrador_excluir'] = "";
	$_SESSION['enderecoAdministrador_excluir'] = "";
	$_SESSION['telefoneAdministrador_excluir'] = "";
	$_SESSION['loginAdministrador_excluir'] = "";
	$_SESSION['senhaAdministrador_excluir'] = "";

?>

