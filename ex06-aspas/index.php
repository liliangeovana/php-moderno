<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequências de Escape</title>
</head>
<body>
    <?php 
        $nome = "Lílian";
        $apelido = "Lili";
        $sobrenome = "Saraiva";

        echo "$nome \"$apelido\" $sobrenome\n";
        //RESULTADO = Lílian "Lili" Saraiva

        echo "$nome \'$apelido\' $sobrenome\n";
        //RESULTADO = Lílian \'Lili\' Saraiva

        echo <<< FRASE
            Oi, tudo bom?
                Meu nome é $nome $sobrenome;


            FRASE;
    ?>
</body>
</html>