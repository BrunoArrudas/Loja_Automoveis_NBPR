<?php

include_once 'dao/cadastroFormularioDAO.php';
include_once 'entity/cadastroFormulario.php';

$formulariosDAO = new cadastroFormularioDAO ();
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
                $formulario->setCelular($_POST['celular']);
                $formulario->setCidade($_POST['cidade']);
                $formulario->setUF($_POST['estado']);
                
                $formulariosDAO->update($formulario);
            }
        } else {
            $novoFormulario = new cadastroFormulario(
                null, $_POST['nome'], $_POST['celular'], $_POST['email'], $_POST['Cidade'], 
                $_POST['estado'] );
            
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
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Cadastre seu interesse em um de nossos veiculos!</h1>
        <form action="registroFormulario.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $formulario ? $formulario->getId() : '' ?>">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $formulario ? $formulario->setNome($nome) : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $formulario ? $formulario->setEmail($email) : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $formulario ? $formulario->setCelular($celular) : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="Cidade">Cidade</label>
                        <input type="text" class="form-control" id="Cidade" name="Cidade" value="<?php echo $formulario ? $formulario->setCidade($cidade) : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="uf">UF</label>
                        <input type="text" class="form-control" id="uf" name="uf" value="<?php echo $formulario ? $formulario->setUF($uf) : '' ?>" required>
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


