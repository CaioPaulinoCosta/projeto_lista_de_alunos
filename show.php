<?php
  include_once("templates/header.php");
?>

<div class="container text-center mt-5" style="border: 1px solid black;">
<div class="row ">
  <div class="col-12 bg-dark text-light"><h1 class="bold" id="main-title"><?= $alunos["nome"] ?></h1></div>
  <div class="col-12 mb-5 bg-secondary text-light"><h1 class="display-4">Curso</h1><p><?= $alunos["curso"] ?></p></div>
  <div class="col-2"><h1>RA</h1><p><?= $alunos["ra"] ?></p></div>
  <div class="col-2"><h1>P1</h1><p><?= $alunos["p1"] ?></p></div>
  <div class="col-2"><h1>P2</h1><p><?= $alunos["p2"] ?></p></div>
  <div class="col-2"><h1>P3</h1><p><?= $alunos["p3"] ?></p></div>
  <div class="col-2"><h1>P4</h1><p><?= $alunos["p4"] ?></p></div>
  <div class="col-2"><h1>Média</h1><p><?= $alunos["media"] ?></p></div>
</div>
</div>

<?php
  include_once("templates/footer.php");
?>
