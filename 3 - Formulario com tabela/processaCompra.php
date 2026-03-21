<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $produto = $_POST["produto"];
        $valor = $_POST["valor"];
        $quantidade = $_POST["quantidade"];
        $total = $valor * $quantidade;
        echo "<h2>Resumo da Compra</h2>";
        echo "<strong>Produto:</strong> " . $produto . "<br>";
        echo "<strong>Valor unitário:</strong> R$ " . $valor . "<br>";
        echo "<strong>Quantidade:</strong> " . $quantidade . "<br>";
        echo "<strong>Gasto total:</strong> R$ " . $total;
    }
?>
