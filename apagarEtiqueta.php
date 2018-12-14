<?php

require'config.php';

if(isset($_POST['id']) && !empty($_POST['id'])) {
    $id = addslashes($_POST['id']);

    Etiqueta::apagarEtiqueta($id);
} else {
    header("Location: home?noData");
}