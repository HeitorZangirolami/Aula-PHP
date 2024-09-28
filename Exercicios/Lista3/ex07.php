<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Temperatura</title>
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
        <h2>Conversão de Temperatura</h2>
        <form method="post">
            <label for="fahrenheit">Temperatura em Fahrenheit:</label>
            <input type="number" name="fahrenheit" id="fahrenheit" step="0.01" required>
            
            <input type="submit" value="Converter para Celsius">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fahrenheit = $_POST['fahrenheit'];

            // Converte Fahrenheit para Celsius
            $celsius = ($fahrenheit - 32) * (5/9);

            echo "<div class='resultado'>Temperatura em Celsius: " . number_format($celsius, 2, ',', '.') . " °C</div>";
        }
        ?>
    </div>
</body>
</html>
