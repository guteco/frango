<?php

include("conectar.php");

?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (($_POST["nome_consulta"] != "") && ($_POST["cpf_consulta"] != "") && ($_POST["endereco_consulta"] != "") && ($_POST["telefone_consulta"] != "")){
	
	$nome = $_POST["nome_consulta"];
	$cpf = $_POST["cpf_consulta"];
	$data = $_POST["data_consulta"];
		$d=explode("/",$data);
		$data=$d[2]."-".$d[1]."-".$d[0];
	
	$endereco = $_POST["endereco_consulta"];
	$telefone = $_POST["telefone_consulta"];
	$codigo = $_SESSION['codigo_editar'];
	
		$query = mysql_query("UPDATE usuario SET nome='$nome', endereco='$endereco', datnasc='$data', cpf='$cpf', telefone='$telefone' WHERE codUsuario='$codigo' ") or die(mysql_error());
			
				echo "<script> if(confirm('Edi��o Efeturado com Sucesso! Deseja editar outro Cliente?')) 
								window.location='editarCliente.php' 
							else
								window.location='telaInicial.php' </script>";

	}else{
		echo "<script> if(confirm('Existe campo obrigat�rio n�o Preenchido! Deseja realizar a consulta novamente?')) 
						window.location='editarCliente.php' 
					else
						window.location='telaInicial.php' </script>";
	}
}
?>

<?php
	$_SESSION['codigo_editar'] = "";
?>
