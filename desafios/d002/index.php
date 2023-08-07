<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002</title>
    <link rel="stylesheet" href="../../exercicios/ex004/style.css">
</head>
<body>
    <h1>GERADOR DE NUMEROS</h1>
    <main>
        <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);

            print("Gerador de numero de 0 à 100");
            print("<br> Gerando: <strong>$num</strong>");
        ?>
    </main>
</body>
</html>