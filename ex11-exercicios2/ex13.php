<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $valor = $_GET["valor"] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor">
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section id="resultado">
    <h1>Saque de R$<?=$valor?> realizado</h1>
        <?php 
            $notas = [100, 50, 10, 5];

            echo "O caixa eletrônico vai te entregar as seguintes notas:";
            echo "
                <ul>
                    <li><strong>100-> </strong></li>
                    <li><strong>50-> </strong></li>
                    <li><strong>10-> </strong></li>
                    <li><strong>5-> </strong></li>
                </ul>
            ";
        ?>
    </section>
</body>
</html>