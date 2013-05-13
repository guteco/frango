<?php

include("conectar.php");

?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (($_POST["nome_consulta"] != "") && ($_POST["cpf_consulta"] != "") && ($_POST["endereco_consulta"] != "") && ($_POST["telefone_consulta"] != "") && ($_POST["salario_consulta"] != "") && ($_POST["login_consulta"] != "") && ($_POST["senha_consulta"] != "")){
	
	$nome = $_POST["nome_consulta"];
	$cpf = $_POST["cpf_consulta"];
	$data = $_POST["data_consulta"];
		$d=explode("/",$data);
		$data=$d[2]."-".$d[1]."-".$d[0];
	$endereco = $_POST["endereco_consulta"];
	$telefone = $_POST["telefone_consulta"];
	$salario = $_POST["salario_consulta"];
	$login = $_POST["login_consulta"];
	$senha = $_POST["senha_consulta"];
	$codigo = $_SESSION['codigoFuncionario_editar'];
	
		$query = mysql_query("UPDATE usuario SET nome='$nome', endereco='$endereco', datnasc='$data', cpf='$cpf', telefone='$telefone' WHERE codUsuario='$codigo' ") or die(mysql_error());
		$query2 = mysql_query("UPDATE funcionario SET salario='$salario', login='$login', senha='$senha' WHERE codFuncionario='$codigo' ") or die(mysql_error());
			
				echo "<script> if(confirm('Edição Efeturado com Sucesso! Deseja editar outro Funcionário?')) 
								window.location='editarFuncionario.php' 
							else
								window.location='telaInicial.php' </script>";

	}else{
		echo "<script> if(confirm('Existe campo obrigatório não Preenchido! Deseja realizar a consulta novamente?')) 
						window.location='editarFuncionario.php' 
					else
						window.location='telaInicial.php' </script>";
	}
}
?>

<?php
	$_SESSION['codigoFuncionario_editar'] = "";
?>
