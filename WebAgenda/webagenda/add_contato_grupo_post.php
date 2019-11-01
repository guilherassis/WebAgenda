<?php




include "config.php";

$contato=$_POST['contato_grupo'];
$grupo=$_POST['grupo_contato'];

$sql=("insert into bdgrupo_contato (contato,grupo) 
			values('$contato','$grupo')");

mysqlexecuta($sql);

echo "Cadastrado com sucesso";
	

?>
