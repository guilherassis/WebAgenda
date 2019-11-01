<div style="margin:0 auto;width:220px;margin-top:125px;">



<form id="pesquisar_contato" name="pesquisar_contato" action="pesquisar_contato_post.php" method="POST" onsubmit="return ajaxForm(this.id, 'resultado' , true);">


	<table>
		<tr>
			<td><b>Digite o nome do contato que deseja pesquisar:</b></td></tr>
			
		<tr>	
			<td><input type="text" name="contato_busca"></td>
		</tr>
		
		<tr>
			<tr></tr>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" value="Pesquisar"></td>
		</tr>
	</table>
		
</form>
</div>


<center><div id="resultado"></div></center>


<div style="margin:0 auto;width:290px;margin-top:145px;">

<b>
<a href="javascript:void(0);" onclick="loadPage('pesquisar_grupo.php','principal');">Pesquisar Grupo //</a>
<a href="javascript:void(0);" onclick="loadPage('pesquisar_contato.php','principal');">Pesquisar Contato</a>
   
</b>

</div>