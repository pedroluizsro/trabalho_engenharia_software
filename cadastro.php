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

    $ext = strtolower(substr($_FILES['arquivo']['name'],-4));

    if($ext == '.jpg' || $ext == '.jpeg' || $ext == '.png' || $ext == '.gif'){
        $destino = 'images/' . $hashArquivo . $ext;
        $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
        move_uploaded_file($arquivo_tmp,$destino);

        $sqlQuery = mysql_query("INSERT INTO festa (`descricao`,`dataFesta`,`foto`,`nomeEvento`) VALUES ('$descricao','$data','$destino','$nome')", $conexao);
        $verificacao = 1;

    } else {
        echo "<script>alert('N�o � uma imagem');</script>";
    }

}


if($verificacao == 1){
    echo "<script>alert('Cadastrou');</script>";
    echo "<script>location.href='http://10.200.117.140/trabalho_engenharia_software/index.php'</script>";
}

?>
</body>
</html>
