<div style="margin:0 auto;width:220px;margin-top:125px;">



<form id="formCriarGrupo" name="formCriarGrupo" action="criar_grupo_post.php" method="POST" onsubmit="return ajaxForm(this.id, 'resultado', true);">


	<table>
		<tr>
			<td><b>Nome do Grupo:</b></td>
			<td><input type="text" name="grupo"></td>
		</tr>
		
		<tr>
			<tr></tr>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" value="Adicionar Grupo"></td>
		</tr>
	</table>
		
</form>

</div>

<center>
<div id="resultado" ></div>
</center>

<div style="margin:0 auto;width:330px;margin-top:145px;">

<b>
<a href="javascript:void(0);" onclick="loadPage('criar_grupos.php','principal');">Criar Grupo //</a>
<a href="javascript:void(0);" onclick="loadPage('add_contato_grupo.php','principal');">Adicionar Contato no Grupo //</a>
<a href="javascript:void(0);" onclick="loadPage('remover_grupo.php','principal');">Remover Grupo</a>

   
</b>

</div>

