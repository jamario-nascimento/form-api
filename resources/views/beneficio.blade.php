<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="author" content="Jamário Batista Nascimento">
        <title>Formulário de solicitação de benefcio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #666;
                color: #acacac;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .sub {
                font-size: 44px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .form-label{
                color:#fff;
                text-align:left !important;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                SEBRAE
                </div>
                <div class="sub" style="margin-top:-50px;margin-bottom:60px;">
                Formulário de solicitação de benefcio
                </div>


            <form method="POST" action="{{ route('enviar.store') }}" class="container" style="text-align: left;">
                    @csrf
                <div class="row">
                <div  class="col-md-6">
                <div class="row g-3">
                            <div class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">Nome Termo</label>
                                <input type="text" class="form-control" id="fnomeTermo"  name="nomeTermo" value="Termo de Adesão" placeholder="Example input placeholder" readonly>
                            </div>
                            <div  class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">Tipo Opção</label>
                                <input type="text" class="form-control" id="tipoOpcao"  name="tipoOpcao" value="5" placeholder="Example input placeholder" readonly>
                            </div>
                            <div  class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">Nome Patrocinadora</label>
                                <input type="text" class="form-control" id="nomePatrocinadora"  name="nomePatrocinadora" value="sebrae.com.br" placeholder="Example input placeholder" readonly>
                            </div>
                            <div  class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">E-mail Patrocinadora</label>
                                <input type="text" class="form-control" id="emailPatrocinadora"  name="emailPatrocinadora" value="sebraego.com.br" placeholder="Example input placeholder" readonly>
                            </div>
                            <div  class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">Nome Participante</label>
                                <input type="text" class="form-control" id="nomeParticipante"  name="nomeParticipante" value="" placeholder="Nome Participante" >
                            </div>
                            <div class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">cpf</label>
                                <input type="number" class="form-control" id="cpf"  name="cpf" value="" placeholder="cpf somente números" >
                            </div>
                            <div class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">Email Participante</label>
                                <input type="text" class="form-control" id="emailParticipante"  name="emailParticipante" value="" placeholder="Email Participante" >
                            </div>
                            <div  class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">Nome Responsável</label>
                                <input type="text" class="form-control" id="nomeResponsavel"  name="nomeResponsavel" value="Joaquim Mistress" placeholder="Example input placeholder" readonly>
                            </div>
                            <div  class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">E-mail Responsavel</label>
                                <input type="text" class="form-control" id="emailResponsavel"  name="emailResponsavel" value="beneficio@sebraeprev.com.br" placeholder="Example input placeholder" readonly>
                            </div>
                            <div  class="col-md-3">
                                <label for="formGroupExampleInput" class="form-label">Residente Exterior</label>
                                <input type="text" class="form-control" id="residenteExterior"  name="residenteExterior" value="N" placeholder="Example input placeholder" readonly>
                            </div>
                            <div  class="col-md-3">
                                <label for="formGroupExampleInput" class="form-label">nNif</label>
                                <input type="text" class="form-control" id="nNif"  name="nNif" value="25245673434" placeholder="Example input placeholder" readonly>
                            </div>
                        </div>
                    </div>

                    <div  class="col-md-6">
                <div class="row g-3">
                            <div class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">Data Saída</label>
                                <input type="text" class="form-control" id="dataSaida"  name="dataSaida" value="null" placeholder="Example input placeholder" readonly>
                            </div>
                            <div  class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">isentoIr</label>
                                <input type="text" class="form-control" id="isentoIr"  name="isentoIr" value="null" placeholder="Example input placeholder" readonly>
                            </div>
                            <div  class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">Arquivo Termo</label>
                                <input type="text" class="form-control" id="arquivoTermo"  name="arquivoTermo" value="sebrae.pdf" placeholder="Example input placeholder" readonly>
                            </div>
                            <div  class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">identidade Participante</label>
                                <input type="text" class="form-control" id="identidadeParticipante"  name="identidadeParticipante" value="5124135" placeholder="Example input placeholder" readonly>
                            </div>

                            <div  class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">Comprovante Bancario</label>
                                <input type="text" class="form-control" id="comprovanteBancario"  name="comprovanteBancario" value="sim" placeholder="Comprovante Bancario" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">Rescisao Contratual</label>
                                <input type="number" class="form-control" id="rescisaoContratual"  name="rescisaoContratual" value="nao" placeholder="nao" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">Certidao Obito Participante</label>
                                <input type="text" class="form-control" id="certidaoObitoParticipante"  name="certidaoObitoParticipante" value="nao" placeholder="Certidao Obito Participante" readonly>
                            </div>
                            <div  class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">Identificacao Requerentes</label>
                                <input type="text" class="form-control" id="identificacaoRequerentes"  name="identificacaoRequerentes" value="nao" placeholder="dentificacao Requerentes" readonly>
                            </div>
                            <div  class="col-md-6">
                                <label for="formGroupExampleInput" class="form-label">Cessacao Auxilio Doenca</label>
                                <input type="text" class="form-control" id="cessacaoAuxilioDoenca"  name="cessacaoAuxilioDoenca" value="nao" placeholder="Cessacao Auxilio Doenca" readonly>
                            </div>
                            <div  class="col-md-4">
                                <label for="formGroupExampleInput" class="form-label">carta Concessao INSS</label>
                                <input type="text" class="form-control" id="cartaConcessaoINSS"  name="cartaConcessaoINSS" value="nao" placeholder="Example input placeholder" readonly>
                            </div>
                            <div  class="col-md-2">
                                <label for="formGroupExampleInput" class="form-label">certidaoCasamento</label>
                                <input type="text" class="form-control" id="certidaoCasamento"  name="certidaoCasamento" value="sim" placeholder="Example input placeholder" readonly>
                            </div>
                        </div>
                    </div>

                </div>
      <br/><br/>
                <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success btn-lg  mb-3">Solicitar</button>
                    </div>
                    </div>
             </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
