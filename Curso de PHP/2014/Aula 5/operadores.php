<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Operadores Aritméticas</title>
<body>
    <header>
        <h1>Operações Aritméticas</h1>
    </header>
    <section>
        <?php
            $num1 = $_GET["a"];
            $num2 = $_GET["b"];
            echo "<h2>Valores recebidos: $num1 e $num2</h2>";
            $media = ($num1 + $num2) / 2;
            echo "A soma vale ". ($num1 + $num2);
            echo "<br/>A subtração vale ". ($num1 - $num2);
            echo "<br/>A multiplicação vale ". ($num1 * $num2);
            echo "<br/>A divisão vale ". ($num1 / $num2);
            echo "<br/>O modulo vale ". ($num1 % $num2);
            echo "<br/>A média vale $media";
        ?>
    </section>
</body>
</html>