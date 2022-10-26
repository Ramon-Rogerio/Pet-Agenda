<?php
class conexaoBD
{
    public function abrirConexaoDB()
    {
        // Dados para a conexão (localhost)
        $banco = "pet_php";
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";

        //conexao
        $conexao = mysqli_connect($servidor, $usuario, $senha);
    
        //seleciona o banco
        mysqli_select_db($conexao, $banco);


        //força os dados a serem gravados no BD com o encoding correto
        mysqli_query($conexao, "SET NAMES 'utf8'");
        mysqli_query($conexao, "SET character_set_connection=utf8");
        mysqli_query($conexao, "SET character_set_client=utf8");
        mysqli_query($conexao, "SET character_set_results=utf8");
    
        //encerra a tentativa se der erro
         if (mysqli_connect_errno()) {
            die(mysqli_connect_errno());
         }

         return $conexao;
    }

    public function fecharConexaoBD ($conexao)
    {
        mysqli_close($conexao);
    }
}