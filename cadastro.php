<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Festas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Londrina+Shadow' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles/pure-min.css">
    <link rel="stylesheet" href="styles/estilo.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            $( "#data" ).datepicker();
            $( "#data" ).change(function() {
                $( "#data" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
            });
        });
    </script>
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
    $ip = $_SERVER['REMOTE_ADDR'];
    $ext = strtolower(substr($_FILES['arquivo']['name'],-4));

    if($ext == '.jpg' || $ext == '.jpeg' || $ext == '.png' || $ext == '.gif'){
        $destino = 'images/' . $hashArquivo . $ext;
        $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
        move_uploaded_file($arquivo_tmp,$destino);

        $sqlQuery = mysql_query("INSERT INTO festa (`descricao`,`dataFesta`,`foto`,`nomeEvento`,`ip_criador`) VALUES ('$descricao','$data','$destino','$nome','$ip')", $conexao);
        $verificacao = 1;

    } else {
        echo "<script>alert('Não é uma imagem');</script>";
    }

}


if($verificacao == 1){
    echo "<script>alert('Cadastrou');</script>";
    echo "<script>location.href='http://www.projetobmo.cf/index.php'</script>";
}

?>
</body>
</html>
