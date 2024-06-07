<?php
$contato = null;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="my-4">Formulário</h1>
        <form action="detalhes.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $contato ? $contato->getId() : ''  ?>">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $contato ? $contato->getNome() : ''  ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $contato ? $contato->getEmail() : ''  ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $contato ? $contato->getCelular() : ''  ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="cidade" class="form-control" id="cidade" name="cidade" value="<?php echo $contato ? $contato->getCidade() : ''  ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input type="estado" class="form-control" id="estado" name="estado" value="<?php echo $contato ? $contato->getEstado() : ''  ?>" required>
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