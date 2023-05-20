<?php
include_once("templates/header.php");
?>
<div class="mt-5">
<div class="col text-center"><h1 id="main-title">Notas do aluno</h1></div>
<form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="media">
      <input type="hidden" name="id" value="<?= $alunos['id'] ?>">
      <div class="form-group">
        <label for="p1">Informe a nota da P1 do aluno:</label>
        <input type="text" class="form-control" id="p1" name="p1" placeholder="Insira a nota da P1" value="" required>
      </div>
      <div class="form-group">
        <label for="p2">Informe a nota da P2 do aluno:</label>
        <input type="text" class="form-control" id="p2" name="p2" placeholder="Insira a nota da P2" value="" required>
      </div>
      <div class="form-group">
        <label for="p3">Informe a nota da P3 do aluno:</label>
        <input type="text" class="form-control" id="p3" name="p3" placeholder="Insira a nota da P3" value="" required>
      </div>
      <div class="form-group">
        <label for="p4">Informe a nota da P4 do aluno:</label>
        <input type="text" class="form-control" id="p4" name="p4" placeholder="Insira a nota da P4" value="" required>
      </div>
      <button type="submit" class="btn btn-primary">Inserir</button>
      </div>
      
    </form>
    </div>
<?php
include_once("templates/footer.php");
?>