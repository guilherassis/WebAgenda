<?php
/*
  ##############################################
  ##        Connection with MySQL             ##
  ##      									  ##
  ##############################################
*/

/* Destruindo as variáveis de Banco e CFG                                                */
/* ===================================================================================== */
    unset ($CFG, $DBA);
    setlocale(LC_ALL,"portuguese-brazil");

/* Este arquivo conecta um banco de dados MySQL - Servidor = localhost */
       
    $DBA->server     = "localhost";         //Indique o nome do servidor ou ip
    $DBA->dbname     = "dbtest";         // Indique o nome do banco de dados que será aberto
    $DBA->usuario    = "root";              // Indique o nome do usuário que tem acesso
    $DBA->password   = "";                  // Indique a senha do usuário


/* Configurações de diretorios                                                           */
/* ===================================================================================== */


//1º passo - Conecta ao servidor MySQL */
/* ===================================================================================== */

if ( !( $id = mysql_connect($DBA->server, $DBA->usuario, $DBA->password) ) ) {
   echo "Não foi possível estabelecer uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.";
   exit;
}

//2º passo - Seleciona o Banco de Dados
/* ===================================================================================== */

if( !( $con = @mysql_select_db($DBA->dbname, $id) ) ) {
   echo "Não foi possível estabelecer uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.";
   exit;
}

/*
Esta função executa um comando SQL no banco de dados MySQL
$sql - Cláusula SQL a executar
$erro - Especifica se a função exibe ou não(0=não, 1=sim)
$res - Resposta                                                                          */
/* ===================================================================================== */

function mysqlexecuta($sql, $erro = false) {

    if(empty($sql)) {

        $error = "<center><font color=red><br><br><br>Nenhum comando SQL foi passado!</font></center>";
        echo($error);
        exit;
    }

    if (!($res = @mysql_query($sql))) {

        if($erro) {
            echo($error);
            exit;
        }
    }
    return $res;
}


















?>