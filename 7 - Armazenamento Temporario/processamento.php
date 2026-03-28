<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION['nome'] = $_POST['nome'];
        $_SESSION['telefone'] = $_POST['telefone'];
    }

    echo "<h2>Resultado</h2>";
    echo $_SESSION['nome'];
    echo "<br>";
    echo $_SESSION['telefone'];

?>