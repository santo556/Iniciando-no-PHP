<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="operadores.css">
    <title>Operadores</title>
</head>
<body>
    <header>
        <h1>Operadores de Atribuição</h1>
    </header>
    <section>
        <?php 
            $preco = $_GET["produto"];
            echo "O preço do produto é R$" . number_format($preco, 2);
            //$preco = $preco + ($preco * 10 / 100);
            $preco += $preco*10/100;
            //$preco -= $preco*10/100;
            echo "</br>O aumento foi de R$" . number_format($preco, 2);
        ?>
    </section>
</body>
</html>