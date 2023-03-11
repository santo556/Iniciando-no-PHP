<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Formulários</title>
</head>
<body>
    <header>
        <h1>Usuando formulários</h1>
    </header>
    <section>
        <?php 
            $valor = $_GET["valor"];
            $raizq = sqrt($valor);
            echo "</br>A raiz quadrada de $valor é " . number_format($raizq);
        ?>
    </section>
</body>
</html>