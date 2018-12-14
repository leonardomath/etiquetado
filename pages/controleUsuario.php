<?php
session_start();
$cargo = $_SESSION['cargo'];

if(isset($_SESSION['usuario']) && $cargo == 'admin') { 

  $pg = 1;

  if(isset($_GET['p']) && !empty($_GET['p'])) {
    $pg = addslashes($_GET['p']);
  }

  $p = ($pg - 1) * 10;

  require'config.php';
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
  </head>
  <body>
  
  <?php require'components/menu-mobile.php'; ?>

  <section class="overlay">

    <button class="btnSair">X</button>

    <section class="label-user">
      <section class="foto-etiqueta-user">
          <img class="imgPreview" src="assets/imgs/system/default.png" style="border-radius:50%;">
      </section>
      <section class="new-etiqueta-info">
            <form action="novoUsuario.php" method="post" enctype="multipart/form-data">
            <input type="file" name="foto" id="img" onchange="imagePreview(this);">
              <label class="btnImg" for="img">Escolher imagem</label>
        
              <input type="text" name="usuario" placeholder="Usúario" required>
              <select name="cargo">
                <option>Cargo</option>
                <option value="admin">Admin</option>
                <option value="convidado">Convidado</option>
              </select>
              <input type="password" name="senha" placeholder="Senha" required>
              <button class="escolher" type="submit">Cadastrar</button>
            </form>
        </section>
    </section>
    
  </section>
  
  

 
 <?php 
    require'components/menu.php'; 
    require'components/menu-mobile-show.php';
  ?>
    



<button class="btnNovaEtiqueta">Novo Uśuario</button>

<section class="etiquetas">

<section class="procurar">
<input type="text" placeholder="Buscar usúario">
</section>

<?php

$usuarios = Usuario::getUsuarios($p);

if($usuarios == null) {
  echo 'não tem usúarios';
} else {
  foreach($usuarios as $usuario) : ?>

  
  <section class="label">
    <section class="foto-etiqueta-perfil">
      <?php if($usuario['foto'] == 'default.png') { ?>
        <img src="assets/imgs/system/<?=$usuario['foto']?>" alt="">
      <?php } else { ?>
      <img src="assets/imgs/perfil/<?=$usuario['foto']?>" alt="">
    <?php } ?>
    </section>
    <section class="etiqueta-info-usuario">
        <h1><?=$usuario['nome_usuario']?></h1>
      

      <form action="apagarUsuario.php" method="post">
        <input type="hidden" value="<?=$usuario['id']?>" name="id">
        <p>cargo: <?=$usuario['cargo']?></p>
        <button class="btnApagarUsuario" type="submit">Apagar</button>
     </form>
     </section>
  </section>


   <?php endforeach;
  }


?>

</section>

<section class="paginacaoDiv">
  <?php
    $paginas = Usuario::getQuantPaginasUsuario();

    for($q=0;$q<$paginas;$q++) : ?>
      <a class="paginacao" href="?p=<?=$q+1?>"><?=$q+1?></a>
    <?php endfor; ?>

</section>

    <script src="js/jquery.js"></script>
    <script src="js/overflow.js"></script>
    <script src="js/imagePreview.js"></script>
    <script src="js/mobile.js"></script>
  </body>
  </html>

<?php

} else {
  header("Location: autenticacao");
}

?>