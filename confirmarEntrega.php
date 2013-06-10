<?php

include("conectar.php");

?>

<?php

	$id = $_GET['id'];
	$status = 1;	
	
	$query = mysql_query("UPDATE venda SET statusEntrega='$status' WHERE codVenda='$id'");
	
				echo "<script> if(confirm('Entrega Confirmada, deseja confirmar outra?')) 
								window.location='fluxoEntrega.php' 
							else
								window.location='telaInicial.php' </script>";

?>

