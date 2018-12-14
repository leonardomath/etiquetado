<?php 


class Etiqueta {
  
  public static function getEtiquetas($p) {
    $sql = Conexao::conectar()->prepare("SELECT * FROM etiquetas LIMIT  $p, 10");
    $sql->execute();

    if($sql->rowCount() > 0) {
      $etiquetas = $sql->fetchAll();
    } else {
      $etiquetas = 0;
    }

    return $etiquetas;

  }

  

  public static function novaEtiqueta($nome_etiqueta,$descricao) {

    $formatos_permitidos = array('image/jpg','image/jpeg','image/png');

    if(in_array($_FILES['img_etiqueta_send']['type'], $formatos_permitidos)) {

      $img = md5(time().rand(0,999)).'.jpg';

      move_uploaded_file($_FILES['img_etiqueta_send']['tmp_name'], 'assets/imgs/etiquetas/'.$img);

      $sql = Conexao::conectar()->prepare("INSERT INTO etiquetas SET nome_etiqueta = ?, descricao = ?, img = ?");
      $sql->execute(array($nome_etiqueta,$descricao,$img));


      if($sql) {
        
      header("Location: home");
      } else {
        header("Location: home?erroInterno");
      }

    } else {
      header("Location: home?invalidFormat");
    }
    
  }

  public static function setTamanho($height,$width) {
    $sql = Conexao::conectar()->prepare("INSERT INTO tamanhos SET height = ?, width = ?");
    $sql->execute(array($height,$width));

    if($sql) {
      header("Location:tamanhos");
    } else {
      echo 'erro interno.';
    }
    
  }

  public static function getTamanhos() {
    $sql = Conexao::conectar()->prepare("SELECT * FROM tamanhos");
    $sql->execute();
    if($sql->rowCount() > 0) {
      $tamanhos = $sql->fetchAll();
    } else {
      $tamanhos = 0;
    }

    return $tamanhos;
  }

  public static function apagarTamanho($id) {
    $sql = Conexao::conectar()->prepare("DELETE FROM tamanhos WHERE id = ?");
    $sql->execute(array($id));
    header("Location:tamanhos");
  }

  public static function editaEtiqueta($id,$titulo,$descricao) {
    $sql = Conexao::conectar()->prepare("UPDATE etiquetas SET nome_etiqueta = ?, descricao = ? WHERE id = ?");
    $sql->execute(array($titulo,$descricao,$id));
    if($sql) {
      header("Location: home");
    } else {
      header("Location: home?erroInterno");
    }
  }

  public static function apagarEtiqueta($id) {
    $sql = Conexao::conectar()->prepare("DELETE FROM etiquetas WHERE id = ?");
    $sql->execute(array($id));

    if($sql) {
    header("Location:home");
    } else {
      header("Location:home?erroInterno");
    }
  }

  public static function getQuantPaginasEtiquetas() {
    $qt_por_pagina = 10;
    $total = 0;
    $sql = Conexao::conectar()->prepare("SELECT COUNT(*) as c FROM etiquetas");
    $sql->execute();

    // total de dados
    $sql = $sql->fetch();
    $total = $sql['c'];
    $paginas = $total/$qt_por_pagina;

    return $paginas;
  }

  public static function setEtiquetaToList($nome,$descricao,$preco1,$preco2,$preco3,$quantidade,$x) {
    $sql = Conexao::conectar()->prepare("INSERT INTO lista_de_etiquetas SET nome = ?, descricao = ?, preco1 = ?, preco2 = ?, preco3 = ?, quantidade = ?, x = ?");
    $sql->execute(array($nome,$descricao,$preco1,$preco2,$preco3,$quantidade,$x));

    if($sql) {
      header("Location: home");
    } else {
      header("Location: home?ErroInterno"); 
    }
  }

  public static function getEtiquetaList() {
    $sql = Conexao::conectar()->prepare("SELECT * FROM lista_de_etiquetas");
    $sql->execute();
    if($sql->rowCount() > 0) {
      $etiquetas = $sql->fetchAll();
    } else {
      $etiquetas = 0;
    }

    return $etiquetas;
  }

  public static function deleteListOfEtiquetas() {
    $sql = Conexao::conectar()->prepare("DELETE FROM lista_de_etiquetas");
    $sql->execute();
    header("Location: home");
  }

}