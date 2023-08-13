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
        $Dividendo = $_POST['dividendo'] ?? 0;
        $Divisor = $_POST['divisor'] ?? 0;
    ?>
    <main>
        <h1>Anatomia de uma divisao</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="iddividendo" value="<?=$Dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="iddivisor" value="<?=$Divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <?php 
    
    ?>
</body>
</html>