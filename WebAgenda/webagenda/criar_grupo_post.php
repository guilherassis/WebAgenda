<?php

include "config.php";

$grupo=$_POST['grupo'];

$sql=("insert into bdgrupo(grupo) values('$grupo')");
 
mysqlexecuta($sql);

echo "Dados salvos com sucesso!";
		


?>
</div>
