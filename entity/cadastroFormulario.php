<?php

class Formulario
{
    private $id;
    private $nomeFormulario;
    private $emailFormulario;
    private $celularFormulario;
    private $cidadeFormulario;
    private $estadoFormulario;
   

    public function __construct($id, $nomeFormulario, $emailFormulario, $celularFormulario, $cidadeFormulario, $estadoFormulario)
    {
        $this->id = $id;
        $this->nomeFormulario = $nomeFormulario;
        $this->celularFormulario = $celularFormulario;
        $this->emailFormulario = $emailFormulario;
        $this->cidadeFormulario = $cidadeFormulario;
        $this->estadoFormulario = $estadoFormulario;
    }

    
    public function getId() { return $this->id; }
    public function getNomeFormulario() { return $this->nomeFormulario; }
    public function getEmailFormulario() { return $this->emailFormulario; }
    public function getCelularFormulario() { return $this->celularFormulario; }
    public function getCidadeFormulario() { return $this->cidadeFormulario; }
    public function getEstadoFormulario() { return $this->estadoFormulario; }

    
    public function setNomeFormulario($nomeFormulario) { $this->nomeFormulario = $nomeFormulario; }
    public function setEmailFormulario($emailFormulario) { $this->emailFormulario = $emailFormulario; }
    public function setCelularFormulario($celularFormulario) { $this->celularFormulario = $celularFormulario; }
    public function setCidadeFormulario($cidadeFormulario) { $this->cidadeFormulario = $cidadeFormulario; }
    public function setEstadoFormulario($estadoFormulario) { $this->$estadoFormulario = $estadoFormulario; }

}
