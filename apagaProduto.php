<?php

require'config.php';

if(isset($_POST['id'])) {
	$id = addslashes($_POST['id']);
	Produtos::apagaProduto($id);
} else {
	header("Location: produtos?noData");
}

?>