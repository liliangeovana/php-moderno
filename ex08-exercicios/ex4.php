<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <header>    
     <h1>Conversor de Moedas v2.0</h1>
    </header>
    <main> 
        <?php 
            //dinheiro do formulário
            $valor_digitado = $_GET["din"];
            
            //cotação da API do Banco Central
            $inicio = date ("m-d-Y", strtotime("-7 days"));
            $fim = date ("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $dolar = $valor_digitado/$cotacao;

            $valor_digitado = number_format($valor_digitado, 2, ",", "");

            $dolar = number_format($dolar, 2, ",", "");

            echo "Seus R$ $valor_digitado equivalem a <strong>US$ $dolar</strong>";
            echo "<br><br><strong>*Cotação fixa de $cotacao</strong> informada diretamente pelo site do Banco Central."
        ?>

        <input type="button" onclick="window.history.back()" value="Voltar">
    </main>
</body>
</html>