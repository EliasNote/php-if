<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $xml = new SimpleXMLElement('<conta_bancaria/>');

    $conta = $xml -> addChild('conta');
    $conta -> addChild('agencia', $_POST['agencia']);
    $conta -> addChild('numero', $_POST['numero']);
    $conta -> addChild('nome_cliente', $_POST['nome_cliente']);
    $conta -> addChild('saldo_atual', $_POST['saldo_atual']);
    $conta -> addChild('ultima_movimentacao', $_POST['ultima_movimentacao']);

    $xml->asXML('conta_bancaria.xml');

    echo "Arquivo XML de conta bancária criado com sucesso!";
}
?>
