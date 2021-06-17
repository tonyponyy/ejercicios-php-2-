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
    $dia = $_REQUEST['dia'];
switch ($dia) {
    case 'lunes':
        case'martes':
            case 'miercoles':
                case 'jueves':
                    case 'viernes':
       print "no es fiesta";
        break;
        case 'sabado':
            case 'domingo':
            print " es fiesta";
             break;
    

}
    ?>
</body>
</html>