<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ingresos = $_REQUEST['ingresos'];
if ($ingresos == 3000){
    print'tienes que pagar impuestos';
} else print 'no tienes que pagar impuestos';

    ?>
</body>
</html>