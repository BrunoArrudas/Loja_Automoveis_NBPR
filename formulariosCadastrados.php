<?php

include_once 'config/Database.php';
include_once 'entity/cadastroFormulario.php';
include_once 'dao/cadastroFormularioDAO.php';
include_once 'header.php';

$formulariosDAO = new cadastroFormularioDAO();
$formularios = $formulariosDAO->getAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios de interesse cadastrados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h1 class="my-4">Formularios</h1>
        <a href="registroCarro.php" class="btn btn-primary mb-4">Usuarios interessados</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($formularios as $formularios) : ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($formularios->getNome(), ENT_QUOTES, 'UTF-8'); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($formularios->getCelular(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($formularios->getEmail(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($formularios->getCidade(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($formularios->getUf(), ENT_QUOTES, 'UTF-8'); ?></p>

                            <a href="detalhesCarros.php?id=<?php echo $formularios->getId(); ?>" class="btn btn-primary">Detalhes</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


