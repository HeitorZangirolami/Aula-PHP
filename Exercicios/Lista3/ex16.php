<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preço com Desconto</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Cálculo do Preço com Desconto</h2>
        <form method="post">
            <input type="number" name="preco" placeholder="Preço Original" required step="0.01">
            <input type="number" name="desconto" placeholder="Percentual de Desconto" required step="0.01">
            <input type="submit" value="Calcular Preço com Desconto">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $preco = $_POST['preco'];
            $desconto = $_POST['desconto'];
            $preco_com_desconto = $preco * (1 - $desconto / 100);
            echo "<div class='resultado'>Preço com Desconto: " . number_format($preco_com_desconto, 2, ',', '.') . " R$</div>";
        }
        ?>
    </div>
</body>
</html>
