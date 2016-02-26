<?php

class Cliente {

    //SOLID uma classe tem que ter uma única responsabilidade
    //Evite acoplar classes

	private $db;

    //Programar sempre para uma interface e nunca para um objeto
    //Classe cliente precisa da conexao, mas ela não acopla
    //Isto é chamado de injeção de dependencia
	public function _construct(ConexaoInterface $conexao)
    {
		$this->db = $conexao->connect();
	}

	public function listar()
    {
		$query = "Select * from clientes";
		$stmt = $this->db->prepare($query);
		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}
}