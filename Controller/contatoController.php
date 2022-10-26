<?php
//inicia a sessão
session_start();

//1. Cadastrar 
if  (isset($_POST['cadastrar'])) {
    cadastrarHorario();

    //2. 
}

// Functions 
function cadastrarHorario()
{

     //Inclui os arquivos (Model)
     include_once "../Model/Contato.php";
     include_once "../Model/ContatoService.php";

     //Retorno do JSON (validação)
     header('Content-Type: application/json');

     //Guarda os dados informados no formulario
     $responsavel    = $_POST['responsavel'];
     $saida          = $_POST['saida'];
     $entrada        = $_POST['entrada'];
     $nome           = $_POST['nome']; 
     $Raça           = $_POST['Raça']; 

     // Cria os objetos das classes Contato e ContatoService
    $contato = new Contato();
    $service = new ContatoService();

     //preencher o objeto informados
     $contato->nome            = $nome;
     $contato->responsavel     = $responsavel;
     $contato->saida           = $saida;
     $contato->entrada         = $entrada;
     $contato->Raça            = $Raça;
     
     //Envia o objeto para efeituar o cadastro
     $response = $service->cadastrarHorarioService($contato);

     //Verifica o tipo de retorno
     if ($response['sucesso']) {
        //mostrar a mesnagem de sucesso
        print json_encode(array(
            'mensagem' => $response['mensagem'],
            'codigo'   => 1));
        
        exit();

     } else {
        //mostrar a mesnagem de ERRO
        print json_encode(array(
            'mensagem' => $response['mensagem'],
            'campo'    => $response['campo'],
            'codigo'   => 0));

        exit();

     }

}