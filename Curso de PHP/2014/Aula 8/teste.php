<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Integrção de HTML + PHP</title>
</head>
<body>
    <header>
        <h1>Formulários em PhP</h1>
    </header>
    <section>
        <?php 
            $valor = $_GET["valor"];
            echo "</br>Você digitou $valor";
        ?>
    </section>
</body>
</html>