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
    $deporte = $_REQUEST['deporte'];
    $num = count($deporte);
 print "te gustan ".$num ." deportes";
    ?>
</body>
</html>