<?php

include "config.php";

$id_grupo=$_POST['remover'];

$sql=mysql_query("DELETE FROM bdgrupo WHERE id = {$id_grupo}");
 

mysqlexecuta($sql);

echo "Deletado com sucesso!";
		


?>