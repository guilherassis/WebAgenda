<?php


include "config.php";

$grupo_busca = $_POST['grupo_busca'];

$pesquisar=mysql_query("SELECT id AS 'id_grupo' FROM bdgrupo where grupo like '%{$grupo_busca}%'");
$busca=mysql_num_rows($pesquisar);

if($busca==0){
	echo "Nao existe grupo";
	
mysqlexecuta($pesquisar);
mysql_free_result($pesquisar);

	
}
else{

$conteudo = mysql_fetch_array($pesquisar);
$id_grupo = $conteudo['id_grupo'];

$res = mysql_query("SELECT a.Nome FROM bdgrupo_contato gc
					 INNER JOIN bdgrupo g ON g.id=gc.grupo
					 INNER JOIN bdagenda a ON a.id=Contato
					 WHERE gc.Grupo = {$id_grupo}");

while ($resultado = mysql_fetch_array($res)) {
	
	$str_nome = $resultado['Nome'];
	echo $str_nome . "<br>";
		
}

mysqlexecuta($pesquisar);
mysqlexecuta($res);
mysql_free_result($pesquisar);
mysql_free_result($res);


}


?>

