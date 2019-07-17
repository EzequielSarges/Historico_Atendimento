$(function(){
    $("#form").submit(function(){
        $.ajax({
            url:"http://localhost/historico_atendimento/app/Controller/Controller.php",
            type: "POST",
            data: $("#form").serialize(),
            success: function(response){
                alert("Histórico Registrado!");
              
            },
            error: function(error){
                alert('Erro ao Cadastrar');
            }
        });
        return false;
    });
    
});
