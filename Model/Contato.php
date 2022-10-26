<?php
class Contato
{
    //Atribultos da classe 

    private $id;
    private $nome;
    private $responsavel;
    private $saida;
    private $entrada;
    private $Raça;

    //Métodos Get e Set
    public function __get($valor)
    {
       
        return $this->$valor;

    }

    public function __set($atributo, $valor)
    {

        $this->$atributo = $valor;

    }
}