<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Integração de formulários em PHP</title>
</head>
<body>
    <header>
        <h1>Dados pessoais</h1>
    </header>
    <section>
        <?php 
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";
            $idade = date("Y") - $ano;
            echo "Seu nome é $nome é $sexo e tem $idade anos.";
        ?>
        <a href="ex002.html">Voltar</a>
    </section>
</body>
</html>