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
    print "For : <br>";
for ($i=0; $i < 10; $i++) { 
    print"$i X 2 = ".$i*2 ."<br>" ;
}
    print "While : <br>";
    $a=0;
    while ($a <= 10) {
      print "$a X 2 =" .$a*2 ."<br>" ;
      $a++;
    }
    print " Do /While : <br>";
    $e = 0;
do {
    print "$e X 2 =" .$e*2 ."<br>" ;
    $e++;
} while ($e <=10);
    ?>
</body>
</html>