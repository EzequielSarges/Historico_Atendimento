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


    <title>HISTÓRICO DE ATENDIMENTO</title>
</head>
<body>
    <div id="corpo" class="fixed-top">
        <div id="titulo">
            <h3>HISTÓRICO DE ATENDIMENTO</h3>
        </div>
    </div>

<div id = "caixa1">

<div id="item0" class="card">
    <div class="card-header">
    <h5>FOTO</h5>
    </div>
    <div class="card-body"> 
        <div id="cabecalho" class="form-group col-md-6" >
            <div id="foto"><img src="imagens/usu.jpg"></div>
        </div>
    </div>
    <h5>NOME CLIENTE</h5>
</div>
   
    <div id="item1" class="card">
                <div class="card-header">
                    <h5>NOVO ATENDIMENTO</h5>
                </div>
                
                <div class="card-body">    
                        
                        <div id = 'form'>
                            <form id="formario">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label > Nº Registro</label>
                                            <input type="text" name ='registro' class="form-control" id="registro" >
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label >Tipo Cliente</label>
                                                <select name="tipoCliente" class="form-control"  id="tipoCliente">
                                                    <option value="selecionar">Selecione...</option>			
                                                    <option name="1">Profissional</option>
                                                    <option name="2">Empresa</option>
                                                    <option name="3">Não Registrado</option>
                                                </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label >Tipo de Solicitação </label>
                                                            <select name="tipoSolicitacao" class="form-control"  id="tipoSolicitacao">
                                                                <option value="selecionar">Selecione...</option>			
                                                                <option name="1">Emissão de Boleto</option>
                                                                <option name="2">Parcelamento/Acordos</option>
                                                                <option name="3">Intenções</option>
                                                                <option name="4">Informações de débito</option>
                                                                <option name="5">Outros</option>
                                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label >Tipo de Atendimento</label>
                                                            <select name="tipoAtendimento" class="form-control"  id="tipoAtendimento">
                                                                <option value="selecionar">Selecione...</option>			
                                                                <option name="1">Telefônico</option>
                                                                <option name="2">Presencial</option>
                                                                <option name="3">E-mail</option>
                                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label >Descrição:</label>
                                            <textarea name="descricao" id="descricao" cols="73" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" name="btnCadastrar" id="btCadastrar" class="btn btn-success" >Cadastrar</button>
                                            </div>
                                    </div>
                            </form>  
                        </div>
                        
                </div>
    </div>  
</div>
        
        <div id="item2" class="card">
        
                <div class="card-header">
                    <h5> ATENDIMENTOS ANTERIORES</h5>
                </div>
                <div class="card-body">
                    <div id='tabelaDiv' style="width:100%; height: 250px;">
                        <table id="tabela" class="table table-outline-darger table-hover " style="width:100%">
                        <thead class="thead-dark">
                                <tr id="cabecalho-tabela">
                                    <th>Data do Atendimento</th>
                                    <th>Tipo de Solicitação</th>
                                    <th>Tipo de Atendimento</th>
                                    <th>Tipo de Cliente</th>
                                    <th>Nº Registro</th>
                                    <th>Descrição</th>
                                    <th>Ação</th>
                                
                                    
                                </tr>
                            </thead>
                            <tbody id="corpo-tabela">
                                    <!--Será oreenchido dinamicamente com JQUERY-->
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>
                                <tr>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                    <td>02/02/2011</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
        </div>  

 <!--Modal ALERTA-->
<div class='modal fade' id='#btnModal' tabindex='-1' role='dialog' aria-labelledby='btnModal' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header bg-danger'>
        <h5 class='modal-title' id='#btnModal'>Excluir Participante!</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-danger' id='botao-excluir'>Excluir</button>
        <button type='button' class='btn btn-success' data-dismiss='modal'>Cancelar</button>
      </div>
    </div>
  </div>
</div>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/scroll.js"></script>
<script src="js/cadastrar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>    
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script>
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
        }
    },			
			
			});
		} );
</script>

</body>
</html>