<?php

class cadastroformulario
{
    private $id;
    private $nome;
    private $email;
    private $celular;
    private $cidade;
    private $uf;

    public function __construct($id, $nome, $email, $celular, $cidade, $uf)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->celular = $celular;
        $this->cidade = $cidade;
        $this->uf = $uf;
}

    public function getId() { return $this->id; }
    public function getNome() {return $this->nome;}
    public function getEmail() {return $this->email;}
    public function getCelular() {return $this->celular;}
    public function getCidade() {return $this->cidade;}
    public function getUf() {return $this->uf;}



   public function setId($id) { $this->id = $id; }
   public function setNome($nome) { $this->nome = $nome; }
   public function setEmail($email) { $this->email = $email; }
   public function setCelular($celular) { $this->celular = $celular;}
   public function setCidade($cidade) { $this->cidade = $cidade; }
   public function setUf($uf) { $this->uf = $uf; }
}
?>