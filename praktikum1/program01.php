<?php
$guestName = "Henry Lianto";
$today = date('l');
$todayDate = date('l, F jS Y');
$color=$_GET['color'];
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>BELAJAR PHP</title>
   </head>
   <body bgcolor="<?php echo $color ?>" >
     <h1>Program 01</h1>
     Today is <?php echo $todayDate ?>
     <hr>

     <h2>Hello, <?php echo $guestName ?> is my Name</h2>
     <h3>Happy <?php echo $today ?></h3>


     <p>Ubah bgcolor ke </p><a href="?color=red">merah</a>
   </body>
 </html>
