<?php

require_once "Conexao.php";
require_once "ConexaoDSN.php";
require_once "Cliente.php";

$conexao = new Conexao("localhost","diservice", "root", "goleta");
$conexaoDSN = new ConexaoDSN("mysql:server=localhost;dbname=diservice", "root", "root");

//Funciona qualquer um das duas conexoes pois a classe cliente aguarda a conexão do tipo interface
//As duas classes de conexão implementa a interface ConexaoInterface
$cliente = new Cliente($conexao);
$cliente = new Cliente($conexaoDSN);

$listaCliente = $cliente->listar();

require_once "clientes.list.php";

?>




