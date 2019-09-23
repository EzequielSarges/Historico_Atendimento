<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link href="https://fonts.googleapis.com/css?family=Allerta&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    
    
<?php
$nome = $_GET['nome'];
$registro = $_GET['registro'];
$profissional = $_GET['tipoCliente'];
?>

    <title>HISTÓRICO DE ATENDIMENTO</title>
</head>
<body>
    <div id="corpo" class="fixed-top">
        <div id="titulo">
            <h5>HISTÓRICO DE ATENDIMENTO</h5>
        </div>
    </div>


<div id = "caixa1">

<div id="item0" class="card">
    <div style = "width: 100%" class="card-header">
    <h5><?php echo $profissional?></h5>
    </div>
    <div class="card-body"> 
        <div id="cabecalho" class="form-group col-md-6" >
            <div id="foto"><img src="imagens/usu.jpg"></div>
        </div>
    </div>
    <h5 style="margin-bottom: 35px;"><?php echo $nome?></h5>
</div>
   
    <div id="item1" class="card">
                <div class="card-header">
                    <h5>NOVO ATENDIMENTO</h5>
                </div>
                
                <div class="card-body">    
                        
                        <div id = 'form'>
                            <form id="formario" class="was-validated ">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label >CPF/CNPJ</label>
                                            <input type="text" name ='registro' class="form-control" id="registro" disabled="disabled" value="<?php echo $registro?>">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label >Tipo Cliente</label>
                                                <select name="tipoCliente" class="custom-select" required  id="tipoCliente" disabled="disabled">
                                                    <option value="">Selecione...</option>			
                                                    <option value="1">Profissional</option>
                                                    <option value="2">Empresa</option>
                                                    <option value="3">Não Registrado</option>
                                                </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label >Tipo de Solicitação </label>
                                                            <select name="tipoSolicitacao" class="custom-select" required  id="tipoSolicitacao">
                                                                <option value="">Selecione...</option>			
                                                                <option value="1">Emissão de Boleto</option>
                                                                <option value="2">Parcelamento/Acordos</option>
                                                                <option value="3">Intenções</option>
                                                                <option value="4">Informações de débito</option>
                                                                <option value="5">Outros</option>
                                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label >Tipo de Atendimento</label>
                                                            <select name="tipoAtendimento" class="custom-select" required  id="tipoAtendimento" >
                                                                <option value="">Selecione...</option>			
                                                                <option value="1">Telefônico</option>
                                                                <option value="2">Presencial</option>
                                                                <option value="3">E-mail</option>
                                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label >Descrição:</label>
                                            <textarea name="descricao" id="descricao" cols="73" rows="3" class="form-control is-invalid" required></textarea>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <button type="submit" name="btnCadastrar" id="btCadastrar" class="btn btn-success" >Cadastrar</button>
                                        </div>
                                        
                                    </div>

    
                                            
                                    
                            </form>  
                        </div>
                        
                </div>
    </div>  
</div>

<!--alerta de nenhum registro encontrado-->
<div style ='display:none'id="alert" class="alert alert-danger" role="alert">
  <h6 id ="mensagem"><strong >Ops! Nenhum registro encontrado!.</strong></h6>
</div>

<!--tabela de atendimentos-->
        <div id="item2" class="card">
        
                <div class="card-header">
                    <h5> ATENDIMENTOS ANTERIORES</h5>
                </div>
                <div class="card-body">
                    <div id='tabelaDiv' style="width:100%; height: 250px;">
                        <table id="tabela" class="table table-bordered table-hover " cellspacing="0" style="width:100%">
                        <thead class="thead-dark">
                                <tr id="cabecalho-tabela">
                                    <th>Data do Atendimento</th>
                                    <th>Tipo de Solicitação</th>
                                    <th>Tipo de Atendimento</th>
                                    <th>Tipo de Cliente</th>
                                    <th>CPF/CNPJ</th>
                                    <th>Ação</th>
                                
                                    
                                </tr>
                            </thead>
                            <tbody id="corpo-tabela">
                                    <!--Será oreenchido dinamicamente com JQUERY-->
                              
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>  

 <!--Modal ALERTA-->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div style="background-color: #008000" id="myModalHeader" class="modal-header ">
          <h4 style="color: #ffffff; font-family: 'Allerta', sans-serif; text-align: center; " id='corpoTexto' class="modal-title">HISTÓRICO ATENDIMENTO</h4>
          
        </div>
        <div class='modal-body'>
        <button type="button" class="btn btn-secondary" id="btnOk" data-dismiss="modal">OK</button>
        </div>
              
      </div>
    </div>
  </div>


  <!--Modal DETALHES-->
  <div id="modalDetalhes" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header bg-secondary">
            <h6 style = "color:#ffffff">Detalhes do atendimento</h6> 
            <button type="button" id="fechar" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>           
        </div>
        <div class='modal-body'>

        <div id="detalhes">
            <div id = "titulo">
                <h6>CPF/CNPF do Cliente : </h6>
                <h6 id="registroCliente"># </h6>
            </div>
            <div id = "titulo">
                <h6> Tipo de Cliente : </h6>
                <h6 id="tituloCliente"># </h6>
            </div>
            <div id = "titulo">
                <h6> Solicitação : </h6>
                <h6 id="solicitacaoCliente"># </h6>
            </div>
            <div id = "titulo">
                <h6> Atendimento via: </h6>
                <h6 id="atendimentoCliente"># </h6>
            </div>
            <div id = "titulo">
                <h6> Data do Atendimento:</h6>
                <h6 id="dataAtendimento"># </h6>
            </div>
        </div>
           <h6 id ="descricao">Descrição do Atendimento:</h6>
           <p id='descricaoCliente'>
           Formato dos Códigos HTML:
Cada código HTML contém o símbolo "#" e 6 letras ou números. Estes números estão no sistema numérico hexadecimal. Por exemplo, "FF" em hexadecimal representa o número 255 em Decimal.

Significado dos símbolos:
Os primeiros dois símbolos no código de cor HTML representam a intensidade da cor encarnada. 00 é o mínimo e FF o mais intenso. O terceiro e o quarto reprenstam a intensidade de verde e o quinto e o sexto representam a intensidade de azul. Portanto, combinando as intensidades de encarnado, verde e azul podemos misturar qualquer cor que o nosso coração deseje:)
           </p>
           <p>             
        </div>

    </div>
  </div>
</div>

<!-- Modal EDITAR -->

<div id="modalEditar" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header bg-secondary">
            <h6 style = "color:#ffffff">Atualizar Atendimento</h6> 
            <button type="button" id="fechar" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>           
        </div>

        <div class='modal-body'>
            <form id="formulario" class="was-validated ">
                 <div class="form-row">
                    <div class="col-md-4 mb-3" style="display:none">
                         <input type="text" name ='id' class="form-control" id="id" disabled="disabled" >
                     </div>
                     <div class="col-md-4 mb-3">
                         <label >CPF/CNPJ</label>
                         <input type="text" name ='registro' class="form-control" id="registro_Cliente" disabled="disabled" value="<?php echo $registro?>">
                     </div>
                     <div class="col-md-4 mb-3">
                         <label >Tipo Cliente</label>
                             <select name="tipoCliente" class="custom-select" required  id="tipo_Cliente" disabled="disabled">
                                 <option value="">Selecione...</option>			
                                 <option value="1">Profissional</option>
                                 <option value="2">Empresa</option>
                                 <option value="3">Não Registrado</option>
                             </select>
                     </div>
                     <div class="col-md-4 mb-3">
                         <label >Tipo de Solicitação </label>
                                         <select name="tipoSolicitacao" class="custom-select" required  id="tipo_Solicitacao">
                                             <option value="">Selecione...</option>			
                                             <option value="1">Emissão de Boleto</option>
                                             <option value="2">Parcelamento/Acordos</option>
                                             <option value="3">Intenções</option>
                                             <option value="4">Informações de débito</option>
                                             <option value="5">Outros</option>
                                         </select>
                     </div>
                     <div class="col-md-4 mb-3">
                         <label >Tipo de Atendimento</label>
                                         <select name="tipoAtendimento" class="custom-select" required  id="tipo_Atendimento" >
                                             <option value="">Selecione...</option>			
                                             <option value="1">Telefônico</option>
                                             <option value="2">Presencial</option>
                                             <option value="3">E-mail</option>
                                         </select>
                     </div>
                     <div class="col-md-4 mb-3">
                         <label >Descrição:</label>
                         <textarea name="descricao" id="descricao_Atendimento" cols="73" rows="3" class="form-control is-invalid" required></textarea>
                     </div>

                     <div class="col-md-6 mb-3">
                         <button type="submit" name="btnCadastrar" id="btCadastrar" class="btn btn-success" >Atualizar</button>
                     </div>

                 </div>
                
             </form>  
        </div>
      
    </div>
  </div>
</div>

<!--Modal Excluir dados da tabela-->
<div class="modal" id="btnExcluir">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header bg-danger">
          <h5 style="color: #ffffff; font-family: 'Allerta', sans-serif; text-align: center; " id='corpoTexto' class="modal-title">Excluír Atendimento</h5>
          
        </div>
        <div class='modal-body'>
        <h5>Tem certeza que deseja excluír?</h5>
        </div>
        <div class='modal-footer'>
        <button type='submit' class='btn btn-danger' id='excluir'>Excluír</button>
        <button type='button' class='btn btn-success' id="excluirCancelar"data-dismiss='modal'>Cancelar</button>
      </div>
      </div>
    </div>
  </div>


<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/scroll.js"></script>
<!--<script src="js/cadastrar.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>    
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="js/editar.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!--<script>

		$(document).ready(function() {
			$('#tabela').DataTable({
        "language": {
        "sEmptyTable": "Nenhum registro encontrado",
        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
        "sInfoPostFix": "",
        "sInfoThousands": ".",
        "sLengthMenu": "Mostrar _MENU_ intens por página",
        "sLoadingRecords": "Carregando...",
        "sProcessing": "Processando...",
        "sZeroRecords": "Nenhum registro encontrado",
        "sSearch": "Pesquisar",
        "oPaginate": {
            "sNext": "Próximo",
            "sPrevious": "Anterior",
            "sFirst": "Primeiro",
            "sLast": "Último"
        },
        "oAria": {
            "sSortAscending": ": Ordenar colunas de forma ascendente",
            "sSortDescending": ": Ordenar colunas de forma descendente"
        },

    },	
    "processing": true,
    "serverSide": true,
	"ajax": {
				"url": "http://10.150.150.201/Historico_Atendimento/app/Controller/listarController.php",
				"type": "POST",
                "data": {
                    "registro": ""
                }
                }
            });


           
		} );
</script>-->


<!--cadastrar-->
<script>
$(function(){
    $("#formario").submit(function(){
        var tCliente = $("#tipoCliente").val()
        var tSolicitacao = $("#tipoSolicitacao").val()
        var tAtendimento = $("#tipoAtendimento").val()
        var descricao = $("#descricao").val()

        if (tCliente == "" || tSolicitacao == "" || tAtendimento == "" || descricao == "" ){
                alert("Preencha todos os campos!");
            } else {
                $.ajax({
                    url:"http://10.150.150.201/Historico_Atendimento/app/Controller/Controller.php",
                    type: "POST",
                    data: {'dados':{
                        tipo: 'inserir',
                        registro: '<?php echo $registro?>',
                        cliente: tCliente,
                        solicitacao: tSolicitacao,
                        atendimento: tAtendimento,
                        descricao: descricao
                    }},
                    success: function(response){
                      //alert(response)
                      $('#myModal').modal('show');
                      $("#corpoTexto").text('Atendimento Cadastrado!')
                      
                    },
                    error: function(error){
                      $('#myModal').modal('show');
                      $('#myModalHeader').css('background','#FF0000');
                      $("#corpoTexto").text('Erro!. Verifique se os campos estão preenchidos!')

                    }
                });
            }

        
        return false;
    });
    
});
</script>

<script>
//Editar Atendimento -----------------------------------------------------------
$(document).on('click', '#botao-editar', function(){
    $("#modalEditar").modal('show');

    $("#registro_Cliente").val($(this).parent().parent().find(".registro").text());
    $("#descricao_Atendimento").val($(this).parent().parent().find(".descricao").text());
    $("#id").val( $(this).parent().parent().find(".id").text());

    var tipoCliente = "<?php echo $profissional?>",
        localizado = null;
    // loop que percorre cada uma das opções
    // e verifica se a frase da opção confere com o
    // valor de fase que está sendo procurado
    $('#tipo_Cliente option').each(function() {
      // se localizar a frase, define o atributo selected
      if($(this).text() == tipoCliente) {
        $(this).attr('selected', true);
      }
    });
    $("#formulario").submit(function(){
        var tCliente = $("#tipo_Cliente").val()
        var tSolicitacao = $("#tipo_Solicitacao").val()
        var tAtendimento = $("#tipo_Atendimento").val()
        var descricao = $("#descricao_Atendimento").val()
        var registro = $("#registro_Cliente").val()
        var id = $("#id").val()
        
        
        //var resultado = tCliente +'\n'+ tSolicitacao + '\n'+ tAtendimento + '\n'+descricao+ '\n'+registro+ '\n'+id;
        //alert(resultado)

        if (tCliente == "" || tSolicitacao == "" || tAtendimento == "" || descricao == "" ){
                alert("Preencha todos os campos!");
            } else {
                $.ajax({
                    url:"http://10.150.150.201/Historico_Atendimento/app/Controller/Controller.php",
                    type: "POST",
                    data: {'dados':{
                        tipo: 'editar',
                        registro: registro,
                        id: id,
                        cliente: tCliente,
                        solicitacao: tSolicitacao,
                        atendimento: tAtendimento,
                        descricao: descricao
                    }},
                    success: function(response){
                      //alert(response)
                      $('#modalEditar').modal('hide');
                      $('#myModal').modal('show');
                      $("#corpoTexto").text(response)
                      
                    },
                    error: function(error){
                      $('#myModal').modal('show');
                      $('#myModalHeader').css('background','#FF0000');
                      $("#corpoTexto").text('Erro!. Verifique se os campos estão preenchidos!')

                    }
                });
            }

        
        return false;
    });
       
});
   
</script>

<script>
$(document).on('click', '#btnOk', function(){
    location.reload();
});
$(document).on('click', '#fechar', function(){
    location.reload();
});

$(document).on('click', '#botao-detalhes', function(){
    $("#modalDetalhes").modal('show');

});


//-----------------------------------------------------------------

$(document).on('click', '#excluirCancelar', function(){
    location.reload();

});

</script>


<!--listar-->
<script>
$(document).ready(function(){
    //$('#corpo-tabela').empty(); //Limpando a tabela
    $.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json', //Definimos o tipo de retorno
		url: 'http://10.150.150.201/Historico_Atendimento/app/Controller/listarController.php?registro='+'<?php echo $registro?>',//Definindo o arquivo onde serão buscados os dados
		success: function(response){
			for(var i=0;response.length>i;i++){
				//Adicionando registros retornados na tabela
            $('#corpo-tabela').append('<tr><td class="id" style="display:none">'+response[i].id_historico_atendimento_cliente+
            '</td><td class="tdAtendimento">'+response[i].data_atendimento+
            '</td><td class="solicitacao" >'+response[i].solicitacao+'</td><td class="atendimento">'+response[i].atendimento+
            '</td><td class="cliente">'+response[i].cliente+'</td><td class="registro">'+response[i].registro_cliente+
            '</td><td class="descricao"  style="display:none">'+response[i].descricao_do_atendimento+'</td><td>'+
            '<button class="btn btn-primary btn-sm" id="botao-detalhes">Detalhes</button><button class="btn btn-warning btn-sm" id="botao-editar">Editar</button><button class="btn btn-danger btn-sm" id="botao-excluir">Excluír</button>'+
            '</td></tr>');
            }
		},
        error: function(){
            $(".alert").css('display','block')
        }
	});

});
</script>


<!--pega o tipo de profissional e adiciona ao Select-->
<script>
$(document).ready(function(){
    var frase = "<?php echo $profissional?>",
        localizado = null;

    // loop que percorre cada uma das opções
    // e verifica se a frase da opção confere com o
    // valor de fase que está sendo procurado
    $('#tipoCliente option').each(function() {
      // se localizar a frase, define o atributo selected
      if($(this).text() == frase) {
        $(this).attr('selected', true);
      }
    });
});
</script>


<!--MOSTRAR DADOS NO MODAL DETALHES-->
<script>
$(document).on("click", "#botao-detalhes", function(){
       
        var registro = $(this).parent().parent().find(".registro").text();
        var cliente = $(this).parent().parent().find(".cliente").text()
        var solicitacao = $(this).parent().parent().find(".solicitacao").text();
        var descricao = $(this).parent().parent().find(".descricao").text();
        var atendimento = $(this).parent().parent().find(".atendimento").text();
        var data = $(this).parent().parent().find(".tdAtendimento").text();
        
        $('#registroCliente').html(registro);
        $('#descricaoCliente').html(descricao);
        $('#tituloCliente').html(cliente);
        $('#solicitacaoCliente').html(solicitacao);
        $('#atendimentoCliente').html(atendimento);
        $('#dataAtendimento').html(data);

    
        });
</script>

<!--EXCLUIR LINHA-->
<script>
$(document).on("click", "#botao-excluir", function(){

   var idAtendimento = $(this).parent().parent().find(".id").text();
   $("#btnExcluir").modal('show');
    //alert(idAtendimento);
    $('#excluir').on('click',function(){
        $.ajax({
            url:"http://10.150.150.201/Historico_Atendimento/app/Controller/Controller.php",
            type: "POST",
            data: {'dados':{
            tipo: 'deletar',
            id: idAtendimento}},
            success: function(response){
                $('#btnExcluir').modal('hide'); 
                $('#myModal').modal('show');
                $("#corpoTexto").text('Atendimento Excluído!')
			
		    },
            error: function(erro){
                alert('erro');
            }

	    });
    });
   
});
</script>



</body>
</html>