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
        <h1>Eleições</h1>
    </header>
    <section>
        <?php 
            $ano = $_GET["anodenascimento"];
            $idade = 2023 - $ano;
            echo "Quem nasceu em $ano tem idade $idade anos. ";
            $verificado = ($idade >= 18 && $idade < 65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
            echo "</br>É dessa forma que seu voto é $verificado";
        ?>
    </section>
</body>
</html>