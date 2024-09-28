<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Retângulo</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f5f5f5; padding: 50px; }
        .container { max-width: 400px; margin: auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        h2 { text-align: center; }
        input { width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 4px; }
        input[type="submit"] { background-color: #007bff; color: white; border: none; cursor: pointer; }
        input[type="submit"]:hover { background-color: #0056b3; }
        .resultado { margin-top: 20px; font-size: 18px; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cálculo da Área do Retângulo</h2>
        <form method="post">
            <input type="number" name="largura" placeholder="Largura" required step="0.01">
            <input type="number" name="altura" placeholder="Altura" required step="0.01">
            <input type="submit" value="Calcular Área">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $largura = $_POST['largura'];
            $altura = $_POST['altura'];
            $area = $largura * $altura;
            echo "<div class='resultado'>Área do Retângulo: " . number_format($area, 2, ',', '.') . " m²</div>";
        }
        ?>
    </div>
</body>
</html>
