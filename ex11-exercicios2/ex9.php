<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Médias Aritméticas</h1>
        <?php 
            $valor1 = $_GET["valor1"] ?? 0;
            $peso1=$_GET["peso1"] ?? 0;
            $valor2=$_GET["valor2"] ?? 0;
            $peso2=$_GET["peso2"] ?? 0;
         ?>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="valor1" id="valor1">
            <label for="p1">1º Peso</label>
            <input type="number" name="peso1" id="peso1">
            <label for="v2">2º Valor</label>
            <input type="number" name="valor2" id="valor2">
            <label for="p2">2º Peso</label>
            <input type="number" name="peso2" id="peso2">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
        <section>
            <h2>Cálculo das Médias</h2>

            <?php 
                $aritmetica = ($valor1+$valor2)/2;
                $ponderada = ((($valor1*$peso1)+($valor2*$peso2))/($peso1+$peso2));

                echo "Analisando os valores $valor1 e $valor2:";
                echo "
                <ul>
                    <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ". number_format($aritmetica, 2, ",", ".")."</li>
                    <li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a ". number_format($ponderada, 2, ",", ".")."</li>
                </ul>
                ";
            ?>
        </section>
</body>
</html>