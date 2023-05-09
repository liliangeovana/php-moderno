<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET["salario"] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário(R$):</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
        <section id="resultado">
            <h2>Resultado Final</h2>
            <?php
            $quantidade = $salario/1380.00;
            $inteiro = (int) $quantidade;
            $falta = $salario - ($inteiro*1380); 

            echo "Quem recebe um salário de R$".number_format($salario, 2, ",", "."). " ganha <strong>". $inteiro. " salários mínimos</strong> + R$". number_format($falta, 2, ",", ".");
            ?>
        </section>
    </main>
</body>
</html>