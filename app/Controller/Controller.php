<?php
include "../Model/Model.php";

$dao = new HistoricoDAO();

if(isset($_POST) && !empty($_POST)){

    $tipo_cliente = $_POST['tipoCliente'];
    $tipo_atendimento = $_POST['tipoAtendimento'];
    $tipo_solicitacao = $_POST['tipoSolicitacao'];
    $descricao = $_POST['descricao'];
    
    $dao->cadastrar($tipo_cliente,$tipo_atendimento,$tipo_solicitacao,$descricao);

}else{
    
    echo "erro ao cadastrar";

};
