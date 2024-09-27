<?php require("cabecalho.php"); ?>

<h1>Exercício 03</h1>

<?php

echo "<h2>Distribuição de Bônus Anual</h2>";


$lucro = 5000;


$funcionarios = [
    ['nome' => 'Heitor', 'escalafao' => 5],
    ['nome' => 'Seiya', 'escalafao' => 3],
    ['nome' => 'Gojo', 'escalafao' => 1],
    ['nome' => 'Pedro', 'escalafao' => 2],
    ['nome' => 'Lincoln', 'escalafao' => 4],
];


$percentuais = [
    1 => 0.1,  
    2 => 0.2,  
    3 => 0.3,  
    4 => 0.5,  
    5 => 0.7,  
];


$bonusDistribuido = [];


foreach ($funcionarios as $funcionario) {
    $escalafao = $funcionario['escalafao'];
    $percentual = $percentuais[$escalafao] ?? 0;  
    $bonus = $lucro * $percentual;
    
   
    $bonusDistribuido[] = [
        'nome' => $funcionario['nome'],
        'bonus' => $bonus
    ];
}


echo "<table class='table'>";
echo "<tr><th>Funcionário</th><th>Bônus (R$)</th></tr>";
foreach ($bonusDistribuido as $bonus) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($bonus['nome']) . "</td>";  
    echo "<td>R$ " . number_format($bonus['bonus'], 2, ',', '.') . "</td>";
    echo "</tr>";
}
echo "</table>";

require("rodape.php");
?>
