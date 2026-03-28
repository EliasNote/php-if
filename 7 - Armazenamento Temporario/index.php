<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <title>Armazenamento Temporário</title>
</head>
<body>
    
    <h1>Teste de Armazenamento</h1>

    <form method="POST" action="processamento.php">
        <table>
            <tr>
                <td><label>Nome:</label></td>
                <td><input type="text" name="nome" required/></td>
            </tr>
            <tr>
                <td><label>Telefone:</label></td>
                <td><input type="text" name="telefone" maxlength="12" required/></td>
            </tr>
        </table>
        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>

</body>
</html>