<?php
include "../Model/Model.php";

$dao = new HistoricoDAO();

$json = (isset($_POST['dados'])) ? $_POST['dados'] : $_GET['dados'];

if($json['tipo'] == 'inserir'){

    $registro = $json['registro'];

    $tipo_cliente = $json['cliente'];
    $tipo_atendimento = $json['atendimento'];
    $tipo_solicitacao = $json['solicitacao'];
    $descricao = $json['descricao'];
    
    
    //$cadAtendimento = new CadastrarAtendimento($descricao, $tipo_cliente, $registro, $tipo_solicitacao, $tipo_atendimento);

    $dao->cadastrar($descricao, $tipo_cliente, $registro, $tipo_solicitacao, $tipo_atendimento);

    echo "Atendimento Cadastrado!.";

}elseif($json['tipo'] == 'deletar'){

    $id = $json['id'];

    $resposta = $dao->excluir($id);

    echo json_encode($resposta);
    

}elseif($json['tipo'] == 'editar'){
    $id = $json['id'];
    $registro = $json['registroCliente'];
    $cliente = $json['tipoCliente'];
    $solicitacao = $json['solicitacao'];
    $atendimento = $json['atendimento'];
    $descricao = $json['descricao'];
    $dao->editar($id,$registro,$cliente,$solicitacao,$atendimento,$descricao);
}
