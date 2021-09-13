<?php  

	// 1º Passo: Recebendo os dados do formulario
	$dados = $_POST;

	// 2º Passo: Converter o array para uma string
	$dados = implode(" - ", $dados);

	// 3º Passo: Criar um arquivo no php
	$arquivo = fopen("cadastros.txt", "a+");

	// 4º Passo: Escrever os dados no arquivo
	fwrite($arquivo, $dados."\n");

	// 5º Passo: fechar o arquivo e redirecionar
	fclose($arquivo);

	header("location: listagem.php");


?>