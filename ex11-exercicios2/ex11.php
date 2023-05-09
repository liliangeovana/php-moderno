<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET["preco"] ?? 0;
        $reajuste = $_GET["reajuste"] ?? 0;  
    ?>
    <main>
    <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="preco">

            <label for="reajuste">Qual será o percentual de reajuste?(<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <?php 
         $aumento = $preco+($preco*$reajuste)/100;
    ?>

    <section id="resultado">
        <h1>Resultado do Reajuste</h1>

            <p>O produto custava R$<?=number_format($preco,2,",",".")?>, com <?=$reajuste?>% de aumento vai passar a custar R$<?=number_format($aumento,2,",",".")?> a partir de agora.</p>

    </section>

    <script>
        mudaValor()

        function mudaValor(){
            p.innerText = reajuste.value;
        }
    </script>
</body>
</html>