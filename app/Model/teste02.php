<?php
$conexao = new PDO("mysql:host=10.150.150.30;dbname=permissoes;charset=utf8","sdivida_ativa","divida2019");

$chave = '214';

$idSistema = '3';

    $p = "SELECT a.PK_ID_ACTION FROM  tb_controllers c INNER JOIN tb_actions a ON c.PK_ID_CONTROLLER = a.FK_ID_CONTROLLER 
        INNER JOIN tb_usuario_permissoes up ON up.FK_ID_ACTION = a.PK_ID_ACTION where up.FK_ID_USUARIO = '$chave' and c.FK_ID_SISTEMA = '$idSistema'";
    $per = $conexao->query($p);
    
    $linhas = $per->fetchAll();

    foreach($linhas as $chave){
       echo $chave[0];
    }
		
	

    
    echo '<hr>';
