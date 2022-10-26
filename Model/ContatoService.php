<?php
class ContatoService
{
    public function cadastrarHorarioService($contato)
    {
        //verifica se os campos obrigatorios foram preenchidos

        
       $campo = $this->verificarCampo($contato->nome, "nome");
       if(!$campo['sucesso']) { return $campo;};
       
       $campo = $this->verificarCampo($contato->responsavel, "responsavel");
       if(!$campo['sucesso'])  { return $campo;};
       
       $campo = $this->verificarCampo($contato->Raça, "Raça");
       if(!$campo['sucesso'])  { return $campo;};

       $campo = $this->verificarCampo($contato->entrada, "entrada");
       if(!$campo['sucesso']) { return $campo;};

       $campo = $this->verificarCampo($contato->saida, "saida");
       if(!$campo['sucesso'])  { return $campo;};


       //buscar o cliente
       //       $resultado = $this->buscarContato($contato);


       //se o cliente ja estiver registrado 

       // if($resultado != null){
       //    return array (
        //      "mensagem" => "Este nome já esta cadastrado ",
        //    "campo" => "#nome",
          //  "sucesso" => false
        //);


    //   }

    }

    private function verificarCampo($valorCampo,  $nomeCampo)
    {
        //verifica se o campo foi preenchido
        if (strcmp($valorCampo, "") == 0) {
            return array (
                'mensagem' =>  "Preencha o campo $nomeCampo",
                'campo' => "#$nomeCampo",
                'sucesso' => false
            );
        }
        return array (
            "sucesso" => true

        );
    }
}