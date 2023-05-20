<?php

  include_once("config/url.php");
  include_once("config/process.php");

  // limpa a mensagem
  if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alunos da Universidade</title>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- CSS -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-navbar pl-5">
      <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
        <img src="<?= $BASE_URL ?>img/logo.svg" alt="Agenda">
      </a>
      <div>
        <div class="navbar-nav ml-5">
          <a class="nav-link active text-dark text-bold bold" id="home-link" href="<?= $BASE_URL ?>index.php">Alunos</a>
          <a class="nav-link active text-dark text-bold bold ml-5" href="<?= $BASE_URL ?>create.php">Cadastrar Aluno</a>
        </div>
      </div>
      <div class="icon-info" style="width: 1400px; padding-left: 1300px">
      
      <i class="fa-sharp fa-solid fa-circle-info fa-2xl" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-modal text-light">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Funções do site.</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Para visualizar todos os dados de um aluno, clique em: <i class="fas fa-eye"></i><br>
        Para editar os dados de um aluno, clique em: <i class="far fa-edit"></i><br>
        Para atribuir notas e tirar médias dos alunos, clique em: <i class="fa-solid fa-calculator"></i><br>
        Para retirar um aluno da lista, clique em: <i class="fas fa-times"></i>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light text-dark" data-bs-dismiss="modal">Ok!</button>
        </div>
      </div>
    </div>
  </div>
  </div>
    </nav>
  </header>