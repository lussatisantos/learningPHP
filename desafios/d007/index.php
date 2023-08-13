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
        $sal = $_POST["sal"] ?? 40000;
    ?>
    <main>
        <h1>Informe seu salario</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="sal">Salario AOA</label>
            <input type="number" name="sal" id="idsal" step="0.01" value="<?=$sal?>">
            <p>Consideramos o salario minimo de <strong>40.000,00</strong></p>
            <input type="submit" value="calcular">
        </form>
    </main>
    <?php 
        $tot_sal = intdiv($sal, 40000);
        echo "$tot_sal";
    ?>
</body>
</html>