<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticas</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 1em;
            text-align: center;
        }

        div {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ccc;
            color: #000;
            border: 1px solid #000;
            text-align: center;
            font-size: 3em;
        }
    </style>
</head>
<body>
    <h1>Operações Aritméticas</h1>
<div>
    <?php
        $num1 = 3;
        $num2 = 2;
        $media = ($num1 + $num2) / 2;
        echo "A soma vale ". ($num1 + $num2);
        echo "<br/>A subtração vale ". ($num1 - $num2);
        echo "<br/>A multiplicação vale ". ($num1 * $num2);
        echo "<br/>A divisão vale ". ($num1 / $num2);
        echo "<br/>O modulo vale ". ($num1 % $num2);
        echo "<br/>A média vale $media";
    ?>
</div>
</body>
</html>