<?php

require'config.php';

if(!empty($_POST['height']) && !empty($_POST['width'])) {

  $height = addslashes($_POST['height']);
  $width = addslashes($_POST['width']);

  Etiqueta::setTamanho($height,$width);
} else {
  header("Location: tamanhos?noData");
}