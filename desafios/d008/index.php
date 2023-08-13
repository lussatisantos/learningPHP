<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../../exercicios/ex005/style.css">
</head>
<body>
    <?php 
        $num = $_POST['num'];
    ?>
    <main>
        <h1>Informe um numero</h1>
        <form action="" method="post">
            <label for="num">Informe um numero</label>
            <input type="number" name="num" id="idnum" value="<?=$num?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <?php 
        $raizq = sqrt($num);
        $raizcubico = $num**(1/3);
    ?>
    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
            
        ?>
    </section>
</body>
</html>