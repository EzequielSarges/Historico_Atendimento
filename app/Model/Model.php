<?php
include "../Connection/Connection.php";

class HistoricoDAO{

public function cadastrar($descricao, $tipo_cliente, $registro, $tipo_solicitacao, $tipo_atendimento){
    $conexao = Connection::conectar();
    $query = $conexao->prepare("INSERT INTO historico_atendimento_cliente(descricao_do_atendimento, id_tipo_cliente, registro_cliente, id_tipo_solicitacao, id_tipo_atendimento)VALUES
    (:descricao, :TipoCliente, :registro, :TipoSolicitacao, :TipoAtendimento)");
    $query->bindValue(":descricao","$descricao");
    $query->bindValue(":TipoCliente","$tipo_cliente");
    $query->bindValue(":registro","$registro");
    $query->bindValue(":TipoSolicitacao","$tipo_solicitacao");
    $query->bindValue(":TipoAtendimento","$tipo_atendimento");
    $query->execute();
}

public function listar(){
    $query = 'SELECT * from processos';
    $conexao = Connection::conectar();
    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();
    return $lista;
}



public function excluir($id){
    //$query = 'DELETE FROM processos WHERE ID ='.$id;
    $query = 'UPDATE processos SET STATUS=0 WHERE ID ='.$id;
    $conexao = Connection::conectar();
    $reposta = $conexao->exec($query);
    return $reposta;
}

}

?>