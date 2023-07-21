<?php include_once "header.php"; ?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Entre com sua conta ou crie uma rapidamente</h5>
            <form action="validar.php" method="post">
              <div class="form-floating mb-3">
                <input type="email" name="usuario" class="form-control" id="floatingInput">
                <label for="floatingInput">Digite seu E-mail</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="senha" class="form-control" id="floatingPassword">
                <label for="floatingPassword">Digite sua Senha</label>
              </div>

              
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Entrar</button>
              </div>
              <hr class="d-grid"> 
              <a class="btn btn-primary" href="criarUsuario.php">registrar-se</a>  
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include_once "footer.php"; ?>