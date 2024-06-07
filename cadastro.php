<?php
// Verifica se os campos foram preenchidos
if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    // Conecta ao banco de dados (substitua os valores pelos seus)
    $conexao = mysqli_connect('localhost', 'usuario', 'senha', 'banco_de_dados');
    
    // Verifica se a conexão foi bem sucedida
    if(!$conexao) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }
    
    // Prepara a consulta SQL para inserir os dados
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    
    // Executa a consulta SQL
    if(mysqli_query($conexao, $sql)) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar o usuário: " . mysqli_error($conexao);
    }
    
    // Fecha a conexão com o banco de dados
    mysqli_close($conexao);
} else {
    echo "Por favor, preencha todos os campos do formulário.";
}
?>
