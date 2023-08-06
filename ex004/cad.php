<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $n = $_POST["nome"] ?? "Sem nome";
            $s = $_POST["sobrenome"] ?? "Desconhecido";
            echo "Muito prazer em te conhecer <strong> $n $s </strong>, seja bem-vindo ao meu site!!!"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar a pagina anterior</a></p>
    </main>
</body>
</html>