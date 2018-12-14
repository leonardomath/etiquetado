<?php

class Produtos {


	public static function getProdutos() {
		$sql = Conexao::conectar()->prepare("SELECT * FROM produtos");
		$sql->execute();

		if($sql->rowCount() > 0) {
			$produtos = $sql->fetchAll();
		} else {
			$produtos = 0;
		}

		return $produtos;

	}

	public static function newProduto($nome,$descricao) {
		$sql = Conexao::conectar()->prepare("INSERT INTO produtos SET nome = ?, descricao = ?");
		$sql->execute(array($nome,$descricao));

		if($sql) {
			header("Location: produtos");
		} else {
			header("Location: produtos?erroInterno");
		}

	}

	 public static function apagaProduto($id) {
    $sql = Conexao::conectar()->prepare("DELETE FROM produtos WHERE id = ?");
    $sql->execute(array($id));
    
		if($sql) {
			header("Location: produtos");
		} else {
			header("Location: produtos?erroInterno");
		}
  }

    public static function atualizaProduto($id,$nome,$descricao) {
    $sql = Conexao::conectar()->prepare("UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?");
    $sql->execute(array($nome,$descricao,$id));
    if($sql) {
      header("Location: produtos");
    } else {
      header("Location: produtos?erroInterno");
    }
  }

}