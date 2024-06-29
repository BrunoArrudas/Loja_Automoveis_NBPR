<?php

include_once 'dao/formularioDAO.php';
include_once 'entity/cadastroFormulario.php';

$formulariosDAO = new formularioDAO();
$formulario = null;

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $formulario  = $formulariosDAO->getById($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save'])) {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $formulario = $formulariosDAO->getById($_POST['id']);
            if ($formulario) {
                $formulario->setNomeFormulario($_POST['nome']);
                $formulario->setEmailFormulario($_POST['email']);
                $formulario->setCelularFormulario($_POST['celular']);
                $formulario->setCidadeFormulario($_POST['cidade']);
                $formulario->setEstadoFormulario($_POST['estado']);
                
                $formulariosDAO->update($formulario);
            }
        } else {
            $novoFormulario = new Formulario(
                null, $_POST['nome'], $_POST['email'], $_POST['celular'], $_POST['cidade'], $_POST['estado']);
            
            $formulariosDAO->create($novoFormulario);
        }
        
        header('Location: formulariosCadastrados.php');
        exit;
    } elseif (isset($_POST['delete']) && isset($_POST['id'])) {
        $carrosDAO->delete($_POST['id']);
        header('Location: formulariosCadastrados.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoas Interessadas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Usuarios interessados</h1>
        <form action="registroFormulario.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $formulario ? $formulario->getId() : '' ?>">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="nome">Nome do Interessado</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $formulario ? $formulario->getNomeFormulario() : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email do interessado</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $formulario ? $formulario->getEmailFormulario() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="celular">Celular do interessado</label>
                        <input type="text" class="form-control" id="celular" name="Ano" value="<?php echo $formulario ? $formulario->getCelularFormulario() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="cidade">Cidade do interessado</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $formulario ? $formulario->getCidadeFormulario() : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado do interessado</label>
                        <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $formulario ? $formulario->getEstadoFormulario() : '' ?>" required>
                    </div>


                    <button type="submit" name="save" class="btn btn-success">Salvar</button>
                    <button type="submit" name="delete" class="btn btn-danger">Excluir</button>
                    <a href="exibirForms.php" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
