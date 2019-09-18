<?php
include_once "../Model/Model.php";
//include "../Model/CadastrarAtendimento.php";

$dao = new HistoricoDAO();

$json = (isset($_POST['dados'])) ? $_POST['dados'] : $_GET['dados'];

if($json['tipo'] == 'inserir'){

    $tipo_cliente = $json['cliente'];
    $tipo_atendimento = $json['atendimento'];
    $tipo_solicitacao = $json['solicitacao'];
    $descricao = $json['descricao'];
    $registro = $json['registro'];
    
    //$cadAtendimento = new CadastrarAtendimento($descricao, $tipo_cliente, $registro, $tipo_solicitacao, $tipo_atendimento);

    $dao->cadastrar($descricao, $tipo_cliente, $registro, $tipo_solicitacao, $tipo_atendimento);

    echo "Atendimento Cadastrado!.";

}else{
    
    echo "Erro ao cadastrar. Verifique se todos os campos estão preenchidos!.";

    

};
