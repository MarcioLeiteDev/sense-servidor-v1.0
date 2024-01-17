<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <title>Relatorio Serviços</title>
</head>

<body>

<div class="container d-flex align-items-center justify-content-center">
    <img src="./../assets/image/logo.jpg" class="img-fluid" width="200" alt="Imagem Centralizada"> </br>
    <h2 class="text-center">Relatório de Serviços</h2>
</div>



<div class="row">

<div class="col-1"></div>
<div class="col-10">

  <table class="table">
    <?php

$dados_json = $_POST['dados'];
$dados = json_decode(html_entity_decode($dados_json), true);

    ?>
    <thead>
      <tr>
        <th>Data Entrada</th>
        <th>Data Entrega</th>
        <th>Nome do Serviço</th>
        <th>Observações</th>
        <th>Valor do Serviço</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($dados as $key => $valor) {
      ?>
    <tr>
        <td><?= $valor['start'] ?></td>
        <td><?= $valor['end'] ?></td>
        <td><?= $valor['servico'] ?></td>
        <td><?= $valor['obs'] ?></td>
        <td><?= $valor['valor'] ?></td>
    </tr>
      <?php } ?>
    </tbody>

  </table>

  </div>
  <div class="col-1"></div>

        <!-- Botão para acionar a impressão -->
        <button onclick="imprimirPagina()" class="btn btn-success">Imprimir Página</button>

  </div>



<script>
    function imprimirPagina() {
        // Chama o método de impressão
        window.print();
    }
</script>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>