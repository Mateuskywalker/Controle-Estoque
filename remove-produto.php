<?php require_once("cabecalho.php");
 require_once("banco-query.php");

 $id = $_POST['id'];
 removeProduto($conexao, $id);
 header("Location: produto-lista.php?removido=1");
 die();
 ?>
