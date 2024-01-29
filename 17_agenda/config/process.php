<?php
session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST ? $_POST : '';

/* Criação ou modificação dos dados */
if (!empty($data)) {

  if ($data["type"] === "create") {
    $query = "INSERT INTO contacts(name, phone, observations) VALUES(:name, :phone, :observations)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":name", $data["name"]);
    $stmt->bindParam(":phone", $data["phone"]);
    $stmt->bindParam(":observations", $data["observations"]);

    try {
      $stmt->execute();
      $_SESSION["msg"] = "Contato criado com sucesso!";
    } catch(PDOException $e) {
      $error = $e->getMessage();
      echo "Error: $error";
    }

    /* Redirect HOME */
    header("Location:" . $BASE_URL . "/../index.php");

  } else if($data["type"] === "edit") {
    $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":name", $data["name"]);
    $stmt->bindParam(":phone", $data["phone"]);
    $stmt->bindParam(":observations", $data["observations"]);
    $stmt->bindParam(":id", $data["id"]);

    try {
      $stmt->execute();
      $_SESSION["msg"] = "Contato editado com sucesso!";
    } catch(PDOException $e) {
      $error = $e->getMessage();
      echo "Error: $error";
    }

    /* Redirect HOME */
    header("Location:" . $BASE_URL . "/../index.php");

  } else if($data["type"] === "delete") {
    $query = "DELETE FROM contacts WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam("id", $data["id"]);

    try {
      $stmt->execute();
      $_SESSION["msg"] = "Contato deletado com sucesso!";
    } catch(PDOException $e) {
      $error = $e->getMessage();
      echo "Error: $error";
    }
    header("Location:" . $BASE_URL . "/index.php");
    exit();

  }


  /* Seleção dos dados */
} else {
  $id;

  if (!empty($_GET)) {
    $id = $_GET["id"];
  }

  /* Retorna o dado de um contato */
  if (!empty($id)) {
    $query = "SELECT * FROM contacts  WHERE id = :id";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
  } else {
    /* Retornar todos os contatos */
    $contacts = [];

    $query = "SELECT * FROM contacts ORDER BY contacts.id";

    $stmt = $conn->prepare($query);
    $stmt->execute();

    $contacts = $stmt->fetchAll();
  }
}

/* Fecha conexão */
$conn = null;
