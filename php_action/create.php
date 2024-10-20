<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
  global $connect;
  $var = mysqli_escape_string($connect, $input);
  // xss
  $var = htmlspecialchars($var);
  return $var;
}

if (isset($_POST['btn-cadastrar'])) {

  if (!$idade = filter_input(INPUT_POST,'idade', FILTER_VALIDATE_INT)) {
    $_SESSION['mensagem'] = "Formato de idade inválido!";
    header('Location: ../index.php');
    exit();
  } else {
    // Sanitização e armazenamento de dados.
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);
  }

  $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

  if (mysqli_query($connect, $sql)) {
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../index.php');
  } else {
    $_SESSION['mensagem'] = "Erro ao cadastrar!";
    header('Location: ../index.php');
  }
}
