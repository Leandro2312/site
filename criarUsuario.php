<?php
include_once "header.php";
include_once "conexao.php";?>
    <form class="d-flex justify-content-center align-items-center" method="post" action="inserir-db.php" enctype="multipart/form-data">
        <div class="">
            <input id="form2" class="form-control" placeholder="nome completo" name="nome">
            <input id="form2" class="form-control" placeholder="E-mail" name="email">
            <input id="form2" class="form-control" placeholder="cpf" name="cpf">
            <input id="form2" class="form-control" placeholder="telefone" name="telefone">
            <input id="form2" class="form-control" placeholder="senha" name="senha">
            <button type="submit" class="btn btn-info ms-2"><i class="bi bi-plus-circle-fill"></i>salvar</button>
        </div>
    </form>
<?php
include_once "footer.php";
?>