<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../../exercicios/ex004/style.css">
</head>
<body>
    <header>
        <h1>CONVERSOR DE MOEDA</h1>
    </header>
        <main>
            <?php 
                $moeda = $_POST["valor"];
                $conversao = $moeda / 824.94;
                $padrao = numfmt_create("pt_AO", NumberFormatter::CURRENCY);

                echo "Voce pretende converter " . numfmt_format_currency($padrao, $moeda, "AOA") . " em Dolar Americano";

                echo "<br> Por sua vez, " . numfmt_format_currency($padrao, $moeda, "AOA") . " equivalem a " . numfmt_format_currency($padrao, $conversao, "USD");

                echo "<br> <br> <em>Cotacao valida em 7/ago/2023, o nosso sistema indica que actualmente estamos em </em>" . date("d, M, Y") . " <em> por favor <a href='https://www.google.com/search?q=1+dolar+em+kwanza&oq=1+dolar+em+jw&gs_lcrp=EgZjaHJvbWUqCQgBEAAYDRiABDIGCAAQRRg5MgkIARAAGA0YgAQyCQgCEAAYDRiABDIKCAMQABgIGA0YHjIKCAQQABgIGA0YHtIBCDY3NDNqMWo3qAIAsAIA&sourceid=chrome&ie=UTF-8' target='_blank'>clique aqui</a> ter a cotacao actualizada </em>";
            ?>
            <p></p>
<button onclick="javascript:window.location.href='index.html'">Voltar a converter</button>
    </main>
</body>
</html>