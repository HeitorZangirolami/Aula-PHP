<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potência</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Cálculo de Potência</h2>
        <form method="post">
            <input type="number" name="base" placeholder="Base" required step="0.01">
            <input type="number" name="expoente" placeholder="Expoente" required>
            <input type="submit" value="Calcular Potência">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $base = $_POST['base'];
            $expoente = $_POST['expoente'];
            $resultado = pow($base, $expoente);
            echo "<div class='resultado'>Resultado: " . number_format($resultado, 2, ',', '.') . "</div>";
        }
        ?>
    </div>
</body>
</html>
