<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;

  // MODIFICAÇÕES NO BANCO
  if(!empty($data)) {

    // Criar contato
    if($data["type"] === "create") {

      $nome = $data["nome"];
      $curso = $data["curso"];
      $ra = $data["ra"];

      $query = "INSERT INTO aluno (nome, curso, ra) VALUES (:nome, :curso, :ra)";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":curso", $curso);
      $stmt->bindParam(":ra", $ra);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Aluno inserido com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    } else if($data["type"] === "edit") {

      $nome = $data["nome"];
      $curso = $data["curso"];
      $ra = $data["ra"];
      $id = $data["id"];

      $query = "UPDATE aluno 
                SET nome = :nome, curso = :curso, ra = :ra
                WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":curso", $curso);
      $stmt->bindParam(":ra", $ra);
      $stmt->bindParam(":id", $id);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Dados do aluno atualizados com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    } else if($data["type"] === "delete") {

      $id = $data["id"];

      $query = "DELETE FROM aluno WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);
      
      try {

        $stmt->execute();
        $_SESSION["msg"] = "Aluno removido com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    } else if($data["type"] === "media"){

      $p1 = $data["p1"];
      $p2 = $data["p2"];
      $p3 = $data["p3"];
      $p4 = $data["p4"];
      $id = $data["id"];

      $intp1 = intval($p1);
      $intp2 = intval($p2);
      $intp3 = intval($p3);
      $intp4 = intval($p4);

      $calc = ($intp1 + $intp2 + $intp3 + $intp4) / 4;

      $media = strval($calc);

      $query = "UPDATE aluno 
                SET p1 = :p1, p2 = :p2, p3 = :p3, p4 = :p4, media = :media
                WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":p1", $p1);
      $stmt->bindParam(":p2", $p2);
      $stmt->bindParam(":p3", $p3);
      $stmt->bindParam(":p4", $p4);
      $stmt->bindParam(":media", $media);
      $stmt->bindParam(":id", $id);



      try {

        $stmt->execute();
        $_SESSION["msg"] = "Notas inseridas com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }
    } 

    // Redirect HOME
    header("Location:" . $BASE_URL . "../index.php");

  // SELEÇÃO DE DADOS
  } else {
    
    $id;

    if(!empty($_GET)) {
      $id = $_GET["id"];
    }

    // Retorna o dado de um contato
    if(!empty($id)) {

      $query = "SELECT * FROM aluno WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      $alunos = $stmt->fetch();

    } else {

      // Retorna todos os contatos
      $aluno = [];

      $query = "SELECT * FROM aluno";

      $stmt = $conn->prepare($query);

      $stmt->execute();
      
      $alunos = $stmt->fetchAll();

    }

  }

  // FECHAR CONEXÃO
  $conn = null;