<?php
include_once 'header.php';
?>

<div class="containercadastro">
    <div class="form-wrapper">
        <div class="form-container">
            <h2>Cadastro de Usuário</h2>
            <form action="processa_cadastro.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required><br><br>

                <input id="saver" type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
</div>

<style> 

body{
    background-color: whitesmoke;
}

.form-wrapper{
    background-color: red;
    border-radius: 20px;
    width: 500px;
    height: 600px;
}
#saver{
    background-color: green;
    border-radius: 10px;
    border-color: goldenrod;
}

</style>

<?php
include_once 'footer.php';
?>
