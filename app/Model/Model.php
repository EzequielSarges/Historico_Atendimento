<?php
include "../Connection/Connection.php";

class HistoricoDAO{

public function cadastrar($cadAtendimento){
    $query = 'INSERT INTO historico_atendimento_cliente(descricao_do_atendimento, id_tipo_cliente, registro_cliente, id_tipo_solicitacao, id_tipo_atendimento) VALUES('."'".$cadAtendimento->descricao."'".','."'".$cadAtendimento->tipo_cliente."'".','."'".$cadAtendimento->registro."'".','."'".$cadAtendimento->tipo_solicitacao."'".','."'".$cadAtendimento->tipo_atendimento."'".')';
    $conexao = Connection::conectar();
    $conexao->exec($query);

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