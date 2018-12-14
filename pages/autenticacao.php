<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/autenticacao.css" />
  <script src="main.js"></script>
</head>
<body>
  <?php 
  require'config.php';
  Conexao::conectar();
  ?>

  <nav>
    <span>EITQUETADO</span>
  </nav>

  <section class="login-painel">
      <form action="login.php" method="post">
        <section class="loginInt">
          <h1>LOGIN</h1>
          <?php
            if(isset($_GET['noData'])) {
              echo 'Prencha todo os campos!';
            } 

            if(isset($_GET['passW'])) {
              echo 'Usúario ou senha errado!';
            }
          ?>
          <input type="text" placeholder="Usúario" name="usuario" required>
          <input type="password" placeholder="Senha" name="senha" required>
          <button type="submit">Login</button>
        </form>
      </section>
    </section>
  </body>
</html>