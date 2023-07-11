<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\RequestOptions;
use Illuminate\View\View;
class BeneficioController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

        return view('beneficio')->with(['title'=>'Benefícios']);
    }

    public function enviarParaAPI()
{   
    $data = array(
                "nomeTermo"=> "Termo de Adesão",
                "tipoOpcao"=> 5,
                "nomePatrocinadora"=> "Sebrae",
                "emailPatrocinadora"=> "sebrae.",
                "nomeParticipante"=> "João Silva",
                "cpf"=> "628.885.560-06",
                "emailParticipante"=> "joaosilva@gmail.com",
                "nomeResponsavel"=> "CADASTRO",
                "emailResponsavel"=> "beneficio@sebraeprev.com.br",
                "residenteExterior"=> "N",
                "nNif"=> "25245673434",
                "dataSaida"=> null,
                "isentoIr"=> null,
                "arquivoTermo"=> "sgsfrfdfdsgdfgdsg",
                "identidadeParticipante"=> "5124135",
                "comprovanteBancario"=> "sim",
                "rescisaoContratual"=> "nao",
                "certidaoObitoParticipante"=> "nao",
                "identificacaoRequerentes"=> "nao",
                "cessacaoAuxilioDoenca"=> "nao",
                "cartaConcessaoINSS"=> "nao",
                "certidaoCasamento"=> "sim"
            );
            

    $client = new Client([
        'verify' => false
    ]);
    $headers = ['headers' => ['User-Agent' => 'testing/1.0','Accept'     => 'application/json','X-Foo'      => ['Bar', 'Baz']]];
    $url = "https://fusionhmg.sebraeprevidencia.com.br/fusion/services/termo-opcao-beneficio/novo";
    $response = $client->post($url,['json' =>$data]);
    // $response = $request->send();
    // echo '<pre>' . var_export($response->getStatusCode(), true) . '</pre>';
    // $resposta = json_decode(var_export($response->getBody()->getContents(), true),true);
    $respostas = json_decode($response->getBody()->getContents(),true);

    echo '<div class="flex-center position-ref full-height" style="margin-top:10%">';
    echo '<div class="container">';
    foreach ($respostas as $r) {
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">';
        echo '<div class="alert alert-success" role="alert">'. $r .'</div>';
    }
   
    echo '<a href="/" class="btn btn-warning   mb-3">Voltar</a>';
    echo '</div>';
    echo '</div>';
 }

}

