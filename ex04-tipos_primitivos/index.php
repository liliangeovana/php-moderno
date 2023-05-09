<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // // 0x = hexadecimal 0b= binário 0 = Octal

        // $n = 0x1A;
        // echo "o valor da variável é $n";

        // $v = 300;
        // var_dump($v);

        $num = 3e2; // =3x2^10, retorna float
        var_dump($num);

        $num2 = (int) 3e2; //int força a retornar inteiro
        var_dump($num2);
    ?>
</body>
</html>