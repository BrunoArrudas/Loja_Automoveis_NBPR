<?php

include_once 'config/Database.php';
include_once 'entity/cadastroFormulario.php';

class formularioDAO {    
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getById($id) {
        try {
            $sql = "SELECT * FROM tbl_formulario WHERE id = :id";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $formulario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $formulario ? new Formulario($formulario['id'],
                                       $formulario['nome'],
                                       $formulario['email'],
                                       $formulario['celular'],
                                       $formulario['cidade'],
                                       $formulario['estado']) : null;
         } catch (PDOException $e){
            return null;
         }
    }


    public function getAll(){
        try{
            $sql = "SELECT * FROM tbl_formulario";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $formulario = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function($formulario){
                return new Formulario($formulario['id'],
                $formulario['nome'],
                $formulario['email'],
                $formulario['celular'],
                $formulario['cidade'],
                $formulario['estado']);
            }, $formulario);

        }catch (PDOException $e){
            return [];
        }
    }


    public function create($formulario){
        try{
            $sql = "INSERT INTO tbl_formulario(nome,email,celular,cidade,estado) VALUES (:nome,:email, :celular, :cidade, :estado) ";
            $stmt = $this->db->prepare($sql);
            
            $nomeFormulario = $formulario->getNomeFormulario();
            $emailFormulario = $formulario->getEmailFormulario();
            $celularFormulario = $formulario->getCelularFormulario();
            $cidadeFormulario = $formulario->getCidadeFormulario();
            $estadoFormulario = $formulario->getEstadoFormulario();
            

            $stmt->bindParam(':nome', $nomeFormulario);
            $stmt->bindParam(':email', $emailFormulario);
            $stmt->bindParam(':celular', $celularFormulario);
            $stmt->bindParam(':cidade', $cidadeFormulario);
            $stmt->bindParam(':estado', $estadoFormulario);
            $stmt->execute();

            return true;

        } catch (PDOException $e) {
            return false;
        }
    }

    public function update($formulario) {
        try {
            $sql = "UPDATE tbl_formulario SET nome = :nome, email = :email, celular = :celular, cidade = :cidade, estado = :estado WHERE id = :id";

            $stmt = $this->db->prepare($sql);

            $nomeFormulario = $formulario->getNomeFormulario();
            $emailFormulario = $formulario->getEmailFormulario();
            $celularFormulario = $formulario->getCelularFormulario();
            $cidadeFormulario = $formulario->getCidadeFormulario();
            $estadoFormulario = $formulario->getEstadoFormulario();
            

            $stmt->bindParam(':nome', $nomeFormulario);
            $stmt->bindParam(':email', $emailFormulario);
            $stmt->bindParam(':celular', $celularFormulario);
            $stmt->bindParam(':cidade', $cidadeFormulario);
            $stmt->bindParam(':estado', $estadoFormulario);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function  delete($id) {
        try {
            $sql = "DELETE FROM tbl_formulario WHERE id = :id";
            
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