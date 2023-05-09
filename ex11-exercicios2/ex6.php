<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"] ?? 0;
    ?>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value=<?=$dividendo?>>
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            $divisao = $dividendo/$divisor;
            $resultado = (int) $divisao;
            $resto = (($dividendo%$divisor)!=0) ?? 0;   

            echo "
            <table class='divisao'>
            <tr>
            <td>$dividendo</td>
            <td>$divisor</td>
            </tr>
            <tr>
            <td>$resto</td>
            <td>$resultado</td>
            </tr>
            </table>";
        ?>
        </section>
</body>
</html>