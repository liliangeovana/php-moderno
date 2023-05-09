<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $total = $_GET["total"] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="total">Qual é o total de segundos?</label>
            <input type="number" name="total" id="total">
            <input type="submit" value="Calcular">  
        </form>
    </main>

    <section id="resultado">
            <h2>Totalizando</h2>
            <?php
                $semanas = intdiv($total, 604800);
                $dias = intdiv($total,86400)-($semanas*7);
                $horas = intdiv($total,3600) - ($semanas*7*24)-($dias*24);
                $minutos = intdiv($total,60)-($semanas*7*24*60) - ($dias*24*60)-($horas*60);
                $segundos = $total - ($semanas*7*24*60*60) - ($dias*24*60*60)-($horas*60*60) -($minutos*60);

                echo "Analisando o valor que você digitou, <strong>".number_format($total, 0,",", ".")." segundos</strong> equivalem a um total de:";

               echo "
               <ul>
                <li>$semanas semanas</li>
                <li>$dias dias</li>
                <li>$horas horas</li>
                <li>$minutos minutos</li>
                <li>$segundos segundos</li>
               </ul>
               "
            ?>
        </section>
</body>
</html>