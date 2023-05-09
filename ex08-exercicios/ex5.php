<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <header>    
     <h1>Resultado da Análise</h1>
    </header>
    <main> 
        <?php 
            $numero = $_GET ["numero"];
            $inteiro = (int) $numero;
            $float = $numero - $inteiro;

            echo "Analisando o número <strong>".number_format($numero, 3, ",", ".")."</strong> informado pelo usuário:<br>";

            echo "A parte inteira do número é <strong>".number_format($inteiro, 0, "", ".")."</strong><br>";
            echo "A parte fracionária do número é <strong>".number_format($float, 3, ",","")."</strong>";
        ?>

        <input type="button" onclick="window.history.back()" value="Voltar">
    </main>
</body>
</html>