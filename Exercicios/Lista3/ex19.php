<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Dias</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Conversão de Dias</h2>
        <form method="post">
            <input type="number" name="dias" placeholder="Valor em Dias" required step="1">
            <input type="submit" value="Converter">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dias = $_POST['dias'];
            $horas = $dias * 24;
            $minutos = $dias * 1440;
            $segundos = $dias * 86400;
            echo "<div class='resultado'>Horas: $horas, Minutos: $minutos, Segundos: $segundos</div>";
        }
        ?>
    </div>
</body>
</html>
