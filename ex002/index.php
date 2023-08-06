<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
        date_default_timezone_set("Africa/Luanda");
        echo "Hoje e dia " . date('d/M/y');
        echo " e a hora actual sera " . date('G:i:s T');
        echo("a");
    ?>
</body>
</html>