<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Festas</title>
    <link href='http://fonts.googleapis.com/css?family=Londrina+Shadow' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles/pure-min.css">
    <link rel="stylesheet" href="styles/estilo.css">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 07/05/15
 * Time: 19:25
 */

include_once("includes/connect.php");
include_once("template/head.php");
include_once("template/cadastro.body.php");

if($_POST['nome'] != '' && $_POST['data'] != '' && $_FILES['arquivo']['name'] != ''){

    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $descricao = $_POST['descricao'];
    $hashArquivo = md5((mt_rand(1,99))*(mt_rand(1,99))*(mt_rand(1,99)));

    /**
     * $ext - Exten��o do Arquivo.
     * $destino - Destino do arquivo j� com o seu nome rand�mico.
     * $arquivo_tmp - Nome do arquivo tempor�rio que ser� movido.
     * move_uploaded_file() - Fun��o que ir� mover o arquivo para o diret�rio.
     */

    $ext = strtolower(substr($_FILES['arquivo']['name'],-4));
    $destino = 'images/' . $hashArquivo . $ext;
    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
    move_uploaded_file($arquivo_tmp,$destino);

    $sqlQuery = mysql_query("INSERT INTO festa (`descricao`,`dataFesta`,`foto`,`nomeEvento`) VALUES ('$descricao',now(),'$destino','$nome')", $conexao);

}

?>
</body>
</html>
