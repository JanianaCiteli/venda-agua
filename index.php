<?php
$loader = require __DIR__ . '/vendor/autoload.php';

use LojaAgua\entidades\Usuario;

$u = new Usuario();
$u->setEmail("ivan@gmail.com");

echo "Hello ".$u->getEmail();

?>
