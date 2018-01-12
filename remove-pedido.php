<?php require_once("cabecalho.php");
 require_once("banco-query.php");

 $id = $_POST['id'];
 removePedido($conexao, $id);
 header("Location: pedido-lista.php?removido=1");
 die();
 ?>
