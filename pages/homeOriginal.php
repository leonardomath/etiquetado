<?php

session_start();

if(isset($_SESSION['usuario'])) { 

  $pg = 1;

  if(isset($_GET['p']) && !empty($_GET['p'])) {
    $pg = addslashes($_GET['p']);
  }

  $p = ($pg - 1) * 10;

  require'config.php';
  ?>

  <html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Etiquetas</title>
  </head>
  <body>
  
  <?php require'components/menu-mobile.php'; ?>

  <section class="overlay"><button class="btnSair">X</button></section>

    
    

  

  <?php 
    require'components/menu.php'; 
    require'components/menu-mobile-show.php';
  ?>
    



 <?php if($cargo == 'admin') { ?> <button class="btnNovaEtiqueta">Nova Etiqueta</button> <?php } ?>

<section class="etiquetas">

<section class="procurar">
  <form id="buscador" action="buscarEtiquetas.php">
  <input name="campo" type="text" placeholder="Buscar etiqueta" class="buscar">
  </form>
</section>

<?php

$etiquetas = Etiqueta::getEtiquetas($p);
$tamanhos = Etiqueta::getTamanhos();

if($etiquetas == null) {
  echo 'não tem etiquetas';
} else {
  foreach($etiquetas as $etiqueta) : ?>

  
  <section class="label"> 
    <section class="etiqueta-info">
        <p clas="descricao"><?=$etiqueta['descricao']?></p>
    </section>
  </section>


   <?php endforeach;
  }


?>

</section>
</section>

<section class="paginacaoDiv">
 <?php
  $paginas = Etiqueta::getQuantPaginasEtiquetas();

  for($q=0;$q<$paginas;$q++) : ?>
      <a class="paginacao" href="?p=<?=$q+1?>"><?=$q+1;?></a>
 <?php endfor;

 ?>
</section>
   

    <script src="js/jquery.js"></script>
    <script src="js/overflow.js"></script>
    <script src="js/imagePreview.js"></script>
    <script src="js/options.js"></script>
    <script src="js/mobile.js"></script>
    <script src="js/ajax.js"></script>
  </body>
  </html>

<?php

} else {
  header("Location: autenticacao");
}

?>