<?php


header('Content-Type: text/html; charset=utf-8');

### DADOS DE CONEX�O AO MYSQL ###
$host = "localhost";
$usuario = "root";
$senha = "369258147";
$base = "bmo";
#################################


### FUN��ES DE CONEX�O ###
//Conex�o ao banco de dados;
$conexao = mysql_connect($host, $usuario, $senha) or print(mysql_error());
//Conex�o � base de dados;
mysql_select_db($base, $conexao) or print(mysql_error());
#########################`
