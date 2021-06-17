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
    $a = $_REQUEST['A'];
    $b = $_REQUEST['B'];
    if ( $a == $b){
        print 'Son iguales';
    } elseif ($a>$b){
        print 'El numero A es mas grande que B';
    } else  print 'El numero A es mas pequeño que B';

    ?>
</body>
</html>