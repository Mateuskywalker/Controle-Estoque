<?php require_once("cabecalho.php");
 require_once("banco-query.php");

 if(isset($_GET['removido']) && $_GET['removido'] == true){?>
     <p class="alert alert-success">Produto removido com sucesso!</p>

 <?php

}

 ?>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Nome</td>
            <td>Preço</td>
            <td>Descrição</td>
        </tr>
    </thead>

    <?php
		$produtos = listaProdutos($conexao);
		foreach($produtos as $produto) :
	?>

	<tr>
		<td><?= $produto['nome'] ?></td>
		<td><?= $produto['preco'] ?></td>
		<td><?= substr($produto['descricao'], 0, 40) ?></td>
		<td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">alterar</a></td>
        <td><a class="btn btn-primary" href="pedido-formulario.php?id=<?=$produto['id']?>">registrar pedido</a></td>
		<td>
			<form action="remove-produto.php" method="post">
				<input type="hidden" name="id" value="<?=$produto['id']?>">
				<button class="btn btn-danger">remover</button>
			</form>
		</td>
	</tr>
	<?php
		endforeach
	?>
</table>
<?php include("rodape.php"); ?>
