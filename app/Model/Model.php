<?php
include "../Connection/Connection.php";

class HistoricoDAO{


public function cadastrar()
{
    $query = 'INSERT INTO () VALUES()';
    $conexao = Connection::conectar();
    $conexao->exec($query);

}

public function listar()
{
    $query = 'SELECT * from processos';
    $conexao = FabricaConnection::conectar();
    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();
    return $lista;
}



public function excluir($id)
{
    //$query = 'DELETE FROM processos WHERE ID ='.$id;
    $query = 'UPDATE processos SET STATUS=0 WHERE ID ='.$id;
    $conexao = FabricaConnection::conectar();
    $reposta = $conexao->exec($query);
    return $reposta;
}

}

?>