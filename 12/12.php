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
    $numero = $_REQUEST['numero'];
    if ($numero%2 ==0){
        print 'Es multiple de 2';
    } else print 'No es multiple de 2';
    

    ?>
</body>
</html>