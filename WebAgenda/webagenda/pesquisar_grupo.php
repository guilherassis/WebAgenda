<div style="margin:0 auto;width:320px;margin-top:125px;">

	<table border="" bordercolor="#FFFFFF" width="50%" align="center">
	
	

	
		<tr>	
			<td>
				<?php
					include "config.php";
					$consultar=@mysql_query("SELECT id, grupo FROM bdgrupo ORDER BY grupo ASC");
						
						
						     echo "<select size=\"10\" name=\"Grupos\" style=\"width: 160px;font-size:11px\"  onChange=\"javascript:openPage('lista_user.php?codgrupo='+this.value,'reportuser',false);\">
						 		   <option value=\"0\"><h3><b>---- Escolha o Grupo ----</b></h3></option>";
						
						while ($nomegrupo= mysql_fetch_array($consultar)) {
						
									echo "<option value=". $nomegrupo['id'] ." >"    .$nomegrupo['grupo']."</option>";
						
					                     }
					echo "</select>";
					
					mysql_free_result ($consultar);
		
				?>
			</td>
				
				<td>	<div id="reportuser">

						</div>
				</td>
					
		</tr>
</table>
		
</div>



<div style="margin:0 auto;width:290px;margin-top:145px;">

<b>
<a href="javascript:void(0);" onclick="loadPage('pesquisar_grupo.php','principal');">Pesquisar Grupo //</a>
<a href="javascript:void(0);" onclick="loadPage('pesquisar_contato.php','principal');">Pesquisar Contato</a>
   
</b>

</div>