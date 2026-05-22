<?php
    $usuario_correto = 'admin';
    $senha_correta = '123456';

    $hash_salva = password_hash($senha_correta, PASSWORD_DEFAULT);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        if ($usuario === $usuario_correto && password_verify($senha, $hash_salva)) {
            $mensagem = '<h2 style="color:green">Login realizado com sucesso!</h2>';
        } else {
            $mensagem = '<h2 style="color:red">Usuário ou senha incorretos!</h2>';
        }

        echo $mensagem;
    }
?>