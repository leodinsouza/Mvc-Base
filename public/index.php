<?php
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);

/* Habilita a exibição de erros */
ini_set("display_errors", 1);
require_once __DIR__ . '/../bootstrap/init.php';
$appname = getenv('APP_NAME');
//echo $appname;