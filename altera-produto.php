<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-query.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];


if(alteraProduto($conexao, $id, $nome, $preco, $descricao)) { ?>
	<p class="text-success">O produto <?= $nome ?>, <?= $preco ?> foi alterado.</p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $nome ?> não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
