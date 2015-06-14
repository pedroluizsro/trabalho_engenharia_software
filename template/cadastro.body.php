<h3 class="cadastro">Cadastre sua Festa</h3>
<form class="formContainer" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <input type="text" placeholder="Nome" name="nome">
    <input type="file" style="color: red;" name="arquivo" placeholder="Imagem" value="Selecione a imagem...">
    <input type="text" placeholder="Data" name="data" id="data">
    <textarea placeholder="Descritivo" name="descricao"></textarea>
    <input type="submit" value="Cadastrar">
</form>