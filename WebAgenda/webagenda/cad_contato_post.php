<?php

include "config.php";

$nome		=$_POST['nome'];
$idade		=$_POST['data_nascimento'];
$email		=$_POST['email'];
$telefone	=$_POST['telefone'];
$telcelular	= (isset($_POST['telcelular']) ? $_POST['telcelular'] : '');
$fax		=$_POST['fax'];
$rg			=$_POST['rg'];
$perfil		=$_POST['perfil'];
$endereco	=$_POST['endereco'].$_POST['complemento'];

$sql = "insert into bdagenda 
		(nome,idade,email,telefone,telcelular,fax,rg,perfil,endereço) 
		values 
		('$nome','$idade','$email','$telefone','$telcelular','$fax','$rg','$perfil','$endereco')";

mysqlexecuta($sql);
	echo "Dados salvos com sucesso!";

?>



  
