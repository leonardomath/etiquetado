<?php
error_reporting(0);


/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);

$autoload = function($class) {
  require_once('classes/'.$class.'.php');
};

spl_autoload_register($autoload);


// Constantes do banco de dados

define('HOST','localhost');
define('DBNAME','etiquetado');
define('USER','root');
define('PASS','');

define('INCLUDE_PATH','http://chamandelsur.net/chamandelsur.net/etiquetado/');