<?php require("cabecalho.php"); ?>

<h1>Exercício 02</h1>

<form action="exer02.php" method="post"> 
    <div class="row"> 
        <div class="col">
            <label for="hora_inicial" class="form-label">Informe a hora inicial:</label>
            <input type="time" name="hora_inicial" id="hora_inicial" class="form-control" required/>
        </div>

        <div class="col">
            <label for="hora_final" class="form-label">Informe a hora final:</label>
            <input type="time" name="hora_final" id="hora_final" class="form-control" required/>
        </div>
    </div>

    <div class="row"> 
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular Salário Semanal</button>
        </div>
    </div>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['hora_inicial'], $_POST['hora_final'])) {
    // Criação dos objetos DateTime para as horas informadas
    $hora_inicial = new DateTime($_POST['hora_inicial']);
    $hora_final = new DateTime($_POST['hora_final']);

    // Calcular a diferença de tempo entre as horas
    $diferenca = $hora_final->diff($hora_inicial);

    // Definir o valor da hora trabalhada
    $valorHora = 20.00;

    // Calcular o total de horas trabalhadas (incluindo fração de minutos)
    $horasTrabalhadas = $diferenca->h + ($diferenca->i / 60);

    // Calcular o salário semanal (considerando que o cálculo foi feito para um único dia de trabalho)
    $diasPorSemana = 5; // considerando uma semana de 5 dias úteis
    $salarioSemanal = $horasTrabalhadas * $valorHora * $diasPorSemana;

    // Exibir o salário semanal formatado em reais
    echo "<p>Salário Semanal: R$ " . number_format($salarioSemanal, 2, ',', '.') . "</p>";
}

require("rodape.php");
?>
