<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $ano_nasceu = $_GET["nasceu"] ?? 0;
        $ano_escolhido = $_GET["escolhido"] ?? date("Y");
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="nasceu">Em que ano você nasceu?</label>
            <input type="number" name="nasceu" id="nasceu">
            <label for="atual">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?php echo date("Y"); ?></strong>)</label>
            <input type="number" name="escolhido" id="escolhido">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section id="resultado">
            <h2>Resultado</h2>
            <?php 
                $idade = $ano_escolhido - $ano_nasceu;
                echo "Quem nasceu em $ano_nasceu vai ter <strong>$idade anos</strong> em $ano_escolhido";
            ?>
        </section>
</body>
</html>