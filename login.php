<?php
require'config.php';

if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {

  $nome_usuario = addslashes($_POST['usuario']);
  $senha = addslashes(md5($_POST['senha']));

  Usuario::login($nome_usuario,$senha);

} else {
  header("Location: autenticacao?noData");
}