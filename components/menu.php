<?php 

$foto_perfil = $_SESSION['foto_perfil']; 
$cargo = $_SESSION['cargo'];

?>

<nav class="nav">
      <div class="foto-perfil" style="background: url('assets/imgs/system/<?=$foto_perfil?>'); background-size: cover;">

      </div>
      <ul>
        <li class="emailInfo"><?=$_SESSION['usuario']?></li>
        <?php if($cargo == 'admin') { ?><a href="produtos"><li>Produtos</li></a> <?php } ?>
        <a href="home"><li>Etiquetas</li></a>
        <?php if($cargo == 'admin') { ?> <a href="controleUsuario"><li>Controle de Uśuarios</li></a> <?php } ?>
        <a href="sair.php"><li>Sair</li></a>
      </ul>
    </nav>