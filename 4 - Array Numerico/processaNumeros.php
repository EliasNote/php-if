<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numeros = [];
    for ($i = 1; $i <= 5; $i++) {
        $campo = 'num' . $i;
        $numeros[] = $_POST[$campo];
        echo "Número inserido: " . $numeros[$i-1] . "<br>";
    }
    echo "<br><strong>Array Completo:</strong><br>";
    print_r($numeros);
}
?>
