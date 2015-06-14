<?php


header('Content-Type: text/html; charset=utf-8');

### DADOS DE CONEXУO AO MYSQL ###
$host = "localhost";
$usuario = "bmo";
$senha = "bmo369";
$base = "bmo";
#################################


### FUNЧеES DE CONEXУO ###
//Conexуo ao banco de dados;
$conexao = mysql_connect($host, $usuario, $senha) or print(mysql_error());
//Conexуo р base de dados;
mysql_select_db($base, $conexao) or print(mysql_error());
#########################`
