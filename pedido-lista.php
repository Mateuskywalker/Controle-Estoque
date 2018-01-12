<?php require_once("cabecalho.php");
 require_once("banco-query.php");

 if(isset($_GET['removido']) && $_GET['removido'] == true){?>
     <p class="alert alert-success">Pedido removido com sucesso!</p>

 <?php

}

 ?>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Cliente</td>
            <td>Produto</td>
        </tr>
    </thead>

    <?php

        $pedidos = listaPedido($conexao);
		foreach($pedidos as $pedido) :
	?>

	<tr>
		<td>Identificação do cliente: <?= $pedido['id_cliente'] ?></td>
		<td>Identificação do produto: <?= $pedido['id_produto'] ?></td>

		<td>
			<form action="remove-pedido.php" method="post">
				<input type="hidden" name="id" value="<?=$pedido['id']?>">
				<button class="btn btn-danger">remover</button>
			</form>
		</td>
	</tr>

	<?php
		endforeach
	?>
</table>
<?php include("rodape.php"); ?>
