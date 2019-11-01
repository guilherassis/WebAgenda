	function validaForm(){
		//validar nome
		d = document.cadastroo;
		if (d.nome.value == ""){
			alert("O campo " + d.nome.name + " deve ser preenchido!");
			d.nome.focus();
			return false;
		}
		
		//validar email
		if (d.email.value == ""){
			alert("O campo " + d.email.name + " deve ser preenchido!");
			d.email.focus();
			return false;
		}
		//validar email(verificao de endereco eletronico)
		parte1 = d.email.value.indexOf("@");
		parte2 = d.email.value.indexOf(".");
		parte3 = d.email.value.length;
		if (!(parte1 >= 3 && parte2 >= 6 && parte3 >= 9)) {
			alert("O campo E-mail  deve ser conter um endereco eletronico!");
			d.email.focus();
			return false;
		}
		//validar telefone
		if (d.telefone.value == ""){
			alert("O campo Telefone deve ser preenchido!");
			d.telefone.focus();
			return false;
		}
		//validar telefone(verificacao se contem apenas numeros)
		if (isNaN(d.telefone.value)){
			alert("O campo Telefone deve conter apenas numeros!");
			d.telefone.focus();
			return false;
		}
		
				
		//validar data de nascimento
		erro=0;
		hoje = new Date();
		anoAtual = hoje.getFullYear();
		barras = d.data_nascimento.value.split("/");
		if (barras.length == 3){
			dia = barras[0];
			mes = barras[1];
			ano = barras[2];
			resultado = (!isNaN(dia) && (dia > 0) && (dia < 32)) && (!isNaN(mes) && (mes > 0) && (mes < 13)) && (!isNaN(ano) && (ano.length == 4) && (ano <= anoAtual && ano >= 1900));
			if (!resultado) {
				alert("Formato de Data de Nascimento invalido!");
				d.data_nascimento.focus();
				return false;
			}
		} else {
			alert("Formato de Data de Nascimento invalido!");
			d.data_nascimento.focus();
			return false;
		}
		
		return true;
	}

