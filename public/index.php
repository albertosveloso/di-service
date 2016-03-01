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

//Registrando novo servico cliente compartilhado (Recurso pimple)
$container['cliente'] = $container->share(function(\Pimple $container ){
    return new \APP\Cliente($container['conexao']);
});

//Chamando container de servico, reduz acoplamento de classe e a responsabilidade fica no container.
//Novo objeto é criado somente quando necessário
$cliente = $container['cliente'];






