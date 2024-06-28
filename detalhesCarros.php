<?php

include_once 'dao/cadastroCarroDAO.php';
include_once 'entity/cadastroCarros.php';

$carrosDAO = new CarrosDAO();
$carro = null;

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $carro  = $carrosDAO->getById($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save'])) {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $carro = $carrosDAO->getById($_POST['id']);
            if ($carro) {
                $carro->setImagem($_POST['imagemveiculo']);
                $carro->setModelo($_POST['modelo']);
                $carro->setAno($_POST['Ano']);
                $carro->setCidade($_POST['Cidade']);
                $carro->setKilometragem($_POST['Kilometragem']);
                $carro->setMotorizacao($_POST['Motorizacao']);
                $carro->setCambio($_POST['Cambio']);
                $carro->setCarroceria($_POST['Carroceria']);
                $carro->setCombustivel($_POST['Combustivel']);
                $carro->setCor($_POST['Cor']);
                $carro->setDescricao($_POST['Descricao']);
                $carro->setInformacao($_POST['Informacoes']);
                $carro->setEmail($_POST['email']);
                $carro->setTelefone($_POST['Telefone']);
                
                $carrosDAO->update($carro);
            }
        } else {
            $novoCarro = new Carros(
                null, $_POST['imagemveiculo'], $_POST['modelo'], $_POST['Ano'], $_POST['Cidade'], 
                $_POST['Kilometragem'], $_POST['Motorizacao'], $_POST['Cambio'], $_POST['Carroceria'], 
                $_POST['Combustivel'], $_POST['Cor'], $_POST['Descricao'], $_POST['Informacoes'], 
                $_POST['email'], $_POST['Telefone']
            );
            
            $carrosDAO->create($novoCarro);
        }
        
        header('Location: index.php');
        exit;
    } elseif (isset($_POST['delete']) && isset($_POST['id'])) {
        $carrosDAO->delete($_POST['id']);
        header('Location: index.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Carros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Cadastre o automóvel para Venda</h1>
        <form action="registroCarro.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $carro ? $carro->getId() : '' ?>">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="imagemveiculo">Imagem do veículo</label>
                        <input type="url" class="form-control" id="imagemveiculo" name="imagemveiculo" value="<?php echo $carro ? $carro->getImagem() : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="modelo">Qual o modelo do seu veículo?</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $carro ? $carro->getModelo() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="Ano">Qual o ano?</label>
                        <input type="text" class="form-control" id="Ano" name="Ano" value="<?php echo $carro ? $carro->getAno() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="Cidade">Qual cidade o veículo está?</label>
                        <input type="text" class="form-control" id="Cidade" name="Cidade" value="<?php echo $carro ? $carro->getCidade() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="Kilometragem">Kilometragem do veículo</label>
                        <input type="text" class="form-control" id="Kilometragem" name="Kilometragem" value="<?php echo $carro ? $carro->getKilometragem() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="Motorizacao">Motorização:</label>
                        <input type="text" class="form-control" id="Motorizacao" name="Motorizacao" value="<?php echo $carro ? $carro->getMotorizacao() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="Cambio">Câmbio</label>
                        <input type="text" class="form-control" id="Cambio" name="Cambio" value="<?php echo $carro ? $carro->getCambio() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="Carroceria">Carroceria</label>
                        <input type="text" class="form-control" id="Carroceria" name="Carroceria" value="<?php echo $carro ? $carro->getCarroceria() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="Combustivel">Combustível</label>
                        <input type="text" class="form-control" id="Combustivel" name="Combustivel" value="<?php echo $carro ? $carro->getCombustivel() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="Cor">Qual a cor do veículo?</label>
                        <input type="text" class="form-control" id="Cor" name="Cor" value="<?php echo $carro ? $carro->getCor() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="Descricao">Descrição completa do veículo</label>
                        <input type="text" class="form-control" id="Descricao" name="Descricao" value="<?php echo $carro ? $carro->getDescricao() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="Informacoes">Informações importantes sobre o veículo</label>
                        <input type="text" class="form-control" id="Informacoes" name="Informacoes" value="<?php echo $carro ? $carro->getInformacao() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail para contato?</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $carro ? $carro->getEmail() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="Telefone">Telefone para contato?</label>
                        <input type="tel" class="form-control" id="Telefone" name="Telefone" value="<?php echo $carro ? $carro->getTelefone() : '' ?>" required>
                    </div>

                    <button type="submit" name="save" class="btn btn-success">Salvar</button>
                    <button type="submit" name="delete" class="btn btn-danger">Excluir</button>
                    <a href="index.php" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
