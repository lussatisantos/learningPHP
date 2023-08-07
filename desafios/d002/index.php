<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002</title>
    <link rel="stylesheet" href="../../exercicios/ex004/style.css">
</head>
<body>
<main>
<h1>SORTEADOR DE NUMEROS</h1>
        <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);

            print("Sorteador de numero de 0 à 100");
            print("<br> Sorteando: <strong>$num</strong>");
        ?>
    <button onclick="javascript:window.location.href='index.php'">Gerar</button>    
</main>
    
</body>
</html>