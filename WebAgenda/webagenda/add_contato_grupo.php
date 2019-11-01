<div style="margin:0 auto;width:220px;margin-top:125px;">

<form id="contato_grupo" name="contato_grupo" method="POST" action="add_contato_grupo_post.php" onsubmit="return ajaxForm(this.id, 'resultado', true);">

<table>
<tr><td><b>Escolha o Grupo:</b></td>



<td>

<select size="1" name="grupo_contato">
	<option value="0">Selecione Grupo</color></option>
	
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

</td></tr>

<tr><td><b> Escolha o Contato:</b></td>

<td>
    <select size="1" name="contato_grupo">
	<option value="0">Selecione Contato</option>
	
	<?php
		
		$consulta=@mysql_query("SELECT id, nome FROM bdagenda ORDER BY nome ASC");

		while ($nome= mysql_fetch_array($consulta)) {
			echo("<option value='".$nome['id']."'>".$nome['nome']."</option>");
		}
		
	
			
		
		mysql_free_result($consulta);
		
	 ?>

</select> 

</td></tr>




<tr><td colspan="2" align="center">
&nbsp;




<input type="submit" value="Adicionar"></td></tr>

</table>
</form>
</div>

<center>
<div id="resultado" ></div>
</center>


<div style="margin:0 auto;width:330px;margin-top:145px;">

<b>
<a href="javascript:void(0);" onclick="loadPage('criar_grupo.php','principal');">Criar Grupo //</a>
<a href="javascript:void(0);" onclick="loadPage('adicionar_contato_grupo.php','principal');">Adicionar Contato no Grupo //</a>
<a href="javascript:void(0);" onclick="loadPage('remover_grupo.php','principal');">Remover Grupo</a>

   
</b>

</div>