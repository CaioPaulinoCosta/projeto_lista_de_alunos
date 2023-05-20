<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <h1 id="main-title">Editar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?= $alunos['id'] ?>">
      <div class="form-group">
        <label for="nome">Nome do aluno:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" value="<?= $alunos['nome'] ?>" required>
      </div>
      <div class="form-group">
        <label for="curso">Informe o curso do aluno:</label>
        <input type="text" class="form-control" id="curso" name="curso" placeholder="Digite o curso" value="<?= $alunos['curso'] ?>" required>
      </div>
      <div class="form-group">
        <label for="RA">Informe o RA do aluno:</label>
        <textarea type="text" class="form-control" id="ra" name="ra" placeholder="Insira o RA do aluno" rows="3"><?= $alunos['ra'] ?></textarea>
      </div>
      <button type="submit" class="btn">Atualizar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>
