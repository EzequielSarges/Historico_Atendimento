

<?php

$registro ='10203050/pa';

$pdo = new PDO('mysql:host=10.150.150.30; dbname=historico_atendimento;', 'sdivida_ativa', 'divida2019');

$sql = $pdo->query("SELECT h.data_atendimento, h.descricao_do_atendimento, h.registro_cliente, c.cliente, a.atendimento,
s.solicitacao FROM historico_atendimento_cliente h INNER JOIN tipo_cliente c ON h.id_tipo_cliente = c.id_tipo_cliente 
INNER JOIN tipo_atendimento a ON h.id_tipo_atendimento = a.id_tipo_atendimento INNER JOIN tipo_solicitacao s ON 
h.id_tipo_solicitacao = s.id_tipo_solicitacao
 WHERE registro_cliente = '$registro'");

	while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
		echo $linha['data_atendimento']."<br/>";
        echo $linha['descricao_do_atendimento']."<br/>";
        echo $linha['cliente']."<br/>";
        echo $linha['registro_cliente']."<br/>";
        echo $linha['atendimento']."<br/>";
		echo $linha['solicitacao']."<br/>";
		};

?>