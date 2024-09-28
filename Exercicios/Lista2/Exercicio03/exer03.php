<?php

// Classe abstrata Telefone
abstract class Telefone {
    protected $ddd;
    protected $numero;

    public function __construct($ddd, $numero) {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    public function getDdd() {
        return $this->ddd;
    }

    public function getNumero() {
        return $this->numero;
    }

    public abstract function calculaCusto($tempo);
}

// Classe Fixo que estende Telefone
class Fixo extends Telefone {
    private $custoPorMinuto;

    public function __construct($ddd, $numero, $custoPorMinuto) {
        parent::__construct($ddd, $numero);
        $this->custoPorMinuto = $custoPorMinuto;
    }

    public function getCustoPorMinuto() {
        return $this->custoPorMinuto;
    }

    public function calculaCusto($tempo) {
        return $this->custoPorMinuto * $tempo;
    }

    public function __toString() {
        return "Telefone Fixo: (DDD: $this->ddd) $this->numero, Custo por minuto: R$ " . number_format($this->custoPorMinuto, 2, ',', '.');
    }
}

// Classe Celular que estende Telefone
abstract class Celular extends Telefone {
    protected $custoMinutoBase;
    protected $operadora;

    public function __construct($ddd, $numero, $custoMinutoBase, $operadora) {
        parent::__construct($ddd, $numero);
        $this->custoMinutoBase = $custoMinutoBase;
        $this->operadora = $operadora;
    }

    public function getCustoMinutoBase() {
        return $this->custoMinutoBase;
    }

    public function getNomeOperadora() {
        return $this->operadora;
    }
}

// Classe PrePago que estende Celular
class PrePago extends Celular {
    public function calculaCusto($tempo) {
        return $tempo * ($this->custoMinutoBase * 1.4); // Custo com 40% de acréscimo
    }

    public function __toString() {
        return "Telefone Pré-Pago: (DDD: $this->ddd) $this->numero, Operadora: $this->operadora, Custo por minuto: R$ " . number_format($this->custoMinutoBase * 1.4, 2, ',', '.');
    }
}

// Classe PosPago que estende Celular
class PosPago extends Celular {
    public function calculaCusto($tempo) {
        return $tempo * ($this->custoMinutoBase * 0.9); // Custo com 10% de desconto
    }

    public function __toString() {
        return "Telefone Pós-Pago: (DDD: $this->ddd) $this->numero, Operadora: $this->operadora, Custo por minuto: R$ " . number_format($this->custoMinutoBase * 0.9, 2, ',', '.');
    }
}

// Exemplo de uso
$telefoneFixo = new Fixo('11', '98765-4321', 1.50);
$telefonePrePago = new PrePago('11', '91234-5678', 1.00, 'Operadora A');
$telefonePosPago = new PosPago('11', '99876-5432', 1.00, 'Operadora B');

$tempoLigacao = 10; // Tempo em minutos

// Gerar HTML para exibir as informações
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Telefones</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            justify-content: center;
            background-color: #f5f5f5;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 300px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card h2 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }
        .card p {
            font-size: 16px;
            margin-bottom: 8px;
            color: #555;
        }
        .card p span {
            font-weight: bold;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Card para o telefone fixo -->
        <div class="card">
            <h2>Telefone Fixo</h2>
            <p><span>DDD:</span> <?php echo $telefoneFixo->getDdd(); ?></p>
            <p><span>Número:</span> <?php echo $telefoneFixo->getNumero(); ?></p>
            <p><span>Custo por Minuto:</span> R$ <?php echo number_format($telefoneFixo->getCustoPorMinuto(), 2, ',', '.'); ?> </p>
            <p><span>Custo da Ligação (10 min):</span> R$ <?php echo number_format($telefoneFixo->calculaCusto($tempoLigacao), 2, ',', '.'); ?></p>
        </div>

        <!-- Card para o celular pré-pago -->
        <div class="card">
            <h2>Celular Pré-Pago</h2>
            <p><span>DDD:</span> <?php echo $telefonePrePago->getDdd(); ?></p>
            <p><span>Número:</span> <?php echo $telefonePrePago->getNumero(); ?></p>
            <p><span>Operadora:</span> <?php echo $telefonePrePago->getNomeOperadora(); ?></p>
            <p><span>Custo por Minuto Base:</span> R$ <?php echo number_format($telefonePrePago->getCustoMinutoBase(), 2, ',', '.'); ?></p>
            <p><span>Custo da Ligação (10 min):</span> R$ <?php echo number_format($telefonePrePago->calculaCusto($tempoLigacao), 2, ',', '.'); ?></p>
        </div>

        <!-- Card para o celular pós-pago -->
        <div class="card">
            <h2>Celular Pós-Pago</h2>
            <p><span>DDD:</span> <?php echo $telefonePosPago->getDdd(); ?></p>
            <p><span>Número:</span> <?php echo $telefonePosPago->getNumero(); ?></p>
            <p><span>Operadora:</span> <?php echo $telefonePosPago->getNomeOperadora(); ?></p>
            <p><span>Custo por Minuto Base:</span> R$ <?php echo number_format($telefonePosPago->getCustoMinutoBase(), 2, ',', '.'); ?></p>
            <p><span>Custo da Ligação (10 min):</span> R$ <?php echo number_format($telefonePosPago->calculaCusto($tempoLigacao), 2, ',', '.'); ?></p>
        </div>
    </div>
</body>
</html>
