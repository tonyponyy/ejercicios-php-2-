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
    $edad = $_REQUEST['edad'];
    if ($edad<=17){
        print 'Eres menor';
    } 
    else print 'Eres mayor de edad';
    ?>
</body>
</html>