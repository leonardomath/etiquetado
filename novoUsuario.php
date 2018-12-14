<?php

require'config.php';

if(!empty($_POST['usuario']) && !empty($_POST['senha']) && !empty($_POST['cargo'])) {

  

  $usuario = addslashes($_POST['usuario']);
  $senha = addslashes(md5($_POST['senha']));
  $cargo = addslashes($_POST['cargo']);

  Usuario::novoUsuario($usuario,$senha,$cargo);
} else {
  header("Location:controleUsuario?noData");
}