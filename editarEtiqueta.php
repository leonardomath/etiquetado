<?php

require'config.php';

if(isset($_POST['id']) && !empty($_POST['id'])) {
    $id = addslashes($_POST['id']);
    Etiqueta::editaEtiqueta($id,$titulo,$descricao);
} else {
    header("Location: home?invalidFormat");
}