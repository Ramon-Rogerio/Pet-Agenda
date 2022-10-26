<?php

class ContatoDAO
{
    public function cadastrarContatoDAO($contato)
    {
        // arquivo de conexaoBD

        // criar o objeto da classe de conecxãobd

        // abre a conexão

        // montar a query (cadastro)


        $sql = "INSERT INTO pet (
            nome, 
            responsavel, 
            Raça, 
            entrada, 
            saida
            
            )
              VALUES
              (?, ?, ?, ?, ?)";

              // CRIAR O PREPARED STATEMANT
              //$stmt = $conexao->prepare($sql);
    }
}