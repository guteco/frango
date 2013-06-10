<?php

include("conectar.php");

?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (($_POST["nome_consulta"] != "") && ($_POST["cnpj_consulta"] != "") && ($_POST["endereco_consulta"] != "") && ($_POST["telefone_consulta"] != "")){
	
	$nome = $_POST["nome_consulta"];
	$cnpj = $_POST["cnpj_consulta"];
	$endereco = $_POST["endereco_consulta"];
	$telefone = $_POST["telefone_consulta"];
	$codigo = $_SESSION['codigoFornecedor_editar'];

	
		$query = mysql_query("UPDATE fornecedor SET nome='$nome', endereço='$endereco', cnpj='$cnpj', telefone='$telefone' WHERE codFornecedor='$codigo' ") or die(mysql_error());
			
				echo "<script> if(confirm('Edição Efeturado com Sucesso! Deseja editar outro Fornecedor?')) 
								window.location='editarFornecedor.php' 
							else
								window.location='telaAdministrador.php' </script>";

	}else{
		echo "<script> if(confirm('Existe campo obrigatório não Preenchido! Deseja realizar a consulta novamente?')) 
						window.location='editarFornecedor.php' 
					else
						window.location='telaAdministrador.php' </script>";
	}
}
?>

<?php
	$_SESSION['codigoFornecedor_editar'] = "";
?>
