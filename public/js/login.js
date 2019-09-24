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
            pass: senha
        }},
        dataType: 'json',
        success: function(response) {
            if(response.resposta != 'certo')
            {
                alert(response.resposta);
            }else{
                location.href ='./public/index.php';
            }
        },   
        error: function() {
            alert("Ocorreu um erro ao carregar os dados.");
          }
    })
})
