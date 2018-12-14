<?php

require'config.php';

if(isset($_POST['id'])) {
	$id = addslashes($_POST['id']);
	Usuario::apagarUsuario($id);
} else {
	header("Location: controleUsuario?noData");
}

?>