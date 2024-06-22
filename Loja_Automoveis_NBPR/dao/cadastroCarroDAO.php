<?php

include_once 'config/Database.php';
include_once 'entity/cadastroCarros.php';

class CarrosDAO {    
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getById($id) {
        try {
            $sql = "SELECT * FROM info_carros WHERE id = :id";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $carro = $stmt->fetch(PDO::FETCH_ASSOC);
            return $carro ? new Carros($id['id'],
                                       $carro['imagem_carro'],
                                       $carro['modelo_carro'],
                                       $carro['ano'],
                                       $carro['cidade'],
                                       $carro['kilometragem'],
                                       $carro['motorizacao'],
                                       $carro['cambio'],
                                       $carro['carroceria'],
                                       $carro['combustivel'],
                                       $carro['cor'],
                                       $carro['descricao_opcionais'],
                                       $carro['informacao'],
                                       $carro['email'],
                                       $carro['telefone']) : null;
         } catch (PDOException $e){
            return null;
         }
    }

    public function getAll(){
        try{
            $sql = "SELECT * FROM info_carros";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $carro = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function($carro){
                return new Carros($carro['id'],
                $carro['imagem_carro'],
                $carro['modelo_carro'],
                $carro['ano'],
                $carro['cidade'],
                $carro['kilometragem'],
                $carro['motorizacao'],
                $carro['cambio'],
                $carro['carroceria'],
                $carro['combustivel'],
                $carro['cor'],
                $carro['descricao_opcionais'],
                $carro['informacao'],
                $carro['email'],
                $carro['telefone']);
            }, $carro);

        }catch (PDOException $e){
            return [];
        }
    }


    public function create($carro){
        try{
            $sql = "INSERT INTO info_carros(imagem_carro,modelo_carro,ano,cidade,kilometragem,motorizacao,cambio,carroceria,combustivel,cor,descricao_opcionais,informacao,email,telefone)
                    VALUES (:id,:imagem_carro,:modelo_carro,:ano,:cidade,:kilometragem,:motorizacao,:cambio,:carroceria,:combustivel,:cor,:descricao_opcionais,:informacao,:email,:telefone) ";
            $stmt = $this->db->prepare($sql);
            
            $imagem_carro = $carro->getImagem();
            $modelo_carro = $carro->getModeloCarro();
            $ano = $carro->getAno();
            $cidade = $carro->getCidade();
            $kilometragem = $carro->getKilometragem();
            $motorizacao = $carro->getMotorizacao();
            $cambio = $carro->getCambio();
            $carroceria = $carro->getCarroceria();
            $combustivel = $carro->getCombustivel();
            $cor = $carro->getCor();
            $descricao_opcionais = $carro->getDescricao();
            $informacao = $carro->getInformacao();
            $email = $carro->getEmail();
            $telefone = $carro->getTelefone();
            

            $stmt->bindParam(':imagem_carro', $imagem_carro);
            $stmt->bindParam(':modelo_carro', $modelo_carro);
            $stmt->bindParam(':ano', $ano);
            $stmt->bindParam(':cidade', $cidade);
            $stmt->bindParam(':kilometragem', $kilometragem);
            $stmt->bindParam(':motorizacao', $motorizacao);
            $stmt->bindParam(':cambio', $cambio);
            $stmt->bindParam(':carroceria', $carroceria);
            $stmt->bindParam(':combustivel', $combustivel);
            $stmt->bindParam(':cor', $cor);
            $stmt->bindParam(':descricao_opcionais', $descricao_opcionais);
            $stmt->bindParam(':informacao', $informacao);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->execute();

            return true;

        } catch (PDOException $e) {
            return false;
        }
    }

    public function update($carro) {
        try {
            $sql = "UPDATE info_carros SET imagem_carro = :imagem_carro, 
    modelo_carro = :modelo_carro, ano = :ano,cidade = :cidade, kilometragem = :kilometragem,
    motorizacao = :motorizacao, cambio = :cambio, carroceria = :carroceria, combustivel = :combustivel,
    cor = :cor, descricao = :descricao_opcionais, informacao = :informacao, email = :email,
    telefone = :telefone WHERE id = :id";

            $stmt = $this->db->prepare($sql);

            $imagem_carro = $carro->getImagem();
            $modelo_carro = $carro->getModeloCarro();
            $ano = $carro->getAno();
            $cidade = $carro->getCidade();
            $kilometragem = $carro->getKilometragem();
            $motorizacao = $carro->getMotorizacao();
            $cambio = $carro->getCambio();
            $carroceria = $carro->getCarroceria();
            $combustivel = $carro->getCombustivel();
            $cor = $carro->getCor();
            $descricao_opcionais = $carro->getDescricao();
            $informacao = $carro->getInformacao();
            $email = $carro->getEmail();
            $telefone = $carro->getTelefone();
            

            $stmt->bindParam(':imagem_carro', $imagem_carro);
            $stmt->bindParam(':modelo_carro', $modelo_carro);
            $stmt->bindParam(':ano', $ano);
            $stmt->bindParam(':cidade', $cidade);
            $stmt->bindParam(':kilometragem', $kilometragem);
            $stmt->bindParam(':motorizacao', $motorizacao);
            $stmt->bindParam(':cambio', $cambio);
            $stmt->bindParam(':carroceria', $carroceria);
            $stmt->bindParam(':combustivel', $combustivel);
            $stmt->bindParam(':cor', $cor);
            $stmt->bindParam(':descricao_opcionais', $descricao_opcionais);
            $stmt->bindParam(':informacao', $informacao);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function  delete($id) {
        try {
            $sql = "DELETE FROM info_carros WHERE id = :id";
            
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}

?>