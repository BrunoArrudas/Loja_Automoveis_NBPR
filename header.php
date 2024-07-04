<!DOCTYPE html>
<html>
<head>
  <style>
    body,
    html {
      margin: 0;
      padding: 0;
      width: 100%;
    }

    .navbar {
      width: 100%;
      background-color: #333;
    }

    .navbar ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    .navbar li {
      float: left;
    }

    .navbar li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .navbar li a:hover {
      background-color: #111;
    }

    .container {
      min-height: 100vh;
    }

    .containercadastro {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 70px); /* Ajuste para considerar a altura do rodapé */
      padding: 20px;
    }

    .form-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
    }

    .form-container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
      box-sizing: border-box;
    }

    .form-container h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .form-container label {
      display: block;
      margin-bottom: 5px;
      color: #666;
    }

    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-container input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .form-container input[type="submit"]:hover {
      background-color: #45a049;
    }

    footer {
      background-color: #333;
      color: white;
      padding: 8px 0;
      width: 100%;
      height: 70px;
      position: relative;
      bottom: 0;
      text-align: center;
    }

    .footer-links a {
      color: white;
      text-decoration: none;
      margin-right: 15px;
    }

    .footer-links a:hover {
      text-decoration: underline;
    }

    /* Responsividade */
    @media (max-width: 768px) {
      .navbar ul {
        display: flex;
        flex-direction: column;
      }

      .navbar li {
        float: none;
      }

      .navbar li a {
        text-align: left;
        padding: 10px 15px;
      }

      .form-container {
        padding: 15px;
      }
    }
  </style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <div class="navbar">
    <a href="index.php">
      <img src="imagem/LogoOficial.png" width="150px" id="imglogo">
    </a>
    <ul>
      <li><a class="active" href="index.php">Home</a></li>
      <li><a href="registroCarro.php">Quero registrar meu Carro</a></li>
      <li><a href="contato.php">Contato</a></li>
      <li><a href="cadastro.php">Cadastro</a></li>
      <li><a href="sobre.php">Sobre Nos</a></li>
    </ul>
  </div>
</body>
</html>