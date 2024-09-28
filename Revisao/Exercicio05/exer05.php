<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Dias de Férias</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f5f5f5; padding: 50px; }
        .container { max-width: 400px; margin: auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        .resultado { margin-top: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cálculo de Dias de Férias</h2>
        <form method="post">
            <input type="number" name="dias_trabalhados" placeholder="Total de Dias Trabalhados" required>
            <input type="submit" value="Calcular Férias">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dias_trabalhados = $_POST['dias_trabalhados'];
            $ferias = floor($dias_trabalhados / 30);
            if ($ferias > 30) $ferias = 30; // Limite de 30 dias
            echo "<div class='resultado'>Dias de Férias: $ferias</div>";
        }
        ?>
    </div>
</body>
</html>
