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
    $venta = $_REQUEST['venta'];
    print "El valor de las vendas asciende a ". array_sum($venta);
    ?>
</body>
</html>