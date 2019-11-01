<html>
<head>

	<title>Agenda Web</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
	<link type="text/css"  rel="stylesheet" href="css/geral.css">
	<link type="text/css"  rel="stylesheet" href="css/styles.css">	
	
	<script type="text/javascript" language="jscript" src="javascript/jquery-1.4.2.js"></script>
	<script type="text/javascript" language="jscript" src="javascript/library.js"></script>
	<script type="text/javascript" language="jscript" src="javascript/efeitoMenu.js"></script>
	<script type="text/javascript" language="jscript" src="javascript/jquery.form.js"></script>
	<script type="text/javascript" language="jscript" src="javascript/jquery.validate.js"></script>
	<script type="text/javascript" language="jscript" src="javascript/jquery.maskedinput-1.2.2.js"></script>

</head>

<!--Validação de sessão-->
<?php
session_start();
if (@$_SESSION['validacao'] == "1")
{
	
?>	
	
<body onLoad="preloadImages();">

	<div style="margin:0 auto;width:790px;margin-top:150px;border:1px solid black;">

		<table border="0" width="100%" >
			
			<tr>
				<!--TITULO-->
				<td><img src="images/title.gif"></td>

				<!--TELA PRINCIPAL-->
				<td rowspan="9" background="images/index_19.jpg" valign="top" >
					<div id="principal"></div>	
				</td>
			</tr>
	
			<tr>

				<!--TELA MENU-->
				<td width="15%">
	
				<table align="right">
						
						<tr>
							<td align="right"><a href="javascript:void(0);" onclick="openPage('cad_contato.php', 'principal', true);"
								onmouseover="window.status='cadastrar'; changeImages('cadastrar', 'images/cadastrar_contato-over.jpg'); return true;"
								onmouseout="window.status=''; changeImages('cadastrar', 'images/cadastrar_contato.jpg'); return true;"
								onmousedown="changeImages('cadastrar', 'images/cadastrar_contato-over.jpg'); return true;"
								onmouseup="changeImages('cadastrar', 'images/cadastrar_contato-over.jpg'); return true;">
								<img name="cadastrar" src="images/cadastrar_contato.jpg" width="154" height="44" border="0" alt="cadastrar"></a>
							</td>
						</tr>
							
						<tr><td><img src="images/spacer.gif" width="1" height="12" alt=""></td></tr>
														
						<tr>
							<td><a href="javascript:void(0);" onclick="openPage('grupo.php', 'principal', true);"
								onmouseover="window.status='Criar Grupo'; changeImages('Criar Grupo', 'images/grupos_over.jpg'); return true;"
								onmouseout="window.status=''; changeImages('Criar Grupo', 'images/grupos.jpg'); return true;"
								onmousedown="changeImages('Criar Grupo', 'images/grupos_over.jpg'); return true;"
								onmouseup="changeImages('Criar Grupo', 'images/grupos_over.jpg'); return true;">
								<img name="Criar Grupo" src="images/grupos.jpg" width="154" height="48" border="0" alt="Criar Grupo"></a>
							</td>
						</tr>
						
						<tr><td><img src="images/spacer.gif" width="1" height="12" alt=""></td></tr>
							
						<tr>
							<td><a href="javascript:void(0);" onclick="openPage('pesquisa.php','principal',true);"
								onmouseover="window.status='Pesquisar'; changeImages('Pesquisar', 'images/pesquisar_over.jpg'); return true;"
								onmouseout="window.status=''; changeImages('Pesquisar', 'images/pesquisar.jpg'); return true;"
								onmousedown="changeImages('Pesquisar', 'images/pesquisar_over.jpg'); return true;"
								onmouseup="changeImages('Pesquisar', 'images/pesquisar_over.jpg'); return true;">
								<img name="Pesquisar" src="images/pesquisar.jpg" width="154" height="43" border="0" alt="Pesquisar"></a>
							</td>
						</tr>
							
							<tr><td>	<img src="images/spacer.gif" width="1" height="12" alt=""></td></td></tr>
			
								
						<tr>
							<td><a  align="center" href=javascript:window.location='deslogar.php'
								onmouseover="window.status='Logoff'; changeImages('Logoff', 'images/logoff_over.jpg'); return true;"
								onmouseout="window.status='Logoff'; changeImages('Logoff', 'images/logoff.jpg'); return true;"
								onmousedown="changeImages('Logoff', 'images/logoff_over.jpg'); return true;"
								onmouseup="changeImages('Logoff', 'images/logoff_over.jpg'); return true;">
								<img name="Logoff" src="images/logoff.jpg" width="154" height="48" border="0" alt="Logoff"></a>
							</td>
						</tr>
				
					</table>
				</td>


		</table>

</body>
<?php
}	
else{	
?>
<div style="margin:0 auto;width:400px;margin-top:245px;">
	<font color="white">Você não tem permissão para acessar esta página.<br>Faça o login, por favor!<br></font>
	<center><input type="button" value="Voltar" onclick="javascript:window.location='index.php';"></center>
</div>
<?php
	}
?>
</html>
