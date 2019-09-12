<?php
include "../Model/Model.php";

$dao = new HistoricoDAO();

if(isset($_POST) && !empty($_POST)){

    $tipo_cliente = $_POST['tipoCliente'];
    $tipo_atendimento = $_POST['tipoAtendimento'];
    $tipo_solicitacao = $_POST['tipoSolicitacao'];
    $descricao = $_POST['descricao'];
    $registro = $_POST['registro'];
    
    $dao->cadastrar($descricao, $tipo_cliente, $registro, $tipo_solicitacao, $tipo_atendimento);

}else{
    
    echo "erro ao cadastrar";

};
