<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Círculo</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Cálculo da Área do Círculo</h2>
        <form method="post">
            <input type="number" name="raio" placeholder="Raio" required step="0.01">
            <input type="submit" value="Calcular Área">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $raio = $_POST['raio'];
            $area = pi() * pow($raio, 2);
            echo "<div class='resultado'>Área do Círculo: " . number_format($area, 2, ',', '.') . " m²</div>";
        }
        ?>
    </div>
</body>
</html>
