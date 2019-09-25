<?php
$servido = "10.150.150.30";
$usuario = "";
$senha = "";
$bdname = "permissoes";
 
$conexao = mysqli_connect($servido, $usuario, $senha, $bdname);

$usuario = "ezequielsarges";

$query1 = 
"SELECT PK_ID_USUARIO FROM tb_usuarios WHERE TX_LOGIN = '$usuario'";
$result = mysqli_query($conexao,$query1);
echo $result."</br>";

/*$query = 
"SELECT * FROM  tb_controllers c INNER JOIN tb_actions a ON c.PK_ID_CONTROLLER = a.FK_ID_CONTROLLER 
 INNER JOIN tb_usuario_permissoes up ON up.FK_ID_ACTION = a.PK_ID_ACTION where up.FK_ID_USUARIO = '$result'
 AND up.FK_ID_ACTION = 25";
$resultado = mysqli_query($conexao,$query);

echo $resultado."</br>";*/
?>