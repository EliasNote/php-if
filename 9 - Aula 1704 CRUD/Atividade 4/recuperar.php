<?php

require_once 'conexao.php';

if ($conn->connect_error){
	die("Falha na conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM livros";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0){
	echo "<table border='1' cellpadding='5' cellspacing='0'>";
	echo "<tr><th>Código</th><th>Livro</th><th>Autor</th></tr>";
	while ($linha = $result->fetch_assoc()){
		echo "<tr>";
		echo "<td>" . htmlspecialchars($linha['id']) . "</td>";
		echo "<td>" . htmlspecialchars($linha['nome']) . "</td>";
		echo "<td>" . htmlspecialchars($linha['autor']) . "</td>";
		echo '<td><a href="form-update.php?id=' . urlencode($linha['id']) . '">Editar</a></td>';
		echo '<td><a href="deletar.php?id=' . urlencode($linha['id']) . '" onclick="return confirm(\'Tem certeza que deseja deletar este livro?\');"">Deletar</a></td>';
		echo "</tr>";
	}
	echo "</table>";
} else {
	echo "Nenhum resultado recebido.";
}

$conn->close();

?>