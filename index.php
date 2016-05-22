<?php
$loader = require __DIR__ . '/vendor/autoload.php';

use LojaAgua\entidades\Usuario;
use LojaAgua\entidades\Pedido;
use LojaAgua\persistencia\UsuarioDAO;
use LojaAgua\persistencia\PedidoDAO;

$app = new \Slim\Slim ();

$usuarioDao = new UsuarioDAO();

$app->get ( '/', function () {
	echo json_encode ( [
			"api" => "Venda de Agua",
			"version" => "1.0.0"
	] );
} );


$app->get ( '/usuario(/(:id))', function ($id = null) use  ($usuarioDao){
echo json_encode($usuarioDao->findById($id)->toArray());
});

$app->post ( '/usuario(/)', function () use  ($usuarioDao){
echo "POST test\n";
} );

$app->put ( '/usuario(/)', function () {
echo "PUT\n";
} );

$app->delete ( '/usuario/:id', function () {
	echo "DELETE\n";
} );

$app->run ();

?>
