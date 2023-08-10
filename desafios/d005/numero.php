<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador</title>
    <link rel="stylesheet" href="../../exercicios/ex004/style.css">
</head>
<body>
    <h1>Resulltado da analise</h1>
    <main>
        <?php 
            $num = $_POST["n"] ?? 0;
            echo "Analisando o numero <strong>". number_format($num, 3, ",","."). "</strong> digitado pelo usuario";

            $int = (int) $num;
            $fra = $num - $int;

            echo "<ul> <li> A parte inteira do numero e <strong>". number_format($int, 0, ",", ".")."</strong></li>";

            echo "<li> A parte inteira do numero e <strong>" . number_format($fra, 3, ",", ".") ."</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>