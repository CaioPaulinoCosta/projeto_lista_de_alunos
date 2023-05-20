<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
      <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 class="" id="main-title">Alunos Cadastrados</h1>
    <?php if(count($alunos) > 0): ?>
      <table class="table" id="contacts-table">
        <thead class="bg-thead text-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Curso</th>
            <th scope="col">RA</th>
            <th scope="col"></th>
          </tr>
          </thead>
        <body>
          <?php foreach($alunos as $aluno): ?>
            <tr>
              <td scope="row" class="col-id"><?= $aluno["id"] ?></td>
              <td scope="row"><?= $aluno["nome"] ?></td>
              <td scope="row"><?= $aluno["curso"] ?></td>
              <td scope="row"><?= $aluno["ra"] ?></td>
              <td class="actions">
                <a href="<?= $BASE_URL ?>show.php?id=<?= $aluno["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                <a href="<?= $BASE_URL ?>edit.php?id=<?= $aluno["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                <a href="<?= $BASE_URL ?>media.php?id=<?= $aluno["id"] ?>"><i class="fa-solid fa-calculator calculator-icon"></i></a>
                <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                  <input type="hidden" name="type" value="delete">
                  <input type="hidden" name="id" value="<?= $aluno["id"] ?>">
                  <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
          <p></p>
        </body>
      </table>
    <?php else: ?>  
      <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.</p>
    <?php endif; ?>
  </div>
<?php
  include_once("templates/footer.php");
?>
