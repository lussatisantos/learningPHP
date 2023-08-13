<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        $Dividendo = $_POST['dividendo'];
        $Divisor = $_POST['divisor'];
    ?>
    <main>
        <h1>Anatomia de uma divisao</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="iddividendo">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="iddivisor">
            <input type="submit" value="Analisar">
        </form>
    </main>
    
</body>
</html>