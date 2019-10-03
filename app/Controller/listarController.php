<?php
$servido = "10.150.150.30";
$usuario = "sdivida_ativa";
$senha = "divida2019";
$bdname = "historico_atendimento";
 
$conexao = mysqli_connect($servido, $usuario, $senha, $bdname);
$registro = $_GET['registro'];

$query = "SELECT h.id_historico_atendimento_cliente, h.data_atendimento, h.usuario, h.descricao_do_atendimento, h.registro_cliente, h.solucao_atendimento, c.cliente, a.atendimento,
s.solicitacao FROM historico_atendimento_cliente h INNER JOIN tipo_cliente c ON h.id_tipo_cliente = c.id_tipo_cliente 
INNER JOIN tipo_atendimento a ON h.id_tipo_atendimento = a.id_tipo_atendimento INNER JOIN tipo_solicitacao s ON 
h.id_tipo_solicitacao = s.id_tipo_solicitacao WHERE registro_cliente = '$registro' AND ativo = '1' ORDER BY id_historico_atendimento_cliente DESC  ";
$resultado = mysqli_query($conexao,$query);
if(($resultado) AND ($resultado->num_rows != 0)){
	while($linha_resultado = mysqli_fetch_assoc($resultado)){
		$vetor[] = array_map('utf8_encode', $linha_resultado); 
	}
	echo json_encode($vetor);
}else{
	echo "Nenhum Resgistro Encontrado!.";
}
