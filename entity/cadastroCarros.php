<?php

class Carros
{
    private $id;
    private $imagem_carro;
    private $modelo_carro;
    private $ano;
    private $cidade;
    private $kilometragem;
    private $motorizacao;
    private $cambio;
    private $carroceria;
    private $combustivel;
    private $cor;
    private $descricao_opcionais;
    private $informacao;
    private $email;
    private $telefone;

    public function __construct($id, $imagem_carro, $modelo_carro, $ano, $cidade, $kilometragem,
                                $motorizacao, $cambio, $carroceria, $combustivel, $cor, $descricao_opcionais, 
                                $informacao, $email, $telefone)
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

    
    public function getId() { return $this->id; }
    public function getImagem() { return $this->imagem_carro; }
    public function getModelo() { return $this->modelo_carro; }
    public function getAno() { return $this->ano; }
    public function getCidade() { return $this->cidade; }
    public function getKilometragem() { return $this->kilometragem; }
    public function getMotorizacao() { return $this->motorizacao; }
    public function getCambio() { return $this->cambio; }
    public function getCarroceria() { return $this->carroceria; }
    public function getCombustivel() { return $this->combustivel; }
    public function getCor() { return $this->cor; }
    public function getDescricao() { return $this->descricao_opcionais; }
    public function getInformacao() { return $this->informacao; }
    public function getEmail() { return $this->email; }
    public function getTelefone() { return $this->telefone; }

    
    public function setImagem($imagem_carro) { $this->imagem_carro = $imagem_carro; }
    public function setModelo($modelo_carro) { $this->modelo_carro = $modelo_carro; }
    public function setAno($ano) { $this->ano = $ano; }
    public function setCidade($cidade) { $this->cidade = $cidade; }
    public function setKilometragem($kilometragem) { $this->kilometragem = $kilometragem; }
    public function setMotorizacao($motorizacao) { $this->motorizacao = $motorizacao; }
    public function setCambio($cambio) { $this->cambio = $cambio; }
    public function setCarroceria($carroceria) { $this->carroceria = $carroceria; }
    public function setCombustivel($combustivel) { $this->combustivel = $combustivel; }
    public function setCor($cor) { $this->cor = $cor; }
    public function setDescricao($descricao_opcionais) { $this->descricao_opcionais = $descricao_opcionais; }
    public function setInformacao($informacao) { $this->informacao = $informacao; }
    public function setEmail($email) { $this->email = $email; }
    public function setTelefone($telefone) { $this->telefone = $telefone; }
}
