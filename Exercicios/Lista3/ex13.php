<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metros para Centímetros</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Conversão de Metros para Centímetros</h2>
        <form method="post">
            <input type="number" name="metros" placeholder="Valor em Metros" required step="0.01">
            <input type="submit" value="Converter">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $metros = $_POST['metros'];
            $centimetros = $metros * 100;
            echo "<div class='resultado'>Valor em Centímetros: " . number_format($centimetros, 2, ',', '.') . " cm</div>";
        }
        ?>
    </div>
</body>
</html>
