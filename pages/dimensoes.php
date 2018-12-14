<?php

$dimensao = '1920x1080';


$Dformatado = explode("x",$dimensao);


$height = $Dformatado[0];
$width = $Dformatado[1];

echo 'height: '.$height. ' width: '.$width;
