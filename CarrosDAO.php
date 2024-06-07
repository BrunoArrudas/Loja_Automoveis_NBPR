<?php

class CarrosDAO {
    public $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getById($id){

        try{
            $sql = "SELECT * FROM info_carros WHERE id = :id";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $carro = $stmt->fetch(PDO::FETCH_ASSOC);
            return $carro ? new Carros($id['id'],
                                       $imagem_carro['imagem_carro'],
                                       $modelo_carro['modelo_carro'],
                                       $ano['ano'],
                                       $cidade['cidade'],
                                       $kilometragem['kilometragem'],
                                       $motorizacao['motorizacao'],
                                       $cambio['cambio'],
                                       $carroceria['carroceria'],
                                       $combustivel['combustivel'],
                                       $cor['cor'],
                                       $descricao_opcionais['descricao_opcionais'],
                                       $informacao['informacao'],
                                       $email['email'],
                                       $telefone['telefone'])
         } 


    



}




?>