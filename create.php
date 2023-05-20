<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <div class="row">
    <div class="col text-center"><h1 id="main-title">Cadastrar Aluno</h1></div>
    </div>
    <div class="col">
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group pt-4">
        <label for="nome">Nome do aluno:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do aluno" required>
      </div>
      <div class="form-group">
        <label for="curso">Curso do aluno:</label>
        <input type="text" class="form-control" id="curso" name="curso" placeholder="Insira o curso do aluno" required>
      </div>
      <div class="form-group">
        <label for="ra">ra do aluno:</label>
        <input type="text" class="form-control" id="ra" name="ra" placeholder="Insira o ra do aluno" required>
      </div>
      <div class="row">
      <div class="col-6 pb-5"><button type="submit" class="btn bcreate">Cadastrar</button></div>
      </div>
    </form>
    </div>
  </div>
<?php
  include_once("templates/footer.php");
?>
