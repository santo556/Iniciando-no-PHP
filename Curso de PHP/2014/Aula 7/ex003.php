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
        <h1>Situação</h1>
    </header>
    <section>
        <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2) / 2;
        echo "A média entre $nota1 e $nota2 é $m";
        echo "</br>A situção do aluno é " . (($m < 6) ? "Reprovado" : "Aprovado");
        ?>
    </section>
</body>

</html>