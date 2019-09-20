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

public function listar($registro){

    $query = "SELECT h.data_atendimento, h.descricao_do_atendimento, h.registro_cliente, c.cliente, a.atendimento,
    s.solicitacao FROM historico_atendimento_cliente h INNER JOIN tipo_cliente c ON h.id_tipo_cliente = c.id_tipo_cliente 
    INNER JOIN tipo_atendimento a ON h.id_tipo_atendimento = a.id_tipo_atendimento INNER JOIN tipo_solicitacao s ON 
    h.id_tipo_solicitacao = s.id_tipo_solicitacao WHERE registro_cliente = '$registro' ORDER BY id_historico_atendimento_cliente DESC  ";
    $conexao = Connection::conectar();
    $resultado = $conexao->query($query);
    $array = $resultado->fetchAll();
    foreach($array as $objeto)
    {
        return $objeto;
    }
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