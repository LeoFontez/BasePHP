<?php

define('QUEBRA', "</br>");

#while
$contador = 1;

while($contador < 11){
    echo $contador . QUEBRA;
    $contador++;
}

while ($contador < 11):
    echo $contador. QUEBRA;
    $contador++;
endwhile;
 
#foreach para percorrer arrays;

/*$salario = 1234.56
$valores = [1, 'Leo', $salario];

for ($i=0; $i < sizeof($valores); $i++) { #sizeof conta o numero de elementos de um array
    echo $valores[$i] . QUEBRA;
}

foreach ($valores as $valor) {
    echo $valor . QUEBRA;
}
*/

# Arrays Associativos
# São arrays declarados com o par "chave =>valor", funcionando com dicionário (JSON)
$pessoa = [
    'id' => 1,
    'nome' => 'Leonardo',
    'salario' => 1200.00,
];

echo $pessoa['id'].QUEBRA;
echo $pessoa['nome'] . QUEBRA;
echo $pessoa['salario'] . QUEBRA;

echo "<pre>";
print_r($pessoa);
echo "</pre>";

#usando foreach
foreach($pessoa as $chave=> $valor){
    echo $chave . ': ' . $valor . QUEBRA;
}

foreach ($pessoa as $chave => $valor) {
    if ($chave == 'id' && $valor == 1){
        echo $pessoa['nome'] . PHP_EOL;
    }
}

# Desafio: Criar e percorrer um array que contenha três alunos.
# A saída devera mostrar: ra, nome e semestre de cada aluno indiviualmente

$alunos = [
    ['ra' => 123,
     'nome' => 'Fernando',
     'semestre' => 1,
    ],
    ['ra' => 456,
    'nome' => 'Luciano',
    'semestre' => 2,
    ],
    ['ra' => 789,
     'nome' => 'Ana',
     'semestre' => 1,
    ],
];

# percorrendo os alunos
# array mais externo que contém os outros arrays de alunos
foreach ($alunos as $aluno) {
    # percorre cada aluno
    foreach ($aluno as $key => $value) {
        echo $key . ': ' . $value . QUEBRA;
    }
    echo QUEBRA;
}