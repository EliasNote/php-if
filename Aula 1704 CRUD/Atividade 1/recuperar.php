<?php

require_once 'conexao.php';

//Verifica a conexão
if ($conn->connect_error){
	die("Falha na conexão: " . $conn->connect_error);
}

//Criando SQL da consulta
$sql = "SELECT * FROM livros";
$result = $conn->query($sql);

//Verificando se houve retorno

if ($result && $result->num_rows > 0){
	echo "<table border='1' cellpadding='5' cellspacing='0'>";
	echo "<tr><th>Código</th><th>Livro</th><th>Autor</th></tr>";
	while ($linha = $result->fetch_assoc()){
		echo "<tr>";
		echo "<td>" . htmlspecialchars($linha['id']) . "</td>";
		echo "<td>" . htmlspecialchars($linha['nome']) . "</td>";
		echo "<td>" . htmlspecialchars($linha['autor']) . "</td>";
		echo "</tr>";
	}
	echo "</table>";
} else {
	echo "Nenhum resultado recebido.";
}

$conn->close();

?>