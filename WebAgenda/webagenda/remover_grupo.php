<div style="margin:0 auto;width:220px;margin-top:125px;">


<form id="remover_grupo" name="remover_grupo" method="POST" action="remover_grupo_post.php" onsubmit="return ajaxForm(this.id, 'resultado', true);">

<table>
<tr><td><b>Escolha o Grupo:</b></td>

<td> 
<select size="1" name="remover" id="remover">
	<option value="0">Selecione Grupo</option>

	
	<?php
		
		include "config.php";
		
		$con=@mysql_connect($servidor,$usuario,$senha);
	  		 mysql_select_db($banco);

		$consultar=@mysql_query("SELECT id, grupo FROM bdgrupo ORDER BY grupo ASC");

		while ($nomegrupo= mysql_fetch_array($consultar)) {
			echo("<option value='".$nomegrupo['id']."'>".$nomegrupo['grupo']."</option>");
		}
		
	
			
		
		mysql_free_result ($consultar);
		
		
	 ?>
</select>
</tr>

<tr><td align="center" colspan="2"><input type="submit" value="Remover">

</td></tr>

</form>
</table>
</div>


<center>
<div id="resultado" ></div>
</center>


<div style="margin:0 auto;width:330px;margin-top:145px;">

<b>
<a href="javascript:void(0);" onclick="loadPage('criar_grupo.php','principal');">Criar Grupo //</a>
<a href="javascript:void(0);" onclick="loadPage('add_contato_grupo.php','principal');">Adicionar Contato no Grupo //</a>
<a href="javascript:void(0);" onclick="loadPage('remover_grupo.php','principal');">Remover Grupo</a>

   
</b>

</div>