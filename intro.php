<?php

define('QUEBRA', "</br>");

# Variaveis em php
#1. Iniciam sempre com o símbolo cifrão ($)
#2. São case sensitive
#3. Seguem os mesmos padrões de declaração de C e Java
#4. Suas declarações são sempre finalizadas com ponto e vírgula
#5. Os tipos de dados são dinâmicos, sem necessidade de declaração

# Declaração de variável

$nome = 'Leonardo Martins';
$idade = 23;
$salario = 1234.58;
$valido = true;
$valores = [1, 'Leo', $salario, true];

# Saída de dados, podendod ser string ou variavel
#1. echo valor1, "valor2", ..., valorN;
#2. echo(valor1);
#3. print(valor1);

# Observação: o salto de linha via pronto é através do escape "\n" ou pela constante PHP_EOL

echo ($idade . QUEBRA);

# Para arrays, são utilizados dois comandos para mostrar dados (print_r() e var_dump())
# Esses comandos mostram os valores e os índices de um array
# Normalmente variaveis dste tipo são utilizados em conjunto iterações (laços)

echo "<pre>";
print_r($valores);
echo "</pre>";

echo "<pre>";
var_dump($valores);
echo "</pre>";

# Estrutura de decisão IF - ELSIF - ELSE
# Pode ser usado de duas formas: com {} ou : -> endif;

# Forma 1

# rand(min, max) gera números aleatorios dentro do intervalo

$idade = rand(0, 99);

if ($idade < 18) {
    echo "$idade é menor de idade" . QUEBRA;
} elseif ($idade > 17 && $idade < 60) {
    echo "$idade é maior de idade" . QUEBRA;
} else {
    echo "$idade é terceira idade" . QUEBRA;
}

# Forma 2

$idade = rand(0, 99);

if ($idade < 18):
    echo "$idade é menor de idade" . QUEBRA;
elseif ($idade > 17 && $idade < 60):
    echo "$idade é maior de idade" . QUEBRA;
else:
    echo "$idade é terceira idade" . QUEBRA;
endif;

# Estrutura de seleção (switch e match)

$valor = rand(0, 3);
switch($valor){
    case 1:
        echo "Valor $valor" . QUEBRA;
        break;
    case 2:
        echo "Valor $valor". QUEBRA;
        break;
    default:
        echo "Valor $valor não localizado" . QUEBRA;
        break;
}

# PHP 8 - match

$valor = rand(0, 3);

$resultado = match($valor){
    1 => "Valor $valor",
    2 => "Valor $valor",
    default => "Valor não encontrado",
};
echo $resultado . QUEBRA;

