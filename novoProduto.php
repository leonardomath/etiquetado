<?php

require'config.php';

if(!empty($_POST['produto']) && !empty($_POST['descricao'])) {

  $produto = addslashes($_POST['produto']);
  $descricao = addslashes($_POST['descricao']);

  Produtos::newProduto($produto,$descricao);
} else {
  header("Location: produtos?noData");
}