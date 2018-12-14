<?php

  $url = isset($_GET['url']) ? $_GET['url'] : 'autenticacao';

  if(file_exists('pages/'.$url.'.php')) {
    require('pages/'.$url.'.php');
  } else {
    require('pages/404.php');
  }