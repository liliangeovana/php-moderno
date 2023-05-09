<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <header>    
     <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main> 
        <?php 
            $valor_digitado = $_GET["valor_digitado"];
            $cotacao = 5.17;

            $dolar = $valor_digitado/$cotacao;

            $valor_digitado = number_format($valor_digitado, 2, ",", "");

            $dolar = number_format($dolar, 2, ",", "");

            echo "Seus R$ $valor_digitado equivalem a <strong>US$ $dolar</strong>";
            echo "<br><br><strong>*Cotação fixa de $cotacao</strong> informada diretamente no código."
        ?>

        <input type="button" onclick="window.history.back()" value="Voltar">
    </main>
</body>
</html>