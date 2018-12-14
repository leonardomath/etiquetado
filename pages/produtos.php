<?php

session_start();
$cargo = $_SESSION['cargo'];

if(isset($_SESSION['usuario']) && $_SESSION['cargo'] == 'admin') { 

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
            <form action="novoProduto.php" method="post">
              <input type="hidden" name="id" id="id">
              <input type="text" name="produto" id="nome" placeholder="Nome do produto">
              <textarea name="descricao" id="descricao" placeholder="Descriçao"></textarea>
              <button class="escolher" type="submit">Criar</button>
            </form>
        </section>
    </section>
  </section>

    <section class="overlay2">

    <button id="btnSairP" class="btnSair">X</button>

    <section class="label-etiqueta">
  
      <section class="tamanho-etiqueta-info">
            <form action="atualizaProduto.php" method="post">
              <input type="hidden" name="idP" id="idP">
              <input type="text" name="nomeP" id="nomeP" placeholder="Nome do produto">
              <textarea name="descricaoP" id="descricaoP" placeholder="Descriçao"></textarea>
              <button class="escolher" type="submit">Atualizar</button>
            </form>
        </section>
    </section>
  </section>
  

  
  <?php 
    require'components/menu.php'; 
    require'components/menu-mobile-show.php';
  ?>
    



<button class="btnNovaEtiqueta">Novo produto</button>

<section class="etiquetas">

<?php

$produtos = Produtos::getProdutos();

if($produtos == 0) {
  echo 'Sem produtos cadastrados.';
} else {
?>
  <table>
  <tr>
    <th>Nome</th>
    <th>Descrição</th>
    <th>Ação</th>
  </tr>
  <?php foreach($produtos as $produto) : ?>

 
    <tr>
      <td>
        <?=$produto['nome']?>
      </td>
      <td>
        <?=$produto['descricao']?>
      </td>
      <td>
        <div class="acoes">
        <form action="apagaProduto.php" method="post">
          <input type="hidden" value="<?=$produto['id']?>" name="id">
          <button class="btnApagarTB" type="submit">Apagar</button>
        </form>
        <button class="btnEditar" onclick="editarProduto('<?=$produto['id']?>','<?=$produto['nome']?>','<?=$produto['descricao']?>')">Editar</button>
        </div>
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
    <script src="js/options.js"></script>
  </body>
  </html>

<?php

} else {
  header("Location: autenticacao");
}

?>