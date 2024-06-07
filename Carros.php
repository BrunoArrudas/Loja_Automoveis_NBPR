<?php

class Carros
{
    public $id;
    public $imagem_carro;
    public $modelo_carro;
    public $ano;
    public $cidade;
    public $kilometragem;
    public $motorizacao;
    public $cambio;
    public $carroceria;
    public $combustivel;
    public $cor;
    public $descricao_opcionais;
    public $informacao;
    public $email;
    public $telefone;

    public function __construct($id,$imagem_carro,$modelo_carro,$ano,$cidade,$kilometragem,
    $motorizacao,$cambio,$carroceria,$combustivel,$cor,$descricao_opcionais,$informacao,$email,$telefone)
    {
        $this->id = $id;
        $this->imagem_carro = $imagem_carro;
        $this->modelo_carro = $modelo_carro;
        $this->ano = $ano;
        $this->cidade = $cidade;
        $this->kilometragem = $kilometragem;
        $this->motorizacao = $motorizacao;
        $this->cambio = $cambio;
        $this->carroceria = $carroceria;
        $this->combustivel = $combustivel;
        $this->cor = $cor;
        $this->descricao_opcionais = $descricao_opcionais;
        $this->informacao = $informacao;
        $this->email = $email;
        $this->telefone = $telefone;
    }



}