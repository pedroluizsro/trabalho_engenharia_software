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
        <span><?php echo $resultados['nomeEvento']; ?></span>
        <article>
            Nome: <?php echo $resultados['nomeEvento']; ?><br>
            Data: <?php echo $resultados['dataFesta']; ?><br>
        </article>
        <img class="pure-img" src="<?php echo $resultados['foto']; ?>" style="opacity: 1;">
    </a>
    <?php
    }
    ?>
</article>
