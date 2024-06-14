<?php

include_once 'dao/cadastroCarroDAO.php';
include_once 'entity/cadastroCarros.php';

$carrosDAO = new CarrosDAO();
$carro = null;

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $carro  = $carrosDAO->getById($_GET['id']);
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {    
    if(isset($_POST['save'])) {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $carro  = $carrosDAO->getById($_POST['id']);

            $carro->setImagem($_POST['imagem_carro']);
            $carro->setModelo($_POST['modelo_carro']);
            $carro->setAno($_POST['ano']);
            $carro->setCidade($_POST['cidade']);
            $carro->setKilometragem($_POST['kilometragem']);
            $carro->setMotorizacao($_POST['motorizacao']);
            $carro->setCambio($_POST['cambio']);
            $carro->setCarroceria($_POST['carroceria']);
            $carro->setCombustivel($_POST['combustivel']);
            $carro->setCor($_POST['cor']);
            $carro->setDescricao($_POST['descricao']);
            $carro->setInformacao($_POST['informacao']);
            $carro->setEmail($_POST['email']);
            $carro->setTelefone($_POST['telefone']);


            $carrosDAO->update($carros);
        } else {
            $novoCarro = new CarrosDAO(null, $_POST['nome'], $_POST['telefone'], $_POST['email']);
            $carrosDAO->create($novoCarro);            
        }

        header('Location: index.php');
        exit;
    }

    if(isset($_POST['delete']) && isset($_POST['id'])) {
        $contatoDAO->delete($_POST['id']);
        header('Location: index.php');
        exit;
    }
}



?>