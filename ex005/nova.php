<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
        $num = $_GET["numero"];
        $snum = $num + 1;
        $anum = $num - 1;
        print("O valor digitado é $num");
        print("O sucessor de $num é $snum");
        print("O antecessor de $num é $anum");
    ?>
</body>
</html>