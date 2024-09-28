<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números</title>
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
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #218838;
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
        <h2>Calculadora de Soma</h2>
        <form method="post">
            <label for="numero1">Número 1:</label>
            <input type="number" name="numero1" id="numero1" required>
            
            <label for="numero2">Número 2:</label>
            <input type="number" name="numero2" id="numero2" required>
            
            <input type="submit" value="Somar">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $soma = $numero1 + $numero2;

            echo "<div class='resultado'>Resultado: $soma</div>";
        }
        ?>
    </div>
</body>
</html>
