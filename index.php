<?php

include_once 'config/Database.php';
include_once 'entity/cadastroCarros.php';
include_once 'dao/cadastroCarroDAO.php';
include_once 'footer.html';

$carrosDAO = new CarrosDAO();
$carros = $carrosDAO->getAll();
?>

<style>
        /* Estilos adicionais para a página principal */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
 
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }
 
        header img {
            height: 100px;
            width: 150px;
        }
 
        .barra {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }
 
        header nav ul {
            list-style-type: none;
            display: flex;
        }
 
        header nav ul li {
            margin-right: 20px;
        }
 
        header nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
 
        header nav ul li a:hover {
            text-decoration: underline;
        }
 
        /* Estilos para a seção de destaque */
        #destaque {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
 
        .carro {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 10px;
            text-align: center;
            width: 250px;
        }
 
        .carro img {
            width: 100%;
            border-radius: 5px;
        }
 
        /* Responsividade */
        @media screen and (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
                padding: 10px;
            }
 
            header img {
                height: 80px;
                width: 120px;
            }
 
            .barra {
                margin-left: 0;
                text-align: left;
                width: 100%;
            }
 
            header nav ul {
                flex-direction: column;
                gap: 10px;
            }
 
            header nav ul li {
                margin-right: 0;
            }
        }
 
        @media screen and (max-width: 480px) {
            header img {
                height: 60px;
                width: 90px;
            }
 
            header nav ul {
                flex-direction: column;
                gap: 5px;
            }
 
            header nav ul li {
                margin-right: 0;
            }
 
            .carro {
                width: 100%;
            }
        }
 
       /* Estilos para o rodapé */
       footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: relative;
            width: 100%;
            margin-top: auto;
        }
    </style>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de automóveis NBPR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<header>
        <a href="index.html"><img src="imagem/LogoOficial.png" alt="Logo"></a>
        <div class="barra">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a href="contato.html">Contato</a></li>
                    <li><a href="cadastro.html">Cadastro</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <h1 class="my-4">Automóveis</h1>
        <a href="registroCarro.php" class="btn btn-primary mb-4">Quero cadastrar meu automóvel</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($carros as $carro) : ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($carro->getImagem(), ENT_QUOTES, 'UTF-8'); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($carro->getModelo(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carro->getAno(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carro->getCidade(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carro->getKilometragem(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carro->getMotorizacao(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carro->getCambio(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carro->getCarroceria(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carro->getCombustivel(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carro->getCor(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carro->getDescricao(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carro->getInformacao(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carro->getEmail(), ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($carro->getTelefone(), ENT_QUOTES, 'UTF-8'); ?></p>

                            <a href="detalhesCarros.php?id=<?php echo $carro->getId(); ?>" class="btn btn-primary">Detalhes</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
    <footer>
        <p>&copy; 2024 Loja de automóveis NBPR. Todos os direitos reservados.</p>
    </footer>
</body>
</html>


