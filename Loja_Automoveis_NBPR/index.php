<?php

include_once 'config/Database.php';
include_once 'entity/cadastroCarros.php';
include_once 'dao/cadastroCarroDAO.php';

$carrosDAO = new CarrosDAO();
$carros = $carrosDAO->getAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros a venda em nosso site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- Outros itens de menu podem ser adicionados aqui -->
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav ml-auto">
                
                                    <input type="hidden" name="type" value="logout">
                                    <button class="btn btn-link nav-link" type="submit" style="display: inline; border: none; background: none; padding: 0; cursor: pointer;">Logout</button>
                                </form>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <h1 class="my-4">Automoveis</h1>
        <a href="registroCarros.php" class="btn btn-primary mb-4">Quero cadastrar meu automovel</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($carros as $carros) : ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($carros->getImagem(), ENT_QUOTES, 'UTF-8'); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($carros->getModelo(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carros->getAno(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carros->getCidade(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carros->getKilometragem(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carros->getMotorizacao(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carros->getCambio(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carros->getCarroceria(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carros->getCombustivel(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carros->getCor(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carros->getDescricao(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carros->getInformacao(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carros->getEmail(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carros->getTelefone(), ENT_QUOTES, 'UTF-8'); ?></p>

                            <a href="registroCarro.php?id=<?php echo $carros->getId(); ?>" class="btn btn-primary">Detalhes</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>