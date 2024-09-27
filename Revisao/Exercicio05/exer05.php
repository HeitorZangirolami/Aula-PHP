<?php require("cabecalho.php"); ?>

<h1>Cálculo de Dias de Férias</h1>

<form action="exer5.php" method="post">
    <div class="row">
        <div class="col">
            <label for="dias_trabalhados" class="form-label">Informe a quantidade de dias trabalhados:</label>
            <input type="number" name="dias_trabalhados" id="dias_trabalhados" class="form-control" required />
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular Férias</button>
        </div>
    </div>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $diasTrabalhados = intval($_POST['dias_trabalhados']);
    
    // Calcula os dias de férias
    $diasFerias = floor($diasTrabalhados / 30);
    
    // Limita o máximo de dias de férias a 30
    if ($diasFerias > 30) {
        $diasFerias = 30;
    }
    
    echo "<div class='alert alert-info'>O funcionário tem direito a $diasFerias dias de férias.</div>";
}

require("rodape.php");
?>
