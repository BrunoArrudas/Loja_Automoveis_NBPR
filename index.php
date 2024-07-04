<?php

include_once 'config/Database.php';
include_once 'entity/cadastroCarros.php';
include_once 'dao/cadastroCarroDAO.php';
include_once 'header.php';

$carrosDAO = new CarrosDAO();
$carros = $carrosDAO->getAll();
?>

    <div class="container">
        <h1 class="my-4">Automóveis</h1>
        <a href="registroCarro.php" id="btn" class="btn btn-primary mb-4">Quero cadastrar meu automóvel</a>
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

</body>
</html>

<style> 

body{
    background-color: whitesmoke;
}
.btn{
    background-color: #d80000;
    border-radius: 10px;
    border-color: goldenrod;
}

.card-text{
    border: 3px solid black;
    border-radius: 10px;
    border-color: whitesmoke;
}

.col{
    border-color: (221, 220, 220);
}




</style>

<?php




include_once 'footer.php';

?>


