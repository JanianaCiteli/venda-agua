<?php
$loader = require __DIR__ . '/vendor/autoload.php';

use LojaAgua\entidades\Usuario;
//Passo 1 - Incluir Arquivos
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

//Passo 2 - Configuração
$path = array (
    'LojaAgua/entidades'
);
$devMode = true;

$config = Setup::createAnnotationMetadataConfiguration ( $path, $devMode );

$connectionOptions =  array (
    'dbname' => 'vendaagua',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql'
);

//Passo 3 - Objeto de persistencia
$entityManager = EntityManager::create ( $connectionOptions, $config );

$u = $entityManager ->find ('LojaAgua\entidades\Usuario' ,2) ;

$entityManager->remove($u);
$entityManager->flush();

echo "remove ".$u->getEmail();

?>
