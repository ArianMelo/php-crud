<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if (isset($_POST['btn-editar'])) {

  if (!$idade = filter_input(INPUT_POST,'idade', FILTER_VALIDATE_INT)) {
    $_SESSION['mensagem'] = "Formato de idade inválido!";
    header('Location: ../index.php');
    exit();
  } else {
    // Sanitização e armazenamento de dados.
    $nome = mysqli_real_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_real_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $idade = mysqli_real_escape_string($connect, $_POST['idade']);

    $id = mysqli_real_escape_string($connect, $_POST['id']);
  }

  $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

  if (mysqli_query($connect, $sql)) {
    $_SESSION['mensagem'] = "Atualizado com sucesso!";
    header('Location: ../index.php');
  } else {
    $_SESSION['mensagem'] = "Erro ao atualizar!";
    header('Location: ../index.php');
  }
}
