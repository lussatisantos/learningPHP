<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("Dia de semana", "SABADO", time() + 3600);

                echo "<h1> Superglobal GET</h1>";
                var_dump($_GET);

                echo "<h1>Superglobais POST</h1>";
                var_dump($_POST);

                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);
            
                echo "<h1>Superglobal COOKIE</h1>";
            ?>
        </pre>
    </main>
</body>
</html>