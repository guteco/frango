<?php

include("conectar.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

if (isset($_POST['enviar'])){
	
	if (($_POST["nome"] != "") && ($_POST["cpf"] != "") && ($_POST["fone"] != "") && ($_POST["endereco"] != "") && ($_POST["login"] != "") && ($_POST["senha"] != "") && ($_POST["salario"] != "")){
	
	$nome = $_POST["nome"];
	$data = $_POST["dataNasc"];
		$d=explode("/",$data);
		$data=$d[2]."-".$d[1]."-".$d[0];
	
	$endereco = $_POST["endereco"];
	$cpf = $_POST["cpf"];
	$fone = $_POST["fone"];
	$salario = $_POST["salario"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	
	$query = mysql_query("SELECT * FROM usuario WHERE codUsuario = (SELECT MAX(codUsuario) FROM usuario)");
			
	while($array = mysql_fetch_array($query)){
		$_SESSION['ultimoUsuario'] = $array['codUsuario'];
	}
	
	$ultimoCod = $_SESSION['ultimoUsuario'] + 1; 
	$codPermissao = 2; 

	$sql1 = mysql_query("INSERT INTO usuario (codUsuario, nome, endereco, datnasc, cpf, telefone) VALUES ('$ultimoCod', '$nome', '$endereco', '$data', '$cpf', '$fone')") or die( mysql_error());
	$sql2 = mysql_query("INSERT INTO funcionario (codFuncionario, salario, login, senha) VALUES ('$ultimoCod', '$salario', '$login', '$senha')") or die( mysql_error());
	$sql2 = mysql_query("INSERT INTO permissao_usuario (codPermissaoUsuario, codigo_permissao) VALUES ('$ultimoCod', '$codPermissao')") or die( mysql_error());	
	
	echo "<script> if(confirm('Cadastro Efeturado com Sucesso, deseja cadastrar outro Funcionário?')) 
							window.location='cadastrarFuncionario.php' 
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
<title>SISGEFRAN - Funcionário</title>
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
												AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','250','height','30','src','flash/item','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/item','flashvars','xml_filename=menu.xml&item_text=Início&item_link=telaAdministrador.php&item_text_size=20&item_ajust=35&item_selected=0' ); //end AC code
											</script>
											<!-- "About us" button -->
											<script type="text/javascript">
												AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','250','height','30','src','flash/item','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/item','flashvars','xml_filename=menu.xml&item_text=Administrador&item_link=administrador.php&item_text_size=20&item_ajust=35&item_selected=0' ); //end AC code
											</script>	
											<!-- "About us" button -->
											<script type="text/javascript">
												AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','250','height','30','src','flash/item','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/item','flashvars','xml_filename=menu.xml&item_text=Funcionário&item_link=funcionario.php&item_text_size=20&item_ajust=35&item_selected=0' ); //end AC code
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
									<div style="text-align: right; border: 0;"><?php echo "Usuário Logado: "."<b>".$_SESSION['nomeLogado']."</b>".", <a href=index.php style=text-decoration:none> (Sair)</a>" ?></div>
									</table>
									<br>
									<div id='cssmenu'>
									<ul>
									   <li><a href='cadastrarFuncionario.php'><span> Cadastrar Func </span></a></li>
									   <li><a href='consultarFuncionario.php'><span> Consultar Func </span></a></li>
									   <li><a href='editarFuncionario.php'><span>   Editar Func  </span></a></li>
									   <li class='last'><a href='excluirFuncionario.php'><span>  Excluir Func  </span></a></li>
									</ul>
									</div>									
									
									<h1><center>Cadastrar Funcionário</center></h1>
									<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
										<table>
										<tr>
										<td>Nome: </td>
										<td><font color="#FF0000">*</font> <input title="Informe o nome (Apenas Letras)." type="text" name="nome" size="50" maxlength="100" ><br></td>
										</tr>
										<tr>
										<td>Data Nascimento: </td>
										<td><font color="#FFFFFF">*</font> <input title="Informe a data de nascimento (Formato: 00/00/0000)." type="date" name="dataNasc" size="50" maxlength="100" onkeyup="Formatadata(this,event)" onblur="VerificaData(this,this.value)" onkeypress="return numeros(event.keyCode, event.which);"/></a><br></td>
										</tr>
										<tr>
										<td>CPF: </td>
										<td><font color="#FF0000">*</font> <input title="Informe o CPF (Exemplo: 999.999.999-99)." type="text" name="cpf" size="50" maxlength="100" onblur="javascript: validarCPF(this,this.value);" onkeypress="javascript: mascaraCPF(this, cpf_mask);" /><br></td>
										</tr>
										<tr>
										<td>Fone:</td>
										<td><font color="#FF0000">*</font> <input title="Informe o celular da editora (Formato: (00) 0000-0000)." type="text" name="fone"  size="50" maxlength="100" onkeydown="mascara( this )" onkeyup="mascara( this )" onkeypress="return numeros(event.keyCode, event.which);"/><br></td>
										</tr>
										<tr>
										<td>Endereco:</td>
										<td><font color="#FF0000">*</font> <input title="Informe o Endereço." type="text" name="endereco"  size="50" maxlength="100" /><br></td>
										</tr>
										<tr>
										<td>Salário:</td>
										<td><font color="#FF0000">*</font> <input title="Informe o Salário." type="text" name="salario"  size="50" maxlength="100" /><br></td>
										</tr>
										<tr>
										<td>Login:</td>
										<td><font color="#FF0000">*</font> <input title="Informe o Login." type="text" name="login"  size="50" maxlength="100" /><br></td>
										</tr>
										<tr>
										<td>Senha:</td>
										<td><font color="#FF0000">*</font> <input title="Informe a Senha." type="password" name="senha"  size="50" maxlength="100" /><br></td>
										</tr>
										</table>
														
										<center><table><tr>
											<td><br><input type="submit" name="enviar" value="Cadastrar Funcionário"></td>
											<td><br><input type="Reset" name="apagar" value="     Apagar tudo    "></td>
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

