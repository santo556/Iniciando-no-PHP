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
        <h1>Iguais e idênticos</h1>
    </header>
    <section>
        <?php 
            $a = 3;
            $b = "3";
            $r = ($a === $b) ? "Sim" : "Não";
            echo "</br>As variáveis A e B são idênticas? $r";
        ?>
    </section>
</body>
</html>