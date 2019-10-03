<?php
$conexao = new PDO("mysql:host=10.150.150.30;dbname=historico_atendimento;charset=utf8","sdivida_ativa","divida2019");
$query = "SELECT * FROM tipo_solicitacao WHERE situacao = '1'";
$resultado = $conexao->query($query);

 while($linhas = $resultado->fetch(PDO::FETCH_OBJ)) {
   echo $linhas->id_tipo_solicitacao;
   echo '<hr>';
 }

    
    
