<?php

session_start();

require'config.php';

$nome_etiqueta = $_POST['nome_etiqueta']; 
$descricao = $_POST['descricao'];

// echo $nome_etiqueta . ' ' . $descricao. '<br>';

// echo '<pre>';
// print_r($_FILES['img_etiqueta_send']);
// print_r($_FILES['img_etiqueta_send']['error']);
// echo '</pre>';

Etiqueta::novaEtiqueta($nome_etiqueta,$descricao);