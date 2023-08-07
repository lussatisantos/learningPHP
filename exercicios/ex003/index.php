<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    // 0x = hexadecimal, 0b = binario , 0 = octal
        // $num = 0x1A;
        // echo "O valor da variavel e $num";

        // $v = "Lussati";
        // var_dump($v); // detalha tudo sobre a variavel

        //$num = 3e2;
        // echo "O valor e $num";
        //var_dump($num);

        //$num = (int)"950";
        //var_dump($num);

        //$casado = true;
        //var_dump($casado);
        //print "O valor casado para casado e $casado";
    
        // $vet = [0, 3, 5, 7, "Marco", 7];
        //echo "$vet";
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }
            $p = new Pessoa;
            var_dump($p);
    ?>
</body>
</html>