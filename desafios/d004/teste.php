<pre>
<?php 
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'08-01-2023\'&@dataFinalCotacao=\'08-08-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    //var_dump($dados);

    $cotacao = $dados["value"][0]["cotacaoCompra"];

    echo "A cotacao e $cotacao";
    ?>
</pre>