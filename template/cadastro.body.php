<form class="formContainer" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <input type="text" placeholder="Nome" name="nome">
    <input type="file" style="color: red;" name="arquivo">
    <input type="date" placeholder="Data" name="data">
    <textarea placeholder="Descritivo" name="descricao"></textarea>
    <input type="submit" value="Cadastrar">
</form>