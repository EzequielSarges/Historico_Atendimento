<?php
$servername = "10.150.150.30";
$username = "sdivida_ativa";
$password = "divida2019";
$dbname = "historico_atendimento";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Receber a requisão da pesquisa 
$requestData= $_REQUEST;
//
//
$registro = $_POST['registro'];
//Indice da coluna na tabela visualizar resultado => nome da coluna no banco de dados
$columns = array( 
	0 =>'descricao_do_atendimento', 
	1 => 'id_tipo_cliente',
	2=> 'registro_cliente',
	3=> 'id_tipo_solicitacao',
	4=> 'id_tipo_atendimento',
	5=> 'data_atendimento'
);

//Obtendo registros de número total sem qualquer pesquisa
$result_user = "SELECT data_atendimento, descricao_do_atendimento, id_tipo_cliente,registro_cliente,id_tipo_solicitacao, id_tipo_atendimento FROM historico_atendimento_cliente";
$resultado_user =mysqli_query($conn, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

//Obter os dados a serem apresentados
$result_usuarios = "SELECT h.data_atendimento, h.descricao_do_atendimento, h.registro_cliente, c.cliente, a.atendimento,
s.solicitacao FROM historico_atendimento_cliente h INNER JOIN tipo_cliente c ON h.id_tipo_cliente = c.id_tipo_cliente 
INNER JOIN tipo_atendimento a ON h.id_tipo_atendimento = a.id_tipo_atendimento INNER JOIN tipo_solicitacao s ON 
h.id_tipo_solicitacao = s.id_tipo_solicitacao WHERE registro_cliente = '$registro' ";



if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
	$result_usuarios.=" AND ( data_atendimento LIKE '".$requestData['search']['value']."%' ";    
	$result_usuarios.=" OR descricao_do_atendimento LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR id_tipo_cliente LIKE '".$requestData['search']['value']."%' )";
}

$resultado_usuarios=mysqli_query($conn, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);
//Ordenar o resultado
$result_usuarios.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_usuarios=mysqli_query($conn, $result_usuarios);

// Ler e criar o array de dados
$dados = array();
while( $row_usuarios =mysqli_fetch_array($resultado_usuarios) ) {  
	$data = $row_usuarios['data_atendimento'];
	$data2 = date('d/m/Y H:i:s', strtotime($data));
	$dado = array(); 
	$dado[] = $data2;
	$dado[] = $row_usuarios["solicitacao"];
	$dado[] = $row_usuarios["atendimento"];	
	$dado[] = $row_usuarios["cliente"];
	$dado[] = $row_usuarios["registro_cliente"];
	$dado[] = $row_usuarios["descricao_do_atendimento"];
	$dado[] = "<button class='btn btn-success btn-sm' id='botao-editar'>Detalhes</button><button class='btn btn-danger btn-sm' id='botao-excluir'>Excluir</button>";
	$dados[] = $dado;
}


//Cria o array de informações a serem retornadas para o Javascript
$json_data = array(
	"draw" => intval( $requestData['draw'] ),//para cada requisição é enviado um número como parâmetro
	"recordsTotal" => intval( $qnt_linhas ),  //Quantidade de registros que há no banco de dados
	"recordsFiltered" => intval( $totalFiltered ), //Total de registros quando houver pesquisa
	"data" => $dados   //Array de dados completo dos dados retornados da tabela 
);

echo json_encode($json_data);  //enviar dados como formato json
