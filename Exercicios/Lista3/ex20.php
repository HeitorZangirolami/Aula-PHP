<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velocidade Média</title>
    <style>
       
    </style>
</head>
<body>
    <div class="container">
        <h2>Cálculo da Velocidade Média</h2>
        <form method="post">
            <input type="number" name="distancia" placeholder="Distância (km)" required step="0.01">
            <input type="number" name="tempo" placeholder="Tempo (horas)" required step="0.01">
            <input type="submit" value="Calcular Velocidade Média">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $distancia = $_POST['distancia'];
            $tempo = $_POST['tempo'];
            $velocidade_media = $distancia / $tempo;
            echo "<div class='resultado'>Velocidade Média: " . number_format($velocidade_media, 2, ',', '.') . " km/h</div>";
        }
        ?>
    </div>
</body>
</html>
