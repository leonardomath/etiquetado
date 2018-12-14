<?php 
$foto = $_SESSION['foto_perfil'];
?>
<section class="overlay-mobile">

	<?php if($foto == 'default.png') { ?>
		<div class="foto-perfil" style="background: url('assets/imgs/system/<?=$foto?>'); background-size: cover;">
    </div>
		<?php } else { ?>
    <div class="foto-perfil" style="background: url('assets/imgs/perfil/<?=$foto?>'); background-size: cover;">
    </div>
    <?php } ?>
    <ul>
    <li class="emailInfo"><?=$_SESSION['usuario']?></li>
        <?php if($cargo == 'admin') { ?><a href="produtos"><li>Produtos</li></a> <?php } ?>
        <a href="home"><li>Etiquetas</li></a>
        <?php if($cargo == 'admin') { ?> <a href="controleUsuario"><li>Controle de Uśuarios</li></a> <?php } ?>
        <a href="sair.php"><li>Sair</li></a>
    </ul>
</section>


