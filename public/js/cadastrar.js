$(function(){
    $("#formario").submit(function(){
            var vazios = $("input[type=text]").filter(function() {
                return !this.value;
            }).get();

            if (vazios.length) {
                $(vazios).addClass('vazio');
                alert("Todos os campos devem ser preenchidos.");
                return false;
            } else {
                $.ajax({
                    url:"http://10.150.150.201/Historico_Atendimento/app/Controller/Controller.php",
                    type: "POST",
                    data: $("#formario").serialize(),
                    success: function(response){
                      alert(response)
                      
                    },
                    error: function(){
                       
                        alert('erro')
                    }
                });
            }

        
        return false;
    });
    
});
