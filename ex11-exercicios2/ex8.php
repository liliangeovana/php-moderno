<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Informe um número</h1>
    <?php 
        $valor = $_GET["numero"] ??0;
    ?>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
        <label for="numero">Número</label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $cubica = $valor**(1/3);
            echo "Analisando o <strong>número $valor</strong>, temos:";
            echo "
            <ul>
                <li>A sua raiz quadrada é <strong>".number_format(sqrt($valor), 3, ",", ".")."</strong></li>
                <li>A sua raiz cúbica é <strong>".number_format($cubica, 3, ",", "."). "</strong></li>
            </ul>
            ";
        ?>
    </section>
</body>
</html>