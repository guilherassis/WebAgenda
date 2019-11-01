<html>
<head><title>Cadastrando Usuario</title>
	<link type="text/css"  rel="stylesheet" href="css/geral.css">

</head>

<body>

<center>

<div style="margin:0 auto;width:300px;margin-top:250px;">

<font color="white">


<?php



include "config.php";
$tab_login="bdlogin";


$nomelogin=$_POST['nomelogin'];
$login=$_POST['login'];
$senha=$_POST['senha'];
$emaillogin=$_POST['emaillogin'];
$setor=$_POST['setor'];

$pesquisa=@mysql_query("SELECT * FROM bdlogin WHERE login = '$login'");
$contar=@mysql_num_rows($pesquisa);

if($contar==1){
	
	echo "Usuario já existe!";
}

else{

mysql_query("insert into bdlogin (nomelogin,login,senha,emaillogin,setor)
			value('$nomelogin','$login','$senha','$emaillogin','$setor') ");
			

echo "Dados salvos com sucesso!";

}
  



mysql_free_result($pesquisa);

?>
</font>
<div align="center">

<br>
<input type="button" value="Voltar" onclick="javascript:window.location='index.php';">  

</div>


</center>

</div>




</body>
</html>