<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];

        $contato['contatos'] = [
            'Nome' => $nome,
            'Telefone' => $telefone,
            'E-mail' => $email
        ];

        echo "<h2>Dados Recebidos<\h2>";
        echo "<br>";
        echo "Array Completa: ";
        print_r($contato);

        echo "<br>";

        echo "Nome do Contato: ";
        print_r($contato['contatos']['Nome']);

    }

?>