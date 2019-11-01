<div style="margin-left:30px;">
<h1 align="center">CADASTRO</h1>
<!-- formulario de cadastro-->
	<form id="frmCadContato" name="frmCadContato" action="cad_contato_post.php" method="POST" onsubmit="return ajaxForm(this.id, 'resultado', true);">
	
	<table width="100%" border="0">
	
		<!-- campo nome-->
		<tr>
			<td width="20%"><b>Nome:</b></td>
			<td><input type="text" name="nome" size="40" class="required"></td>
		</tr>
		
		<tr>
			<td><b>Data de Nascimento:</b></td>
			<td><input type="text" id="data_nascimento" name="data_nascimento" size="25" maxlength="10"> Ex.:(dd/mm/yyyy)</td>
		</tr>
			
	<!-- campo email-->
	<tr><td><b>E-mail</b></td><td><input type="text" class="required email" name="email" size="25"> Ex.:(xxx@xx.xx)</td></tr>
	<!-- campo telefone-->
	<tr><td><b>Telefone:</b></td><td><input type="text" class="required" name="telefone" size="9"></td></tr>
	<!-- campo telefone celular-->
	<tr><td><b>Telefone Celular:</b></td><td><input type="text"  name="telcelular" size="9"></td></tr>
	<!--campo fax-->
	<tr><td><b>Fax:</b></td><td><input type="text" class="required" name="fax" size="9"></td></tr>
	<!-- campo rg-->
	<tr><td><b>RG:</b></td><td><input type="text" class="required" name="rg" size="9"></td></tr>
	
	<!-- campo perfil-->
	<tr>
	<td colspan="2" align="center">
		<input type="radio" name="perfil" value="Pessoa Fisica" checked>Pessoa Fisica &nbsp 
		<input type="radio" name="perfil" value="Pessoa Juridica">Pessoa Juridica
	</tr>
	<!-- campo endereço-->
	<tr><td><b>Endereço:</b></td><td><input type="text" class="required" name="endereco" size="40"></td></tr>
	<!-- campo complemento-->
	<tr><td><b>Complemento:</b></td><td><input type="text" class="required" name="complemento" size="10"></td></tr>
	
	<tr>
		<td colspan="2" align="center">
		<input type="submit" value="Enviar Dados"> &nbsp;
		<input type="reset" value="Limpar Formul&aacute;rio">
		
		</td>
	</tr>
	</table>
	
	</form>
<center>
	<!--resultado-->
	<div id="resultado"></div>
</center>
</div>
