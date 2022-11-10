<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>fungsi PHP</h1>
   <?php
   // fungsi

//    function panggil()
//    {
//     echo "------------";
//     echo "UpoDjiwo";
//     echo "------------";
//     }
//    function jarak()
//    {
//     echo "<br>";
//    }
   
//    panggil();
//    jarak();
//    panggil();
//    jarak();
//    panggil();

//Parameter
//    function print_text($text,$angka)
//    {
//     $text = 'Gedung' . $text . ' '.$angka;
//     echo "------------";
//     echo $text;
//     echo "------------";
//     }
//    function jarak()
//    {
//     echo "<br>";
//    }
   
//    print_text("memanah",21);
//    jarak();
//    print_text("koding",21);
//    jarak();
//    print_text("mengemudi",212);
//    jarak();
// //    return fungsi
// function menghitung($x, $y){
//     $z = $x + $y;
//     return $z;
// }
// $hasil = menghitung(3,5) * 100;
// echo "hasil dari penjumlahan".$hasil;

// scope
$a = 50000;
$b = 50;

function menghitung(){
    $c = $GLOBALS['a'] + $GLOBALS ['b'];
    return $c;
}
// echo menghitung();

//anonymous function

$ngetik = function($text){
    echo $text;
};

$greeting = $ngetik;
$greeting('selamat datang everibadeh...');
   ?> 
</body>
</html>