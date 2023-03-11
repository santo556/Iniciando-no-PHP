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
        <h1>Variáveis refenciadas</h1>
    </header>
    <section>
        <?php 
            $a = 8;
            //$b = $a;
            $b = &$a;
            $b += 10;
            //echo $a;
            //echo $b;
            echo "A varável A vale $a";
            echo "</br>A variável B vale $b";
        ?>
    </section>
</body>
</html>