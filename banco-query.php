<?php

 require_once("conecta.php");

/* Tabela de produtos*/
function listaProdutos($conexao) {
	$produtos = array();
	$resultado = mysqli_query($conexao, "select * from Produto");
	while($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao) {
	$query = "insert into Produto (nome, preco, descricao) values ('{$nome}', {$preco}, '{$descricao}')";
	return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao) {
	$query = "update Produto set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}' where id = '{$id}'";
	return mysqli_query($conexao, $query);
}


function buscaProduto($conexao, $id) {
	$query = "select * from Produto where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function removeProduto($conexao, $id) {
	$query = "delete from Produto where id = {$id}";
	return mysqli_query($conexao, $query);
}

/* Tabela de Clientes*/

function insereCliente($conexao, $nome, $email, $telefone) {
	$query = "insert into Cliente (nome, email, telefone) values ('{$nome}', '{$email}', '{$telefone}')";
	return mysqli_query($conexao, $query);
}



/* Tabele de Pedidos */
function inserePedido($conexao, $id_produto, $id_cliente){

    $query = "insert into Pedido( id_produto, id_cliente) value ({$id_produto},{$id_cliente})";
    return mysqli_query($conexao, $query);
}


function listaPedido($conexao) {
	$query = "select * from Pedido";
	return mysqli_query($conexao, $query);
}

function buscaCliente($conexao, $nome) {
	$query = "select * from Cliente where nome = '{$nome}'";
	$resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);

}

function removePedido($conexao, $id) {
	$query = "delete from Pedido where id = {$id}";
	return mysqli_query($conexao, $query);
}
