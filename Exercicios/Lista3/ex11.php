<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perímetro do Círculo</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Cálculo do Perímetro do Círculo</h2>
        <form method="post">
            <input type="number" name="raio" placeholder="Raio" required step="0.01">
            <input type="submit" value="Calcular Perímetro">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $raio = $_POST['raio'];
            $perimetro = 2 * pi() * $raio;
            echo "<div class='resultado'>Perímetro do Círculo: " . number_format($perimetro, 2, ',', '.') . " m</div>";
        }
        ?>
    </div>
</body>
</html>
