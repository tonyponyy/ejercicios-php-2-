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
    $nventas = $_REQUEST['nventas'];
    ?>
    <p>ventas :</p>
    <form method="post" action="17-2.php">
     <?php
     for ($i=0; $i <=$nventas ; $i++) { 
        print "Venta numero".$i+1 .'<br>';
        print '<input type="text" name="venta[]" /> <br>';
     }
     ?>   
      <input type="submit" value="confirmar" />
    </form>
    
</body>
</html>