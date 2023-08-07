<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../../exercicios/ex004/style.css">
</head>
<body>
    <header>
        <h1>CONVERSOR DE MOEDA</h1>
    </header>
        <main>
            <?php 
                $moeda = $_POST["valor"];
                echo "Voce digitou $moeda";
            ?>
    </main>
</body>
</html>