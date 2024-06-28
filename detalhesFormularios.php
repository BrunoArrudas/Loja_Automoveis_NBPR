<?php

include_once 'dao/cadastroFormularioDAO.php';
include_once 'entity/cadastroFormulario.php';

$formulariosDAO = new cadastroFormulariosDAO();
$formulario = null;

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $formulario  = $formulariosDAO->getById($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save'])) {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $formulario = $formulariosDAO->getById($_POST['id']);
            if ($formulario) {
                $formulario->setNome($_POST['nome']);
                $formulario->setEmail($_POST['email']);
                $formulario->seCelular($_POST['celular']);
                $formulario->setCidade($_POST['cidade']);
                $formulario->setUf($_POST['uf']);
                
                $formulariosDAO->update($formulario);
            }
        } else {
            $novoFormulario = new Formularios(
                null, $_POST['nome'], $_POST['email'], $_POST['celular'], $_POST['cidade'], 
                $_POST['uf']
            );
            
            $formulariosDAO->create($novoFormulario);
        }
        
        header('Location: index.php');
        exit;
    } elseif (isset($_POST['delete']) && isset($_POST['id'])) {
        $formulariosDAO->delete($_POST['id']);
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
    <title>Formulários de interesse cadastrados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Formulários</h1>
        <form action="registroCarro.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $formulario ? $formulario->getId() : '' ?>">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="url" class="form-control" id="nome" name="nome" value="<?php echo $formulario ? $formulario->getNome() : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $formulario ? $formulario->getEmail() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $formulario ? $formulario->getCelular() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $formulario ? $formulario->getCidade() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="uf">UF</label>
                        <input type="text" class="form-control" id="uf" name="uf" value="<?php echo $formulario ? $formulario->getUf() : '' ?>" required>
                    </div>


                    <button type="submit" name="save" class="btn btn-success">Salvar</button>
                    <button type="submit" name="delete" class="btn btn-danger">Excluir</button>
                    <a href=".php" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
