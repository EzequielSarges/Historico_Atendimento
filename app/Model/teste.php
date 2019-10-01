<?php
$conexao = new PDO("mysql:host=10.150.150.30;dbname=historico_atendimento;charset=utf8","sdivida_ativa","divida2019");
$conexao2 = new PDO("mysql:host=10.150.150.30;dbname=permissoes;charset=utf8","sdivida_ativa","divida2019");

$cpf = $_GET['cpf'];

$registro = $_GET['registro'];

$usuario = $_GET['usuario'];

$idSistema = 3;

$id = "SELECT PK_ID_USUARIO FROM tb_usuarios WHERE TX_LOGIN = '$usuario'";

$permissao = $conexao2->query($id);

$result = $permissao->fetch(PDO::FETCH_ASSOC);

foreach($result as $chave){
    echo $chave;
    
}
echo '<hr>';
//------------------------------------------

$p = "SELECT a.PK_ID_ACTION FROM  tb_controllers c INNER JOIN tb_actions a ON c.PK_ID_CONTROLLER = a.FK_ID_CONTROLLER 
INNER JOIN tb_usuario_permissoes up ON up.FK_ID_ACTION = a.PK_ID_ACTION where up.FK_ID_USUARIO = '$chave' and c.FK_ID_SISTEMA = '$idSistema'";
$per = $conexao2->query($p);

$linhas = $per->fetchAll();

foreach($linhas as $valor){
    echo $perm = $valor[0];
    
}

    echo '<hr>';

//----------------
echo $perm;
echo '<hr>';

$query = "SELECT h.id_historico_atendimento_cliente, h.data_atendimento, h.descricao_do_atendimento, h.registro_cliente, h.solucao_atendimento, c.cliente, a.atendimento,
s.solicitacao, h.usuario FROM historico_atendimento_cliente h INNER JOIN tipo_cliente c ON h.id_tipo_cliente = c.id_tipo_cliente 
INNER JOIN tipo_atendimento a ON h.id_tipo_atendimento = a.id_tipo_atendimento INNER JOIN tipo_solicitacao s ON 
h.id_tipo_solicitacao = s.id_tipo_solicitacao WHERE registro_cliente = '$cpf' AND ativo = '1' ORDER BY id_historico_atendimento_cliente DESC  ";

$resultado = $conexao->query($query);

	while($linhas = $resultado->fetch(PDO::FETCH_OBJ)) {
		echo '<tr id="corpoTabela"><td class="id" style="display:none">'.$linhas->id_historico_atendimento.'</td>'.'<br>';
		echo '<td class="solucao"  style="display:none">'.$linhas->solucao_atendimento.'</td>'.'<br>';
		echo '<td class="tdAtendimento">'.$linhas->data_atendimento.'</td>'.'<br>';
		echo '<td class="solicitacao" >'.$linhas->solicitacao.'</td>'.'<br>';
		echo '<td class="atendimento">'.$linhas->atendimento.'</td>'.'<br>';
		echo '<td class="usuario">'.$linhas->usuario.'</td>'.'<br>';
		echo '<td class="cliente" style="display:none">'.$linhas->cliente.'</td>'.'<br>';
		echo '<td class="registro">'.$registro.'</td>';
        echo '<td class="descricao"  style="display:none">'.$linhas->descricao_do_atendimento.'</td>'.'<br>';
        if($perm == 27){
            echo '<td><button class="btn btn-primary btn-sm" id="botao-detalhes">Detalhes</button><button class="btn btn-warning btn-sm" id="botao-editar">Editar</button><button class="btn btn-danger btn-sm" id="botao-excluir">Excluir</button></td></tr>';
        }elseif($perm == 25){
            echo '<td><button class="btn btn-primary btn-sm" id="botao-detalhes">Detalhes</button><button class="btn btn-warning btn-sm" id="botao-editar" disabled="disabled">Editar</button><button class="btn btn-danger btn-sm" id="botao-excluir" disabled="disabled">Excluir</button></td></tr>';
        }else{
            echo '<td><button class="btn btn-primary btn-sm" id="botao-detalhes">Detalhes</button><button class="btn btn-warning btn-sm" id="botao-editar" disabled="disabled">Editar</button><button class="btn btn-danger btn-sm" id="botao-excluir" disabled="disabled">Excluir</button></td></tr>';
        }
		
	}

