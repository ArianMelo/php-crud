<?php 
// Header
include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light"> Clientes </h3>
    <table class="striped">
      <thead>
        <tr>
          <th>Nome:</th>
          <th>Sobrenome:</th>
          <th>Email:</th>
          <th>Idade:</th>
        </tr>
      </thead>
      <tbody>
        <td>Rodrigo</td>
        <td>Oliveira</td>
        <td>rodrigosantosweb@gmail.com</td>
        <td>25</td>
        <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
        <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
      </tbody>
    </table>
    <br>
    <a href="adicionar.php" class="btn">Adicionar cliente</a>
  </div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>