<?php

//Carregamento do namespace (todas classes)
require_once "../vendor/autoload.php";

//Arquivos de configuracoes
require_once "config.php";

//Service Container (Container de servicos)
require_once "services.php";

$cliente = $container['cliente']; //retorna classe criada com as dependencias corretas

$listaCliente = $cliente->listar();

include_once('clientes.list.php');





