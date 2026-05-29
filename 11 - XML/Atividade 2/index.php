<?php
$xml = simplexml_load_file("cardapio.xml");

foreach($xml -> item as $item){
    echo "Código: " . $item -> codigo . "<br>";
    echo "Nome: " . $item -> nome . "<br>";
    echo "Descrição: " . $item -> descricao . "<br>";
    echo "Valor: R$" . $item -> valor . "<br><br>";
}
?>
