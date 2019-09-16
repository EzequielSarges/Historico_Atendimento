<?php
include_once "../Model/Model.php";
//include "../Model/CadastrarAtendimento.php";

$dao = new HistoricoDAO();

if(isset($_POST) && !empty($_POST)){

    $tipo_cliente = $_POST['tipoCliente'];
    $tipo_atendimento = $_POST['tipoAtendimento'];
    $tipo_solicitacao = $_POST['tipoSolicitacao'];
    $descricao = $_POST['descricao'];
    $registro = $_POST['registro'];
    
    //$cadAtendimento = new CadastrarAtendimento($descricao, $tipo_cliente, $registro, $tipo_solicitacao, $tipo_atendimento);

    $dao->cadastrar($descricao, $tipo_cliente, $registro, $tipo_solicitacao, $tipo_atendimento);

    echo "Atendimento Cadastrado!.";

}else{
    
    echo "Erro ao cadastrar. Verifique se todos os campos estão preenchidos!.";

    

};
