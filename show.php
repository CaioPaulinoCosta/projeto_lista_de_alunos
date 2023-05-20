<?php
  include_once("templates/header.php");
?>

<div class="container text-center mt-5">
<div class="row">
</div>
<div class="col">
<h1 class="bold p-4" style="border-bottom: solid #39554d;"><?= $alunos["nome"] ?></h1>
</div>
<div class="col mt-4">
<h1 class="">Curso</h1><p><?= $alunos["curso"] ?></p>
</div>
<table class="table">
  <thead class="bg-thead text-light">
    <tr>
      <th scope="col">RA</th>
      <th scope="col">P1</th>
      <th scope="col">P2</th>
      <th scope="col">P3</th>
      <th scope="col">P4</th>
      <th scope="col">Média</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="bold"><?= $alunos["ra"] ?></td>
      <td class="bold"><?= $alunos["p1"] ?></td>
      <td class="bold"><?= $alunos["p2"] ?></td>
      <td class="bold"><?= $alunos["p3"] ?></td>
      <td class="bold"><?= $alunos["p4"] ?></td>
      <td class="bold"><?= $alunos["media"] ?></td>
    </tr>
  </tbody>
</table>
</div>
</div>

<?php
  include_once("templates/footer.php");
?>
