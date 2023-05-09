<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de STRINGS em PHP</title>
</head>
<body>

    <!-- VARIÁVEIS -->

    <?php 
    // $nome = 'Lílian \u{1F596}';
    // $sobrenome ="Saraiva \u{1F596}"; //com as aspas duplas há uma interpretação, logo aparece o emoji.

    // echo $nome; 
    // echo $sobrenome;
    ?>

    <!-- CONSTANTES -->
    <?php 
    const ESTADO = 'RJ'; // sendo apenas texto, não precisa de uma interpratação, logo pode-se usar aspas simples.
    echo "Moro no ". ESTADO;
    // Se colocado dentro das aspas, sem concatenação, será exibido "Moro no ESTADO". 
    ?>


</body>
</html>