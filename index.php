
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"  href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Noto+Sans+TC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Modak|Noto+Sans+TC" rel="stylesheet">
    <?php
$nome = $_GET['nome'];
$rnp = $_GET['rnp'];
$registro = $_GET['registro'];
$prof = $_GET['tipoCliente'];
$profissional = ucfirst($prof);
?>
</head>
<body>
<div id="corpo-imagem">
        <img src="CREA-DF2.PNG"/>
    </div>
<div id = "corpo-login" class="container-fluid">
    <h1>LOGIN</H1>
<!--Formulário Login-->
        <form>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">#</span>
                </div>
                    <input id='usuario' type="text" name="usuario" class="form-control" placeholder="Usuário" aria-label="Usuário" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">#</span>
                </div>
                <input id='senha' type="password" name="senha" class="form-control" placeholder="Senha" aria-label="Usuário" aria-describedby="basic-addon1">
                </div>
                 <button id='botaoLogin' class="btn btn-outline-primary" type = "submit" name = "enviar" value = "Entrar">Entrar</button>
        </form>  
</div>  

<script src="public/js/jquery-3.4.1.min.js"></script>
<!--<script src='public/js/login.js'></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
$('#botaoLogin').on('click', function(){
    event.preventDefault();
    var nome = $('#usuario').val();
    var senha = $('#senha').val();
    
    $.ajax({
        type: 'GET',
        //url: 'http://10.150.150.201/CreaDF-Divida_Ativa/src/Controllers/LoginController.php',
        url: 'http://10.150.150.201/Historico_Atendimento/app/Controller/loginController.php',
        data: {'dados':{
            usuario: nome,
            pass: senha,
            
        }},
        dataType: 'json',
        success: function(response) {
            if(response.resposta != 'certo')
            {
                alert(response.resposta);
            }else{
                location.href ="http://10.150.150.201/Historico_Atendimento/public/index.php?nome=<?php echo $nome?>&tipoCliente=<?php echo $profissional?>&registro=<?php echo $registro?>&rnp=<?php echo $rnp?>";
            }
        },   
        error: function() {
            alert("Ocorreu um erro ao carregar os dados.");
          }
    })
})

</script>
</body>
</html>