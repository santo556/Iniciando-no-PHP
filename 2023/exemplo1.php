<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo1</title>
</head>
<body>
    <?php 
        $nome = "Pedro";
        const NOME = "André";

        echo "É verdade que seu nome é $nome ? Não meu nome é " .NOME;

        $nome = "André";
    ?>
</body>
</html>