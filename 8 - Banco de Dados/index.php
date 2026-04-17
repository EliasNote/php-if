<?php

$host = "db";
$user = "root";
$senha = "root";
$db = "bancoteste";

$conn = new mysqli($host, $user, $senha, $db);

//Verifica a conexão
if ($conn->connect_error){
	die("Falha na conexão: " . $conn->connect_error);
}

//Criando SQL da consulta
$sql = "SELECT * FROM livros";
$result = $conn->query($sql);

//Verificando se houve retorno
if ($result && $result->num_rows > 0){
	while ($linha = $result->fetch_assoc()){
		print_r($linha);
		echo "<br>";
	}
} else {
	echo "Nenhum resultado recebido.";
}

$conn->close();

?>
