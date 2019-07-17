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


    <title>HISTÓRICO DE ATENDIMENTO</title>
</head>
<body>
    <div id="corpo" class="fixed-top">
        <div id="titulo">
            <h3>HISTÓRICO DE ATENDIMENTO</h3>
        </div>
    </div>


    <div id="container">

            <div id="item0" class="card" style="margin-top: 15px; margin-bottom:15px; width: 14rem; border-radius: 11px;">
                    <div class="card-header ">
                    <h6> foto</h6>
                    </div>
                    <div id="cabecalho" class="card-body">
                        <div id="foto"><img src="imagens/usu.jpg"  ></div>
                    </div>
            </div>


        <div id="item1" class="card" style="margin-top: 15px; margin-bottom:15px; width: 55rem; border-radius: 11px;">
            <div class="card-header">
                <h6>NOVO ATENDIMENTO</h6>
            </div>
            <div class="card-body">
              
                    <form id="form">
                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label >Tipo de Cliente</label>
                                          <select name="tipoCliente" class="form-control"  id="campoConfirmado">
                                              <option value="selecionar">Selecione...</option>			
                                              <option name="empresa">Empresa</option>
                                              <option name="profissional">Profissional</option>
                                              <option name="NaoRegistrado">Profissional Não Resgistrado</option>
                                          </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                          <label >Tipo de Atendimento</label>
                                          <select name="tipoAtendimento" class="form-control"  id="campoConfirmado">
                                              <option value="selecionar">Selecione...</option>			
                                              <option name="presencial">Presencial</option>
                                              <option name="telefone">Telefone</option>
                                              <option name="email">E-mail</option>
                                          </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                          <label >Tipo de Solicitação</label>
                                          <select name="tipoSolicitacao" class="form-control"  id="campoConfirmado">
                                              <option value="selecionar">Selecione...</option>			
                                              <option name="boleto">Emissão boleto</option>
                                              <option name="parcelamento">parcelamento/acordo</option>
                                              <option name="I_debito">informações de débito</option>
                                              <option name="intencoes">intenções</option>
                                              <option name="intencoes">Outros</option>
                                          </select>
                                    </div>

                                    </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-12">                                     
                                            <label>Descrição</label>
                                            <textarea name="descricao" class="form-control" id="descricao" ></textarea>
                                        </div>
                                    </div>

                           
                                    <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" name="CadParticipante" id="btnCadastrar" class="btn btn-primary">Registrar Atendimento</button>
                                            </div>
                                    </div>
                    </form>  
           
             </div>
        </div>

        <div id="item2" class="card" style="margin-top: 15px; margin-bottom:15px; width: 40rem; border-radius: 11px;">
            <div class="card-header">
               <h6> ATENDIMENTOS ANTERIORES</h6>
            </div>
            <div class="card-body">
            <textarea name="" id="" cols="30" rows="10">
            1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdssssssssfjaçlsdkdfjçalskdfjçalskdjfçalskf
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdsssssssssssssfjaçlsdkdfjçalskdfjçalskdjfç
                1 çalsdkdfjassssssssssçlsdkdfjçalskdfjçalskdjfçals
                1 çalsdkdfsssssssssssssssjaçlsdkdfjçalskdfjçalskdj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfjs
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfjs
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfjs
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfjs
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfjs
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfjs
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfjs
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfjs
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfjs
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
                1 çalsdkdfjaçlsdkdfjçalskdfjçalskdjfçalskfjçalskfj
            </textarea>
                

             </div>
        </div>
    </div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/scroll.js"></script>
<script src="js/cadastrar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>    
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>