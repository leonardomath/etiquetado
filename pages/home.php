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
    

<section class="procurar2" method="post">
  <form id="buscador" action="buscarEtiquetas.php">
  <input id="campo" name="campo" type="text" placeholder="Buscar produto" class="buscar">
  </form>
</section>

<button class="generate"><a href="etiquetasImpresao">Gerar Etiquetas</a></button>

<section class="produto-lista">
  Ver produtos escolhidos
</section>

<section class="etiquetaListShow">
  <button id="exitListShow">X</button>
  <?php 
    $etiquetas = Etiqueta::getEtiquetaList();

    if($etiquetas == null) {
      echo "Lista vázia.";
    } else {
    foreach($etiquetas as $etiqueta) :
      echo $etiqueta['nome'].'<br>';
      echo "<hr>";
    endforeach; ?>
    <button class="limparLista"><a href="printDone.php">Limpar Lista</a></button>
<?php    }?>



</section>


<section class="etiquetas">



</section>






    <script src="js/jquery.js"></script>
    <script src="js/overflow.js"></script>
    <script src="js/imagePreview.js"></script>
    <script src="js/options.js"></script>
    <script src="js/mobile.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/etiquetas.js"></script>

    <script type="text/javascript">
    
      $('#exitListShow').click(function() {
        var div = $('.etiquetaListShow');
        div.fadeOut();
      })  

        $('.produto-lista').click(function() {
        var div = $('.etiquetaListShow');
        div.fadeIn();
      })  
    
    </script>
  </body>
  </html>

<?php

} else {
  header("Location: autenticacao");
}

?>