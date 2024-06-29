<?php

include_once 'dao/formularioDAO.php';
include_once 'entity/cadastroFormulario.php';
include_once 'header.php';

$formulariosDAO = new formularioDAO();
$formularios = null;

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $formularios  = $formulariosDAO->getById($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save'])) {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $formularios = $formulariosDAO->getById($_POST['id']);
            if ($formularios) {
                $formularios->setNomeFormulario($_POST['nome']);
                $formularios->setEmailFormulario($_POST['email']);
                $formularios->setCelularFormulario($_POST['celular']);
                $formularios->setCidadeFormulario($_POST['cidade']);
                $formularios->setEstadoFormulario($_POST['estado']);
                
                
                $formulariosDAO->update($formularios);
            }
        } else {
            $novoFormulario = new Formulario(
                null, $_POST['nome'], $_POST['email'], $_POST['celular'], $_POST['cidade'], $_POST['estado']);
            
            $formulariosDAO->create($novoFormulario);
        }
        
        header('Location: detalhesForms.php');
        exit;
    } elseif (isset($_POST['delete']) && isset($_POST['id'])) {
        $formulariosDAO->delete($_POST['id']);
        header('Location: detalhesForms.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Interesse</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Tem interesse em algum carro? Envie nos suas Informacoes</h1>
        <form action="registroFormulario.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $formularios ? $formularios->getId() : '' ?>">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $formularios ? $formularios->setNomeFormulario($nomeFormulario) : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Qual o seu e-mail?</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $formularios ? $formularios->setEmailFormulario($emailFormulario) : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="celular">Qual seu celular?</label>
                        <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $formularios ? $formularios->setCelularFormulario($celularFormulario) : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="cidade">Qual sua cidade?</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $formularios ? $formularios->setCidadeFormulario($cidadeFormulario) : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="estado">Qual seu estado?</label>
                        <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $formularios ? $formularios->setEstadoFormulario($estadoFormulario) : '' ?>" required>
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
