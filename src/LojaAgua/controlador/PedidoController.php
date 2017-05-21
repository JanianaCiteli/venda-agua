<?php

namespace LojaAgua\controlador;

use  LojaAgua\persistencia\PedidoDAO;
use  LojaAgua\entidade\Pedido;
use LojaAgua\controlador\AbstractController;

class PedidoController extends AbstractController{

public function __construct() {
    parent::__construct(new PedidoDAO ());
	}
	
	public function insert($json){}
	public function update($id, $json){}
	public function delete($id){}
}
