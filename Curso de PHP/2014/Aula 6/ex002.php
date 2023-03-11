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
        <h1>Operadores de Incremento</h1>
    </header>
    <section>
        <?php 
            /*
                Esse exercício pretende demonstrar o uso de operadores de incremento e decremento.
            */
            $anoAtual = $_GET["aa"];
            echo "O ano atual é $anoAtual e o ano anterior é " . --$anoAtual;
        ?>
    </section>
</body>
</html>