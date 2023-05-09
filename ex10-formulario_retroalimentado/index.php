<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Capturando os dados do Formulário Retroalimentado
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>  
        <h1>
            Somador de Valores
        </h1>
                        <!-- = echo $_SERVER['PHP_SELF'], PHP_SELF é o caminho para o código
                        que ta sendo executado vistp no ex09 $GLOBALS
                    
                        PHP_SELF = /cursophp/ex10-formulario_retroalimentado/index.php-->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php 
            $soma = $valor1+$valor2;
            echo "<p>A soma entre os valores $valor1 e o $valor2 é $soma.</p>";
        ?>
    </section>
</body>
</html>