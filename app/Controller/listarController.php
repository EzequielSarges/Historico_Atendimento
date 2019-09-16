<?php
$servername = "10.150.150.30";
$username = "sdivida_ativa";
$password = "divida2019";
$dbname = "historico_atendimento";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Receber a requisão da pesquisa 
$requestData= $_REQUEST;
//

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
$result_usuarios = "SELECT data_atendimento, descricao_do_atendimento, id_tipo_cliente,registro_cliente,id_tipo_solicitacao, id_tipo_atendimento FROM historico_atendimento_cliente";
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
	$dado = array(); 
	$dado[] = $row_usuarios["data_atendimento"];
	$dado[] = $row_usuarios["id_tipo_solicitacao"];
	$dado[] = $row_usuarios["id_tipo_atendimento"];	
	$dado[] = $row_usuarios["id_tipo_cliente"];
	$dado[] = $row_usuarios["registro_cliente"];
	$dado[] = $row_usuarios["descricao_do_atendimento"];
	$dado[] = "<button class='btn btn-success' id='botao-editar'>Editar</button><button class='btn btn-outline-danger' data-toggle='modal' data-target='#btnexcluir' id='excluir'>Excluir</button>";
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
