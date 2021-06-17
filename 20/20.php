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
    $numero1 = $_REQUEST['numero1'];
    $numero2 = $_REQUEST['numero2'];
    $operador = $_REQUEST['operador'];
    switch ($operador) {
        case '+':
            print $numero1+$numero2;
            break;
            case '-':
                print $numero1-$numero2;
                break;
                case '*':
                    print $numero1*$numero2;
                    break;
                    case '/':
                        print $numero1/$numero2;
                        break;
                        case '%':
                            print $numero1%$numero2;
                            break;
                            case '^':
                                print $numero1^$numero2;
                                break;
                                                
       
    }


    ?>
</body>
</html>