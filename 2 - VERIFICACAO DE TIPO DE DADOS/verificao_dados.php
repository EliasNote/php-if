<?php

$var = 10.2;

echo "<h2>Teste de verificação</h2>";
echo "Dado a ser verificado: $var";
echo "<br>";

echo "<h3>Resultado da Verificação</h3>";
echo "Tipo de dado detectado: <strong>" . gettype($var) . "</strong><br>";

if(is_float($var)){
	echo "É um Float.";
} else {
	echo "Não é um Float.";
}

echo "<br>";

if(is_string($var)){
	echo "É uma String.";
} else {
	echo "Não é uma String.";
}

echo "<br>";
?>
