<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quilômetros para Milhas</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Conversão de Quilômetros para Milhas</h2>
        <form method="post">
            <input type="number" name="quilometros" placeholder="Valor em Quilômetros" required step="0.01">
            <input type="submit" value="Converter">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $quilometros = $_POST['quilometros'];
            $milhas = $quilometros * 0.621371;
            echo "<div class='resultado'>Valor em Milhas: " . number_format($milhas, 2, ',', '.') . " mi</div>";
        }
        ?>
    </div>
</body>
</html>
