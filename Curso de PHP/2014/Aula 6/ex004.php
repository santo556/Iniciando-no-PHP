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
        <h1>Variáveis de variáveis</h1>
    </header>
    <section>
        <?php 
            /*$site = "cursoemvideo";
            $$site = "cursoPHP";
            echo $site;
            echo $cursoemvideo;
            */
            $x = "abc";
            $$x = "def";
            echo "O conteúdo da variável x é $x ";
            echo "</br>A variável criada recebeu o valor $abc";
            $nome = "Antonio";
            $$nome = "Andre";
            echo "</br>O seu nome é $nome";
            echo "</br>Não. O meu verdadeiro nome é $Antonio";
        ?>
    </section>
</body>
</html>