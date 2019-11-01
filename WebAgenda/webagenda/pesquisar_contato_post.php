<?php

include "config.php";

$contato_busca=$_POST['contato_busca'];

$pesquisar=@mysql_query("select id AS 'id_contato' From bdagenda where nome like '$contato_busca'");
$busca=@mysql_num_rows($pesquisar);	
	
	if($busca==0){
		
					echo "Contato não existe";
					
					mysqlexecuta($pesquisar);
					mysql_free_result($pesquisar);
		
	             }
	
	else{
		
	
		
		$conteudo = mysql_fetch_array($pesquisar);
		$id_contato = $conteudo['id_contato'];
				
					$res=@mysql_query("select a.Nome from bdgrupo_contato gc
									 inner join bdgrupo g on g.id=gc.grupo
									 inner join bdagenda a on a.id=gc.contato
									 where gc.contato = {$id_contato}");
								
								 
					while($resultado = mysql_fetch_array($res)){
		
								$bus_nome=$resultado['Nome'];
								
						
								echo $bus_nome . "<br><br><br>";
								echo "Contato já cadastrado! ";
								
								}
mysqlexecuta($pesquisar);
mysqlexecuta($res);
mysql_free_result($pesquisar);
mysql_free_result($res);

		
	}
	
	

	
	
?>