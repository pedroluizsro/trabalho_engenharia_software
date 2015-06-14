<article class="masonry">
    <?php
    include_once("includes/connect.php");
    $sqlQuery = mysql_query("SELECT `descricao`,`dataFesta`,`foto`,`nomeEvento` FROM festa", $conexao);
    while($row = mysql_fetch_array($sqlQuery)) {
        $resultado[] = $row;
    }
    foreach($resultado as $resultados) {
    ?>
    <a class="card" href="#">
        <article>
            Nome: <?php echo $resultados['nomeEvento']; ?><br>
            Data: <?php echo $resultados['dataFesta']; ?><br>
        </article>
        <img class="pure-img" src="<?php echo $resultados['foto']; ?>" style="opacity: 1; min-width: 100%">
    </a>
    <?php
    }
    ?>
</article>
