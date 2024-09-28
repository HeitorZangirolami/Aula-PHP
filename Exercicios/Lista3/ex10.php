<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perímetro do Retângulo</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Cálculo do Perímetro do Retângulo</h2>
        <form method="post">
            <input type="number" name="largura" placeholder="Largura" required step="0.01">
            <input type="number" name="altura" placeholder="Altura" required step="0.01">
            <input type="submit" value="Calcular Perímetro">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $largura = $_POST['largura'];
            $altura = $_POST['altura'];
            $perimetro = 2 * ($largura + $altura);
            echo "<div class='resultado'>Perímetro do Retângulo: " . number_format($perimetro, 2, ',', '.') . " m</div>";
        }
        ?>
    </div>
</body>
</html>
