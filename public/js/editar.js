$(document).on('click', '#botao-editar', function(){
   
    $("#registroCliente").val($(this).parent().parent().find("#tdRegistro").text());
    $("#tituloCliente").val($(this).parent().parent().find("#tdCliente").text());
    $("#solicitacaoCliente").val($(this).parent().parent().find("#tdSolicitacao").text());
    $("#atendimentoCliente").val($(this).parent().parent().find("#tdAtendimento").text());
    $("#descricao").val($(this).parent().parent().find("#tdDescricao").text());
    


    //$('#btnAtualizar').on('click',function(){
        //alert($("#form").serialize());
 
        //var nomePessoa = $("#campoNome").val();
        //var nProcesso = $("#campoNumero").val();
        //var Ef = $("#campoEf").val();
        //var data = $("#campoData").val();
        //var valor = $("#campoValor").val();
        //var opcao = $("#status").val();
 
       //$.ajax({
         // type: 'POST',
         // url: 'http://10.150.150.201/CreaDF-Divida_Ativa/src/Controllers/Atualizar.php',
         // data: {nome:nomePessoa, numero:nProcesso, ef:Ef, data:data, valor:valor, opcao:opcao },
         // success: function() {
          //   alert("Processo atualizado com sucesso!");
          //   location.reload();
          //},
         // error: function(){
          //   alert("Erro ao atualizar");
          //}
     // });
   // });
    
    $('#close').on('click', function(){
       limpaCampos();
    })
    /*$('#btncadastrar').on('click', function(){
       limpaCampos();
    })*/
 
  
 })
 function limpaCampos()
 {
    $("#campoNome").val('');
    $("#campoNumero").val('');
    $("#campoEf").val('');
    $("#campoData").val('');
    $("#campoValor").val('');
 }