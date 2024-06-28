<?php

include_once 'config/Database.php';
include_once 'entity/cadastroFormulario.php';
include_once 'dao/cadastroFormularioDAO.php';

class cadastroFormularioDAO {
    private $db;
    public function __construct()
    {
        $this->db = Database::getInstance();

    }

    public function getById($id) {
        try {
            $sql = "SELECT * FROM formulario WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $formulario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $formulario ?  new cadastroFormulario($formulario['id'],
                                                        $formulario['nome'],
                                                        $formulario['celular'],
                                                        $formulario['email'],
                                                        $formulario['cidade'],
                                                        $formulario['estado']) : null; 
            } catch (PDOException $e){
              return null;
            }
        }  
        
        public function getAll(){
            try {
                $sql = "SELECT * FROM tbl_formulario";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $carro = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return array_map(function($formulario) {
                    return new formulario ($formulario['id'],
                    $formulario['nome'],
                    $formulario['celular'],
                    $formulario['email'],
                    $formulario['cidade'],
                    $formulario['estado']);}, $formulario);

                }catch (PDOException $e){
                    return [];
                }
             }

        public function create ($formulario) {
            try {
                $sql = "INSERT INTO tbl_formulario (nome, celular, email, cidade, estado) VALUES (:nome,:celular, :email, :cidade, :estado)";
                $stmt = $this->db->prepare($sql);

                $nome = $nome->getNome();
                $celular = $celular->getCelular();
                $email = $email->getEmail();
                $cidade = $cidade->getCidade();
                $estado = $estado->getEstado();

                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':celular', $celular);
                $stmt->bindParam(':email', $email); 
                $stmt->bindParam(':cidade', $cidade);
                $stmt->bindParam(':estado', $estado);

                return true;
            } catch(PDOException $e) {
                return false;
            }
        }

        public function update($formulario) {
            try{
                $sql = "UPDATE tbl_formulario SET nome = :nome, celular = :celular, email = :email, cidade = :cidade, estado = :estado WHERE id = :id";

                $stmt = $this->db->prepare($sql);

                $nome = $formulario->getNome();
                $celular = $formulario->getCelular();
                $email = $formulario->getEmail();
                $cidade = $formulario->getCidade();
                $estado = $formulario->getEstado();


                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':celular', $celular);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':cidade', $cidade);
                $stmt->bindParam(':estado', $estado);

                return true;
                } catch(PDOException $e) {
                    return false;
                }
            }

            public function delete($id) {
                try{
                    $sql = "DELETE FROM tbl_formulario WHERE id = :id";
                    $stmt = $this->db->prepare($sql);
                    $stmt->bindParam(':id', $id);
                    $stmt->execute();
                    return true;
                    } catch(PDOException $e) {
                        return false;

            }
        }
            
    }         
                
            

            
            
 
    


?>