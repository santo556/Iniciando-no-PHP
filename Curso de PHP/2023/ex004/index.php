<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings com PHP</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        border: 0;
    }

    body {
        background-color: black;
        color: #fff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 1em;
    }

    h1 {
        text-align: center;
    }

    div {
        background: blue;
        border: 2px solid #fff;
        width: 100vw;
        height: 90vh;
        text-align: center;
        color: red;
        font-size: 4em;
        font-family: 'Courier New', Courier, monospace;
    }
    </style>
</head>

<body>
    <h1>Manipulando Strings com PHP</h1>
    <div>
    <?php
        //$nome = 'Gustavo';
        //$sobrenome = "Guanabara \u{1F418}";
        //echo "$nome $sobrenome";
        //echo '</br>$nome $sobrenome \u{1F418}'; 
        //const CANAL = "Curso em Video \u{1F499}";
        //const CANAL = 'Curso em Video \u{1F499}';
        //echo "</br>Eu adoro o " . CANAL;
        //echo "</br>Estamos no ano de " . date('Y');
        //$nome = "Rodrigo";
        //$sobrenome = "Nogueira";
        //echo "$nome"Minotauro"$sobrenome"; # erro
        //echo '$nome "Minotauro" $sobrenome';
        //echo "$nome\"Minotauro\"$sobrenome";
        //const APELIDO = "</br>Minotouro";
        //echo "</br>O apelido de Rodrigo Nogueira é " . APELIDO;
        #$nome = "Gustavo";
        #$sobrenome = "Guanabara";
        #$apelido = "Gafanhoto";
        //echo "$nome \'$apelido\' $sobrenome ";
        #echo "$nome \n\t \"$apelido\" \t\t$sobrenome";
        $canal = "Curso em Video";
        $ano = date('Y');
        echo <<< 'TESTE'
            Olá, Mundo!!!
            Olá galera do $canal!
                    </br>Tudo bem com vocês?
                </br>Como está sendo esse ano de $ano?
            Abraços! \u{1F596};
        TESTE;
    ?>
    </div>
</body>

</html>