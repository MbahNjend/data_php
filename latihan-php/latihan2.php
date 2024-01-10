<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    
<?php
    $page = $_SERVER['PHP_SELF'];
    $sec = "2";
    header("Refresh: $sec; url=$page");
   
   
    ?>



 

<?php
   $harga = 20000;
   echo "Harganya adalah Rp.  $harga <br>";
   
   printf("Harganya adalah Rp.  %.3f<br>" , $harga);
   printf("Harganya adalah Rp.  %.3d<br> " , $harga );
   printf("Harganya adalah Rp.  %b<br>" , $harga);
   


    ?>




</body>
</html>