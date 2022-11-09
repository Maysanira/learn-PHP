<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
   Halo semuanya!
   
   <?php 
   //belajar php
   /* berapa baris
   komentar
    */

    //variabel pada php
$nama = "Sekolah Koding 123";
$n123 ="text"; //tdk boleh langsung mulai angka

        echo"<h1>$nama</h1> ";
        echo "Halo".$nama."<br>";
        echo "Member"; 
        
     //tipe data -string-
     $nama = "SEKOLAH KODING";
     $nama2 ='bermain kodin';
     $nama3 = '1000';
     $nama4 = '1000';
     
     echo $nama3. $nama4;
     echo "<br>";

    //tipe data angka/number
    //1. integer 2.Float
    $angka = 1000;
    $angka2 = 2;
    $angka3 =3;

    //echo "angkanya adalah $angka + $angka2";
        

    //operasi aritmatik
    //+ - * / % (modulo=sisa hasil pembagian) ++ --

    //nama = nilai
   // $angka = $angka + $angka2 + 10;
   // echo $angka;
      ///echo $angka + $angka3 * $angka2;
    //$angka++; 

    //math method
    //round (membulatkan angka terdekat) 
    //rand(min, max) --->mengacak angka secara random
    //max min
    //echo "Angka hari ini adalah".rand(5,10)   ;
   // echo "Angka hari ini adalah".min(5,10,6,2,7,8);
   // echo "Angka hari ini adalah".max(5,10,6,2,7,8);
       
  $text = "Hai semuanya ";
  //echo strlen($text);//menghitung ada brp huruf plus spasi
  //echo str_word_count($text); //menghitung jumlah kata
  echo str_replace("Hai","halo",$text);
  echo str_repeat( str_replace("Hai","halo",$text),10);
  
  
  ?>
</body>
</html>

