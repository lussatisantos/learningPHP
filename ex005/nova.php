<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../ex004/style.css">
</head>
<body>
    <main>
    <?php 
        $num = $_POST["numero"];
        $snum = $num + 1;
        $anum = $num - 1;
        echo "<header>
        <h2> Resultado  final</h2>
        </header>";
        print("O valor digitado é $num");
        print("<p> O sucessor é $snum </p>");
        print("O antecessor é $anum");
    ?>
    <p>
        <a href="javascript:history.go(-1)">
            <input type="submit" value="Voltar">
        </a>
    </p>
</main>
</body>
</html>