<!DOCTYPE html>
<html>

<?php
$conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
$dados = mysqli_query($conexao, "SELECT * FROM produtos");
$produto = mysqli_fetch_array($dados);
?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <h1><?= $produto['nome'] ?></h1>
  <p>por apenas <?= $produto['preco'] ?></p>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
  <?php $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">'; ?>
</head>

<form action="checkout.php" method="POST">
  <input type="hidden" name="nome" value="Fuzzy Cardigan">
  <input type="hidden" name="preco" value="129,00">
</form>

<body>
<p><?= $produto['descricao'] ?></p>


  <?php
  $cabecalho_title = "Produto da Mirror Fashion";
  include("cabecalho.php");
  ?>
  <?php include("cabecalho.php"); ?>
  <!-- Aqui vai vir o miolo da página depois! -->
  <?php include("rodape.php"); ?>

</body>

</html>