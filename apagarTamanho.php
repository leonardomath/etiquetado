<?php

require'config.php';

    if(isset($_POST['id_tamanho']) && !empty($_POST['id_tamanho'])) {
        $id = addslashes($_POST['id_tamanho']);
        Etiqueta::apagarTamanho($id);
    } else {
        header("Location: tamanhos?noData");
    }