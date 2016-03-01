<?php

//Trabalhando com pimple e colocando tudo dentro do container
$container = new Pimple;

$container['host'] = "localhost";
$container['db'] = "diservice";
$container['user'] = "root";
$container['password'] = "goleta";