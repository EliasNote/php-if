<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $nome1 = $_POST['nome1'];
        $telefone1 = $_POST['telefone1'];
        $email1 = $_POST['email1'];

        $nome2 = $_POST['nome2'];
        $telefone2 = $_POST['telefone2'];
        $email2 = $_POST['email2'];

        $lista_contatos[1] = [
            'nome' => $nome1,
            'telefone' => $telefone1,
            'email' => $email1
        ];

        $lista_contatos[2] = [
            'nome' => $nome2,
            'telefone' => $telefone2,
            'email' => $email2
        ];

        echo "<h2>Dados Recebidos</h2>";
        echo "<br>";
        echo "Array Completa: ";
        print_r($lista_contatos);

        echo "<br>";

        echo "<h3>Lista de Contatos:</h3>";
        foreach($lista_contatos as $contato){
            echo "Nome: ";
            print_r($contato['nome']);
            echo "<br>";
        }

    }

?>