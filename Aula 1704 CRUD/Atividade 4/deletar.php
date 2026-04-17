<?php
require_once 'conexao.php';

// Aceita remoção via GET ou POST
$id = null;
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);
} elseif ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['id'])) {
    $id = intval($_GET['id']);
}

if ($id) {
    $sql = $conn->prepare("DELETE FROM livros WHERE id = ?");
    $sql->bind_param("i", $id);
    if ($sql->execute()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao deletar: " . $sql->error;
    }
    $sql->close();
}
$conn->close();
?>
