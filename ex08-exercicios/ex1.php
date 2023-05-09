<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1 style="text-align: center">Resultado Final</h1>
        <?php 
        $numero = $_GET["numero"];
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
        echo "O número escolhido foi <strong>$numero</strong><br>";
        echo "O seu <em>antecessor</em> é $antecessor <br>";
        echo "O seu <em>sucessor</em> é $sucessor";
        ?>
        <br><br>
        <input type="button" onclick="window.history.back()" value="&#x2B05; Voltar">
    </main>

    
</body>
</html>