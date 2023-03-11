<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="relacionais.css">
    <title>Operadores Relacionais</title>
</head>
<body>
    <header>
        <h1>Operadores relacionais</h1>
    </header>
    <section>
        <?php 
            $num1 = $_GET["a"];
            $num2 = $_GET["b"];
            $tipo = $_GET["op"];
            echo "Os valores passados foram $num1 e $num2";
            $r = ($tipo == "s" ) ? $num1 + $num2 : $num1 * $num2;
            echo "</br>O resultado será $r";
        ?>
    </section>
</body>
</html>