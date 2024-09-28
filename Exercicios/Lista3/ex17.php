<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros Simples</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Cálculo de Juros Simples</h2>
        <form method="post">
            <input type="number" name="capital" placeholder="Capital" required step="0.01">
            <input type="number" name="taxa" placeholder="Taxa de Juros (%)" required step="0.01">
            <input type="number" name="periodo" placeholder="Período (anos)" required step="1">
            <input type="submit" value="Calcular Juros">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $capital = $_POST['capital'];
            $taxa = $_POST['taxa'] / 100;
            $periodo = $_POST['periodo'];
            $juros = $capital * $taxa * $periodo;
            echo "<div class='resultado'>Juros Simples: " . number_format($juros, 2, ',', '.') . " R$</div>";
        }
        ?>
    </div>
</body>
</html>
