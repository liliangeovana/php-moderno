<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>

        <?php 
            $min = 0;
            $max = 100;
            $sorteio = mt_rand($min, $max);
            echo "Gerando um número aleatório entre $min e $max...<br>";
            echo "O valor gerado foi $sorteio";
        ?>
        <br>
        <input type="button" value="&#x1F504;Gerar outro" onClick="window.location.reload()"> 
        

    </main>
</body>
</html>