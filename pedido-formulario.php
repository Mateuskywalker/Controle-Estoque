<?php require_once("cabecalho.php");

$id_produto = $_GET["id"];

?>
	<h1>Dados do cliente</h1>
	<form action="adiciona-pedido.php" method="post">
		<table class="table">
			<input type="hidden" name="id_produto" value="<?=$id_produto?>">
            <tr>
                <td>Nome</td>
                <td> <input class="form-control" type="text" name="nome"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input  class="form-control" type="email" name="email"></td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td><textarea class="form-control" name="telefone" placeholder="Insira assim: xxxx-xxxx"></textarea></td>
            </tr>

			<tr>
				<td>
					<button class="btn btn-primary" type="submit">Fazer pedido</button>
				</td>
			</tr>
		</table>
	</form>
<?php include("rodape.php"); ?>
