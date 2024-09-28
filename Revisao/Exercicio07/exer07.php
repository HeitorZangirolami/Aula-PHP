<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação de Desempenho do Projeto</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f5f5f5; padding: 50px; }
        .container { max-width: 500px; margin: auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        .resultado { margin-top: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Avaliação de Desempenho do Projeto</h2>
        <form method="post">
            <input type="number" name="prazo" placeholder="Prazo para Finalização (dias)" required step="1">
            <input type="number" name="atividades_total" placeholder="Total de Atividades" required step="1">
            <input type="number" name="atividades_concluidas" placeholder="Atividades Concluídas" required step="1">
            <input type="number" name="produtividade" placeholder="Atividades por Dia" required step="1">
            <input type="submit" value="Avaliar Desempenho">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $prazo = $_POST['prazo'];
            $atividades_total = $_POST['atividades_total'];
            $atividades_concluidas = $_POST['atividades_concluidas'];
            $produtividade = $_POST['produtividade'];

            $atividades_restantes = $atividades_total - $atividades_concluidas;
            $dias_necessarios = ceil($atividades_restantes / $produtividade);

            if ($dias_necessarios <= $prazo) {
                echo "<div class='resultado'>Projeto está dentro do prazo!</div>";
            } else {
                echo "<div class='resultado'>Projeto atrasado! Dias necessários: $dias_necessarios</div>";
            }
        }
        ?>
    </div>
</body>
</html>
