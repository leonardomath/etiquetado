<?php

require'config.php';

if(isset($_POST['idP']) && !empty($_POST['idP'])) {

    $id = addslashes($_POST['idP']);
    $nome = addslashes($_POST['nomeP']);
    $descricao = addslashes($_POST['descricaoP']);

    Produtos::atualizaProduto($id,$nome,$descricao);

} else {
    header("Location:produtos?noData");
}