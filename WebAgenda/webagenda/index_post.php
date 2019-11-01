<html>
<head><link type="text/css"  rel="stylesheet" href="css/geral.css">
</head>

<body>
<font color="white">

<center>
<?php
session_start();
 


$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "dbtest";
$tab_login="bdlogin";


$con=@mysql_connect($servidor,$usuario,$senha);
@mysql_select_db($banco);


if($con){ 
	echo "Conectado com o Banco de Dados com sucesso!<br><br>";






$login=$_POST['login'];
$senha=$_POST['senha'];


$confirmacao=@mysql_query("SELECT * FROM bdlogin WHERE login = '$login' AND senha = '$senha'", $con);

$contagem=@mysql_num_rows($confirmacao);
if($contagem==1){
	
	
$validacao = "1"; 
$usuario = $_POST['usuario']; 

session_start();

$_SESSION['usuario'] = $usuario;
$_SESSION['validacao'] = $validacao;




header("Location: home.php");
	
	
	
}


else{
	
	echo "Usuario e senha invalidos <a href=javascript:window.location='index.php'><br>Clique aqui para voltar.</a>";

		
}




}else{ 
	
	echo "Erro ao conectar com o Banco de Dados!";}









mysql_free_result($confirmacao);



?>



</center>
</font>
</body>
</html>