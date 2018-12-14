<header>
	<style type="text/css">
		img	{
			display: block;
			margin-bottom: 10px;
		}
	</style>
</header>
<?php

require'config.php';

 $etiquetas = Etiqueta::getEtiquetaList(); 


  	foreach($etiquetas as $etiqueta) : 

    for($i=0;$i<$etiqueta['quantidade'];$i++) :
     echo $etiqueta['nome']. ' - ';
     echo $etiqueta['preco1']. '<hr>';
 	endfor;

	endforeach;

	?>


	<img src="assets/imgs/system/templete1.jpeg">
	<img src="assets/imgs/system/10x3.jpg">
	<img src="assets/imgs/system/10x55.jpg">
	<img src="assets/imgs/system/10x55promocao.jpg">
	<img src="assets/imgs/system/30x20.jpg">
	<img src="assets/imgs/system/30x20v2.jpg">
	<img src="assets/imgs/system/20X10.jpg">
	<img src="assets/imgs/system/14.5X10.jpg">