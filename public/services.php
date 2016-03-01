<?php



//Registrando novo servico conexao compartilhado (Recurso pimple)
//$container->share irá compartilhar a conexao e nao ira solicitar nova conexao ao criar varios objetos de clientes
$container['conexao'] = $container->share(function(\Pimple $container){
    return new \APP\Conexao($container['host'], $container['db'],$container['user'], $container['password']);
});

//Registrando novo servico cliente compartilhado (Recurso pimple)
$container['cliente'] = $container->share(function(\Pimple $container ){
    return new \APP\Cliente($container['conexao']);
});

