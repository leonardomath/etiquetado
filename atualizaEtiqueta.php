<?php

require'config.php';

if(isset($_POST['id']) && !empty($_POST['id'])) {

    $id = addslashes($_POST['id']);
    $nome = addslashes($_POST['nome_etiqueta']);
    $descricao = addslashes($_POST['descricao']);

    Etiqueta::editaEtiqueta($id,$nome,$descricao);

} else {
    header("Location:home?noData");
}