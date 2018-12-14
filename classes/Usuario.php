<?php

class Usuario {

  public static function login($usuario,$senha) {
    $sql = Conexao::conectar()->prepare("SELECT * FROM usuarios WHERE nome_usuario = ? and senha = ?");
    $sql->execute(array($usuario,$senha));

    if($sql->rowCount() > 0) {
      $usuario = $sql->fetch();
      session_start();
      $_SESSION['usuario'] = $usuario['nome_usuario'];
      $_SESSION['foto_perfil'] = $usuario['foto'];
      $_SESSION['cargo'] = $usuario['cargo'];
      header("Location:home");
    } else {
      header("Location: autenticacao?passW");
    }
  }

  public static function getUsuarios($p) {
    $sql = Conexao::conectar()->prepare("SELECT * FROM usuarios limit $p, 10");
    $sql->execute();

    if($sql->rowCount() > 0) {
      $usuarios = $sql->fetchAll();
    } else {
      $usuarios = 0;
    }

    return $usuarios;
  }

  public static function apagarUsuario($id) {
    $sql = Conexao::conectar()->prepare("DELETE FROM usuarios WHERE id = ?");
    $sql->execute(array($id));
    
    if($sql) {
      header("Location: controleUsuario");
    } else {
      header("Location: controleUsuario?Erro");
    }
  }

  public static function novoUsuario($usuario,$senha,$cargo) {

    $formatos_permitidos = array('image/jpg','image/jpeg','image/png');

  
      if(in_array($_FILES['foto']['type'], $formatos_permitidos)) {

        $img = md5(time().rand(0,999)).'.jpg';

        move_uploaded_file($_FILES['foto']['tmp_name'], 'assets/imgs/perfil/'.$img);

        $sql = Conexao::conectar()->prepare("INSERT INTO usuarios SET nome_usuario = ?, senha = ?, cargo = ?, foto = ?");
        $sql->execute(array($usuario,$senha,$cargo,$img));
      } else {
        if($_FILES['foto']['size'] == 0) {
      
          $img = 'default.png';
          $sql = Conexao::conectar()->prepare("INSERT INTO usuarios SET nome_usuario = ?, senha = ?, cargo = ?, foto = ?");
          $sql->execute(array($usuario,$senha,$cargo,$img));
        } else {
       header("Location: controleUsuario?invalidFormat");
       
      }
   }
    if($sql) {
        
      header("Location: controleUsuario");
      } else {
        header("Location: controleUsuario?erroInterno");
        print_r($sql);
      }

    

    }

    public static function getQuantPaginasUsuario() {
      $qt_por_pagina = 10;
      $total = 0;
      $sql = Conexao::conectar()->prepare("SELECT COUNT(*) as c FROM usuarios");
      $sql->execute();

      // total de dados

      $sql = $sql->fetch();
      $total = $sql['c'];
      $paginas = $total/$qt_por_pagina;

      return $paginas;
    }

  }