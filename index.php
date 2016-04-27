<?php
$loader = require __DIR__ . '/vendor/autoload.php';

use LojaAgua\entidades\Usuario;
use LojaAgua\entidades\Pedido;
use LojaAgua\persistencia\UsuarioDAO;
use LojaAgua\persistencia\PedidoDAO;

$app = new \Slim\Slim ();



$app->get ( '/', function () {
	echo json_encode ( [
			"api" => "Venda de Agua",
			"version" => "1.0.0"
	] );
} );

$app->get ( '/test(/(:test))', function ($test = "nada") {
	echo "test:" . $test;
} );

$app->get ( '/usuario(/(:id))', function ($id = null) {
echo "GET\n";
});

$app->post ( '/usuario(/)', function () {
echo "POST\n";
} );

$app->put ( '/usuario(/))', function () {
echo "PUT\n";
} );

$app->delete ( '/usuario/:id', function ($id = null) {
	echo "DELETE\n";
} );

$app->run ();

?>
