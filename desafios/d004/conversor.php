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
                
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo      (dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                $dados = json_decode(file_get_contents($url), true);

                $cotacao = $dados["value"][0]["cotacaoCompra"];
                
                $conversao = $moeda + $cotacao;
                $padrao = numfmt_create("pt_AO", NumberFormatter::CURRENCY);

                echo "Voce pretende converter " . numfmt_format_currency($padrao, $moeda, "AOA") . " em Dolar Americano";

                echo "<br> Por sua vez, " . numfmt_format_currency($padrao, $moeda, "AOA") . " equivalem a " . numfmt_format_currency($padrao, $conversao, "USD");
            ?>
            <p></p>
<button onclick="javascript:window.location.href='index.html'">Voltar a converter</button>
    </main>
</body>
</html>