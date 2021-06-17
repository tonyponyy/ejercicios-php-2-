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
$num = rand(1,3);
if ($num == 3){
    print 'tres';
} else{
    if ($num == 2){
        print 'dos';
    } else print 'uno';
}

    ?>
</body>
</html>