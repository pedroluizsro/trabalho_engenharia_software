<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 30/04/15
 * Time: 21:31
 */


$nome = $_POST['nome'];
$data = $_POST['data'];
$descricao = $_POST['descricao'];
$hashArquivo = md5((mt_rand(1,99))*(mt_rand(1,99))*(mt_rand(1,99)));


/**
 * $ext - Extenзгo do Arquivo.
 * $destino - Destino do arquivo jб com o seu nome randфmico.
 * $arquivo_tmp - Nome do arquivo temporбrio que serб movido.
 * move_uploaded_file() - Funзгo que irб mover o arquivo para o diretуrio.
 */
$ext = strtolower(substr($_FILES['arquivo']['name'],-4));
$destino = '../images/uploads/' . $hashArquivo . $ext;
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
move_uploaded_file($arquivo_tmp,$destino);
