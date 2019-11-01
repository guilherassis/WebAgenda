<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<link type="text/css"  rel="stylesheet" href="css/geral.css">
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="">

	<title>Cadastro de Usuario</title>
	
<script language="JavaScript">
	function validaForm(){
		//validar nome
		d = document.cadastrousuario;
		if (d.nomelogin.value == ""){
			alert("O campo Nome deve ser preenchido!");
			d.nomelogin.focus();
			return false;
		}
		
		//validar email
		if (d.emaillogin.value == ""){
			alert("O campo E-mail deve ser preenchido!");
			d.emaillogin.focus();
			return false;
		}
		//validar email(verificao de endereco eletronico)
		parte1 = d.emaillogin.value.indexOf("@");
		parte2 = d.emaillogin.value.indexOf(".");
		parte3 = d.emaillogin.value.length;
		if (!(parte1 >= 3 && parte2 >= 6 && parte3 >= 9)) {
			alert("O campo E-mail  deve ser conter um endereco eletronico!");
			d.emaillogin.focus();
			return false;
			}
		// conferir se as senhas sao iguais
		if (d.senha.value!=d.rep_senha.value) {
        alert('Senhas diferentes');
        d.senha.focus();
            return false;
}
					
			
					return true;
	}
</script>
	
	
</head>
<body> 


<center>
<div style="margin:0 auto;width:410px;margin-top:250px;">

<form name="cadastrousuario" action="cad_usuario_post.php" method="POST" onSubmit="return validaForm()">
<table>


<tr><td align="center"><font color="white"><b>Nome:</b></font></td><td><input type="text" name="nomelogin"></td></tr>
<tr><td align="center"><b><font color="white">Usuario:</font></b></td><td><input type="text" name="login"></td></tr>
<tr><td align="center"><b><font color="white">Senha:</font></b></td><td><input type="password" name="senha">
<font color="white">(Somente numeros)</font>  </td></tr>

<tr><td align="center"><b><font color="white">Repetir Senha</font></b><td><input type="password" name="rep_senha">
<font color="white">(Somente numeros)</font> </td></td></tr>

<tr><td align="center"><b><font color="white">E-Mail:</font></b></td><td><input type="text" name="emaillogin"></td></tr>
<tr><td align="center"><b><font color="white">Setor:</font></b><td><input type="text" name="setor"></td></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Cadastrar">
	<input type="reset" value="Limpar Formulario">
</td></tr>


</table>
</form>
<a align="center" href=javascript:window.location='index.php'><br>Clique aqui para voltar.</a>

</div>

</center>
</body>
</html>