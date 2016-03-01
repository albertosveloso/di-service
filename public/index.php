<?php

//Carregamento de todas classes/namespace
require_once "../vendor/autoload.php";

//Servico sendo chamado e não é necessario saber se cliente precisa de conexao e outros....
$cliente = Container::getCliente();

$listaCliente = $cliente->listar();

require_once "clientes.list.php";
