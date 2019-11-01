<?php


include "config.php";

$codgrupo = $_GET['codgrupo'];

$res = mysql_query("SELECT a.Nome FROM bdgrupo_contato gc
					 INNER JOIN bdgrupo g ON g.id=gc.grupo
					 INNER JOIN bdagenda a ON a.id=Contato
					 WHERE gc.Grupo = {$codgrupo}");


echo  "<select size=\"10\" style=\"width: 160px;font-size:11px;\">
    <option value=\"0\"><b>---- Contatos ----</b></option>";

while ($resultado = mysql_fetch_array($res)) {
	
	$str_nome = $resultado['Nome'];
	echo "<option>".$str_nome . "</option> <br>";

	
}

echo "</select>";

mysqlexecuta($res);
mysql_free_result($res);

?>