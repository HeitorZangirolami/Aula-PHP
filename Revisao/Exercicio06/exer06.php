<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estimativa de Custos do Projeto</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f5f5f5; padding: 50px; }
        .container { max-width: 400px; margin: auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        .resultado { margin-top: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Estimativa de Custos do Projeto</h2>
        <form method="post">
            <input type="number" name="horas_previstas" placeholder="Horas Previstas" required step="0.01">
            <input type="number" name="taxa_por_hora" placeholder="Taxa por Hora" required step="0.01">
            <input type="number" name="custos_adicionais" placeholder="Custos Adicionais" required step="0.01">
            <input type="submit" value="Calcular Custos">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $horas_previstas = $_POST['horas_previstas'];
            $taxa_por_hora = $_POST['taxa_por_hora'];
            $custos_adicionais = $_POST['custos_adicionais'];

            $custo_total = ($horas_previstas * $taxa_por_hora) + $custos_adicionais;

            echo "<div class='resultado'>Custo Total do Projeto: " . number_format($custo_total, 2, ',', '.') . " R$</div>";
        }
        ?>
    </div>
</body>
</html>
