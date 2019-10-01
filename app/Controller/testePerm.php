<?php
$servido = "10.150.150.30";
$usuario = "sdivida_ativa";
$senha = "divida2019";
$bdname = "permissoes";
 
$conexao = mysqli_connect($servido, $usuario, $senha, $bdname);

$usu = $_GET['usuario'];

$idSistema = 3;



$query1 = "SELECT PK_ID_USUARIO FROM tb_usuarios WHERE TX_LOGIN = '$usu'";
$result = mysqli_query($conexao,$query1);

while($linha_result = mysqli_fetch_assoc($result)){
        $linha = $linha_result['PK_ID_USUARIO'];
        $query = "SELECT a.PK_ID_ACTION FROM  tb_controllers c INNER JOIN tb_actions a ON c.PK_ID_CONTROLLER = a.FK_ID_CONTROLLER 
        INNER JOIN tb_usuario_permissoes up ON up.FK_ID_ACTION = a.PK_ID_ACTION where up.FK_ID_USUARIO = '$linha' and c.FK_ID_SISTEMA = '$idSistema'";

    $resultado = mysqli_query($conexao,$query);

    if(($resultado) AND ($resultado->num_rows != 0)){

        while($linha_resultado = mysqli_fetch_array($resultado)){
            
            echo $linha_resultado[0];
        };
        
        
    }elseif(($resultado) AND ($resultado->num_rows == 0)){
        echo "Erro ao verificar permissões";
    };
    
};

?>