<?php

//Carregamento de todas classes/namespace
require_once "../vendor/autoload.php";

//Servico sendo chamado e não é necessario saber se cliente precisa de conexao e outros....
//$cliente = Container::getCliente();

//Trabalhando com pimple

$container = new Pimple;

//Registrando novo servico conexao compartilhado (Recurso pimple)
//$container->share irá compartilhar a conexao e nao ira solicitar nova conexao ao criar varios objetos de clientes
$container['conexao'] = $container->share(function(){
    return new \APP\Conexao("localhost", "diservice", "root", "goleta");
});

$cliente = new \APP\Cliente($container['conexao']);

//Usa a mesma conexao anterior, também conhecido como Lazy Services
$cliente2 = new \APP\Cliente($container['conexao']);





