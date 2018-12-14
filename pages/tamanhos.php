<?php
session_start();

if(isset($_SESSION['usuario'])) { 

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

    <section class="label-etiqueta">
  
      <section class="tamanho-etiqueta-info">
            <form action="novoTamanho.php" method="post">
              <input type="number" name="height" placeholder="Altura da etiqueta em cm" step=".01">
              <input type="number" name="width" placeholder="Largura da etiqueta em cm" step=".01">
              <button class="escolher" type="submit">Criar</button>
            </form>
        </section>
    </section>
  </section>
  

  
  <?php 
    require'components/menu.php'; 
    require'components/menu-mobile-show.php';
  ?>
    



<button class="btnNovaEtiqueta">Novo tamanho</button>

<section class="etiquetas">

<?php

$tamanhos = Etiqueta::getTamanhos();

if($tamanhos == 0) {
  echo 0;
} else {
?>
  <table>
  <tr>
    <th>Altura</th>
    <th>Largura</th>
    <th>Ação</th>
  </tr>
  <?php foreach($tamanhos as $tamanho) : ?>

 
    <tr>
      <td>
        <?=$tamanho['height']?>
      </td>
      <td>
        <?=$tamanho['width']?>
      </td>
      <td>
        <form action="apagarTamanho.php" method="post">
          <input type="hidden" value="<?=$tamanho['id']?>" name="id_tamanho">
          <button class="btnApagarTB" type="submit">Apagar</button>
        </form>
      </td>
    </tr>
  

   <?php endforeach;
  }


?>
</table>
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