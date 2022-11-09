<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop PHP</title>
</head>
<body>
   <?php
   //-------pengulangan---------
   // for(variabelawal(mulai) ;batas(syarat) ;perubahan)
   //++ artinya bertambah 1
   
   $buah = ['anggur','semangka','durian','melon'];
   for($a=0; $a < 4; $a++)
   {
    echo "----------------";
    echo $buah [$a];
    echo "---------------<br>";

   }
   
   
   
   
   ?> 
</body>
</html>