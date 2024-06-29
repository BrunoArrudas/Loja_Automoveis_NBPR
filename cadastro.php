<?php

include_once 'header.php';

?>

 
    <div class="container">
        <h2>Cadastro de Usuário</h2>
        <form action="processa_cadastro.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>
           
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
           
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br><br>
           
            <input type="submit" value="Cadastrar">
        </form>
    </div>
 
</body>
</html>
 
<?php




include_once 'footer.php';

?>