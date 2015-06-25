<h3 class="cadastro">Cadastre sua Festa</h3>
<div style="margin: 0 auto; text-align: center; font-family: 'Roboto Condensed', sans-serif;">
    <form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Nome da Festa: <input type="text" placeholder="Nome" name="nome">
        <input type="color" name="cor_texto">
        <br><br>
        Selecione uma imagem: <input type="file" style="color: red;" name="arquivo" placeholder="Imagem" value="Selecione a imagem...">
        <br><br>
        Data da festa: <input type="texto" placeholder="Data" id="data">
        <br><br>
        <textarea placeholder="Descritivo" name="descricao"></textarea>
        <br><br>
        <input type="submit" value="Cadastrar">
    </form>
</div>