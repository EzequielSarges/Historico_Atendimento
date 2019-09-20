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

}elseif($json['tipo'] == 'listar'){

    $registro = $json['registro'];

    $objeto = $dao->listar($registro);

        $jsonResposta = [
            'data' => $objeto['data_atendimento'],
            'solicitacao' => $objeto['solicitacao'],
            'atendimento' => $objeto['atendimento'],
            'cliente' => $objeto['cliente'],
            'registro' => $objeto['registro_cliente'],
            'descricao' => $objeto['descricao_do_atendimento']
        ];
    
    echo json_encode($jsonResposta);
    

}
