<?php

//Gerenciador que cria e inclui as dependências que uma classe tem
class Container
{
    //Utilizando container para instanciar objetos, mudo somente neste local
    //e o sistema inteiro vai estar ok
    public static function getCliente()
    {
        $cliente = new Cliente(self::getConexao());
        return $cliente;

    }

    public static function getConexao()
    {
        $conexao = new Conexao("localhost","diservice", "root", "goleta");
        return $conexao;
    }


}