<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Média das Notas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 50px;
        }
        .container {
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .resultado {
            margin-top: 20px;
            font-size: 18px;
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cálculo da Média</h2>
        <form method="post">
            <label for="nota1">Nota 1:</label>
            <input type="number" name="nota1" id="nota1" step="0.01" required>
            
            <label for="nota2">Nota 2:</label>
            <input type="number" name="nota2" id="nota2" step="0.01" required>
            
            <label for="nota3">Nota 3:</label>
            <input type="number" name="nota3" id="nota3" step="0.01" required>
            
            <input type="submit" value="Calcular Média">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];

            // Calcula a média
            $media = ($nota1 + $nota2 + $nota3) / 3;

            echo "<div class='resultado'>Média: " . number_format($media, 2, ',', '.') . "</div>";
        }
        ?>
    </div>
</body>
</html>
