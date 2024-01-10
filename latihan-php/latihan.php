<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Belajar PHP" ?></title>
</head>
<body>
  


<?php
    $page = $_SERVER['PHP_SELF'];
    $sec = "2";
    header("Refresh: $sec; url=$page");
    echo "Watch the page reload itself in 10 second!";
   
    ?>

  <?php
    echo "Saya Sedang belajar PHP<br>";
    echo "<p> Saya Sedang Belajar Bahasa Pemograman PHP</p>";
    ?>
    
    
    <?php
    print "Ini zetta <br>";
    print "Ini Mbah ";
    ?>



    <?php
    

    $nama = "Rafa";
    echo "nama saya: $nama <br>";
    ?>

    <?php

    $txt = "Ngoding iso ra";
    printf("Hey kamu  %s<br>" , $txt);

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