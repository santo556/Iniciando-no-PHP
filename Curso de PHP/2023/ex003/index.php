<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos e PHP</title>
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
        width: 98vw;
        height: 60vh;
        text-align: center;
        color: red;
        font-size: 4em;
        font-family: 'Courier New', Courier, monospace;
    }
    </style>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>
    <div>
        <?php
        // 0x = hexadecimal -b = binário 0 = Octal
        //$num = 0b1011;
        //$num1 = 010;
        //echo "O valor da variável é $num,$num1";

        //$v = "André";
        //var_dump($v);

        //$num = (integer) 3e2; # 3 x 10(2); -> coerção
        //echo "O valor é $num";
        //var_dump($num);

        //$num = (int) "950";
        //var_dump($num);

        //$casado = true;
        //var_dump($casado);
        //print "O valor para casado é $casado";

        //$vet = [6, 2.5, "Maria", 3, false];
        //var_dump($vet);
        //echo "O vetor é $vet";

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
    </div>
</body>

</html>