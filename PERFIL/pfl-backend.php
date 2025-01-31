<?php
function calcularPorcentagens($valor1, $valor2) {
    // Soma total dos dois valores
    $somaTotal = $valor1 + $valor2;

    // Calculando as porcentagens
    $porcentagem1 = ($valor1 / $somaTotal) * 100;
    $porcentagem2 = ($valor2 / $somaTotal) * 100;

    // Retorna as porcentagens
    return array(
        'valor1' => round($porcentagem1, 2),
        'valor2' => round($porcentagem2, 2)
    );
}

// Exemplo de uso
$valores = calcularPorcentagens(20, 25);
echo "Valor 1: " . $valores['valor1'] . "%\n";
echo "Valor 2: " . $valores['valor2'] . "%\n";
?>
