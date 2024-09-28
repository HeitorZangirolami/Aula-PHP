<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atribuição de Tarefas</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f5f5f5; padding: 50px; }
        .container { max-width: 500px; margin: auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        .resultado { margin-top: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Atribuição de Tarefas</h2>
        <form method="post">
            <h3>Dados da Tarefa</h3>
            <input type="text" name="nome_tarefa" placeholder="Nome da Tarefa" required>
            <input type="number" name="horas_tarefa" placeholder="Total de Horas da Tarefa" required step="0.01">
            <select name="complexidade" required>
                <option value="" disabled selected>Complexidade</option>
                <option value="baixa">Baixa</option>
                <option value="media">Média</option>
                <option value="alta">Alta</option>
            </select>

            <h3>Dados do Funcionário</h3>
            <input type="text" name="nome_funcionario" placeholder="Nome do Funcionário" required>
            <input type="number" name="horas_disponiveis" placeholder="Horas Disponíveis" required step="0.01">
            <select name="nivel_experiencia" required>
                <option value="" disabled selected>Nível de Experiência</option>
                <option value="junior">Júnior</option>
                <option value="pleno">Pleno</option>
                <option value="senior">Sênior</option>
            </select>

            <input type="submit" value="Atribuir Tarefa">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome_tarefa = $_POST['nome_tarefa'];
            $horas_tarefa = $_POST['horas_tarefa'];
            $complexidade = $_POST['complexidade'];
            $nome_funcionario = $_POST['nome_funcionario'];
            $horas_disponiveis = $_POST['horas_disponiveis'];
            $nivel_experiencia = $_POST['nivel_experiencia'];

            // Verificações
            $disponibilidade = $horas_disponiveis >= ($horas_tarefa * 1.1);
            $complexidade_permitida = false;

            switch ($nivel_experiencia) {
                case 'junior':
                    $complexidade_permitida = ($complexidade == 'baixa');
                    break;
                case 'pleno':
                    $complexidade_permitida = ($complexidade == 'baixa' || $complexidade == 'media');
                    break;
                case 'senior':
                    $complexidade_permitida = ($complexidade == 'media' || $complexidade == 'alta');
                    break;
            }

            if ($disponibilidade && $complexidade_permitida) {
                echo "<div class='resultado'>Tarefa '$nome_tarefa' atribuída ao funcionário '$nome_funcionario' com sucesso!</div>";
            } else {
                echo "<div class='resultado'>Tarefa não pode ser atribuída. Verifique a disponibilidade ou complexidade.</div>";
            }
        }
        ?>
    </div>
</body>
</html>
