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
    




<section class="etiquetas">


 <div class="templetes">
    <a href="print?img=templete1.jpeg&height=14.5&width=10">14.5X10<img src="assets/imgs/system/templete1.jpeg"></a>
    <a href="print?img=templete22.jpeg">20X10<img src="assets/imgs/system/templete2.jpeg"></a>

    <a href="print?img=templete33.jpeg">14.5X10<img src="assets/imgs/system/templete2.jpeg"></a>

    <a href="print?img=templete66.jpeg">10x3<img src="assets/imgs/system/templete6.jpeg"></a>

    <a href="print?img=templete77.jpeg">10x55<img src="assets/imgs/system/templete7.jpeg"></a>

    <a href="print?img=templete88.jpeg">10x55<img src="assets/imgs/system/templete8.jpeg"></a>

    <a href="print?img=templete99.jpeg">30X20<img src="assets/imgs/system/templete9.jpeg"></a>

     <a href="print?img=templete100.jpeg">30X20<img src="assets/imgs/system/templete10.jpeg"></a>

  </div>


</section>

 

<!--     <script src="js/jquery.js"></script>
    <script src="js/overflow.js"></script>
    <script src="js/imagePreview.js"></script>
    <script src="js/options.js"></script>
    <script src="js/mobile.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/etiquetas.js"></script>
 -->

  </body>
  </html>

<?php

} else {
  header("Location: autenticacao");
}

?>