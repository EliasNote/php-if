<?php

include "conexao.php";



if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $autor = $_POST['autor'];

    $sql = $conn->prepare("INSERT INTO livros(nome,autor,status) VALUES (?, ?, 1)");

    if(!$sql){
        die("Erro na preparação da query: " . $conn->error);
    }

    $sql->bind_param("ss", $nome, $autor);

    if($sql->execute()){
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao inserir: " . $sql->error;
    }

    $sql->close();
    $conn->close();
}

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
    <h2>Cadastrar Novo Livro</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="nome">Título:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" name="autor" id="autor" required>
        </div>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>
<?php
?>
