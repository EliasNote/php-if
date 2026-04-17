<?php
require_once 'conexao.php';

// Recupera o id via GET
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Inicializa variáveis
$nome = '';
$autor = '';

// Busca os dados do livro
if ($id > 0) {
    $sql = $conn->prepare("SELECT * FROM livros WHERE id = ?");
    $sql->bind_param("i", $id);
    $sql->execute();
    $result = $sql->get_result();
    if ($result && $result->num_rows > 0) {
        $livro = $result->fetch_assoc();
        $nome = $livro['nome'];
        $autor = $livro['autor'];
    }
    $sql->close();
}

// Atualiza os dados se enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $nome = $_POST['nome'];
    $autor = $_POST['autor'];
    $sql = $conn->prepare("UPDATE livros SET nome=?, autor=? WHERE id=?");
    $sql->bind_param("ssi", $nome, $autor, $id);
    if ($sql->execute()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao atualizar: " . $sql->error;
    }
    $sql->close();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Biblioteca - SisBib</title>
    <style>
        body { font-family: Arial, sans-serif; }
        label { display: inline-block; width: 60px; }
        input[type="text"] { width: 200px; }
        .form-group { margin-bottom: 8px; }
    </style>
</head>
<body>
    <h1>Sistema de Biblioteca - SisBib</h1>
    <h2>Atualizar Informações - Livro</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" name="id" id="id" value="<?php echo htmlspecialchars($id); ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nome">Título:</label>
            <input type="text" name="nome" id="nome" value="<?php echo htmlspecialchars($nome); ?>" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" name="autor" id="autor" value="<?php echo htmlspecialchars($autor); ?>" required>
        </div>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>
