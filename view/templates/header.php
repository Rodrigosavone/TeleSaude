<?php
  include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tele Saúde</title>
  <link rel="shortcut icon" href="../assets/thumbs/icone.svg">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg menu">
      <div class="container-xl">
        <a class="navbar-brand" href="#" style="color:black">Tele Saúde</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07XL" style="margin-left: 21%;">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=templates/horarios">Horários</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=templates/institucional">Institucional</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=controller/ProdutosController">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=templates/sobrenos">Sobre Nós</a>
            </li>
            <li class="nav-item" style="margin-top: 10px; margin-left:18px; color: black;">
              <h6>Olá,<?php echo$_SESSION['nome']; ?></h6>
            </li>
            <li class="icon-login">
              <img src="assets/thumbs/person.svg" height="30" width="30" style="margin-right: 100px;margin-left: 10px;">
            </li>
            <li class="nav-item" style="margin-top: 10px;">
              <h6><a href="logout.php" style="color:black;">Sair</a></h8>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>