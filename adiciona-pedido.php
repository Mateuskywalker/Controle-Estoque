<?php require_once("cabecalho.php");
 require_once("banco-query.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$id_produto = $_POST['id_produto'];

if(insereCliente($conexao, $nome, $email, $telefone)){?>

    <p class="text-success">Pedido efetuado com sucesso!</p>

<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O pedido não foi efetuado com sucesso: <?= $msg?></p>
<?php
}

$resultado = buscaCliente($conexao, $nome);
$id_cliente = $resultado['id'];
inserePedido($conexao, $id_produto, $id_cliente);
?>
<?php include("rodape.php"); ?>
