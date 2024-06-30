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
      /* Ajustado para centralizar o texto */
      padding: 14px 16px;
      text-decoration: none;
    }

    .navbar li a:hover {
      background-color: #111;
    }

    footer {
      background-color: #333;
      color: white;
      padding: 8px 0;
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 70px;
    }

    .footer-links a {
      color: white;
      text-decoration: none;
      margin-right: 15px;
    }

    .footer-links a:hover {
      text-decoration: underline;
    }

    /* Estilos para listas na seção de contato */
    .contact-list ul {
      list-style-type: disc;
      margin-left: 20px;
      padding-left: 0;
    }

    .contact-list li {
      margin-bottom: 10px;
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