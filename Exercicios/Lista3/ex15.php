<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do IMC</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Cálculo do IMC</h2>
        <form method="post">
            <input type="number" name="peso" placeholder="Peso em kg" required step="0.01">
            <input type="number" name="altura" placeholder="Altura em metros" required step="0.01">
            <input type="submit" value="Calcular IMC">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            $imc = $peso / pow($altura, 2);
            echo "<div class='resultado'>IMC: " . number_format($imc, 2, ',', '.') . "</div>";
        }
        ?>
    </div>
</body>
</html>
