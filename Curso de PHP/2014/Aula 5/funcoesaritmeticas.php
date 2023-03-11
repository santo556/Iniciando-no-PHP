<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Funções Aritméticas</title>
</head>
<body>
    <herder>
        <h1>Funçoes Aritméticas</h1>
    </header>
    <section>
        <?php
            $vetor1 = $_GET["x"];
            $vetor2 = $_GET["y"];
            echo "<h2>Valores recebidos: $vetor1 é $vetor2</h2>";
            echo "O valor absoluto de $vetor2 é " . abs($vetor2);
            echo "</br>O valor de $vetor1 <sup>$vetor2</sup> é " . pow($vetor1, $vetor2);
            echo "</br>A raíz de $vetor1 é " . sqrt($vetor1);
            echo "</br>O valor de $vetor2 arredondado é " . round($vetor2);
            echo "<br>A parte inteira $vetor2 é " . intval($vetor2);
            echo "</br>O valor de $vetor1 em moeda é R$ " . number_format($vetor1, 2, ",");
        ?>
    </section>
</body>
</html>