<?php
require'config.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco1 = $_POST['preco1'];
$preco2 = $_POST['preco2'];
$preco3 = $_POST['preco3'];
$quantidade = $_POST['quantidade'];
$x = $_POST['x'];

// echo $nome.'<br>';
// echo $descricao.'<br>';
// echo $preco1.'<br>';
// echo $preco2.'<br>';
// echo $preco3.'<br>';
// echo $quantidade.'<br>';

Etiqueta::setEtiquetaToList($nome,$descricao,$preco1,$preco2,$preco3,$quantidade,$x);