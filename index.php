<?php
$loader = require __DIR__ . '/vendor/autoload.php';

use LojaAgua\entidades\Usuario;
use LojaAgua\entidades\Pedido;
use LojaAgua\persistencia\UsuarioDAO;
use LojaAgua\persistencia\PedidoDAO;

$user = new Usuario(0,"ivanknow3@gmail.com","123456","Rua xy");
$dao = new UsuarioDAO();

$dao->insert($user);

$time = new DateTime("now");
$pedido = new Pedido(0,$time,$user,array());
$dao2 = new PedidoDAO();

$dao2->insert($pedido);



?>
