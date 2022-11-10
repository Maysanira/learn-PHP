<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h1>, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Logika di PHP</h1>

<?php
// ----tipe data boolean---
// $hasil = true;
// $hasil2 = false;

// if dan else
//operator logika == === > >= < <= !=
// == digunakan untuk menguji benar atau salah
// - utnutk variabel

// $password = 1233;
// $password2 = 124;

// if($password == '123'){
//     echo 'Anda berhasil masuk!';
// }else{
//     echo 'Gagal! passwordnya salah';
// }
// if($password > $password2){
//     echo 'password lebih besar';
// }else{
//     echo 'password lebih kecil';
// }
// if($password != $password2){
//     echo 'salah password sama';
// }else{
//     echo 'benar ..password tidak sama';
// }

$uang_programmer = 1000;
$keyboard        = 2000;
$uang_designer   = 3000;

// if($uang_programmer > $keyboard){
//     echo 'dibeli';
// }elseif ($uang_designer > $keyboard) {
//     echo 'dibeli';
// }
// else{
//     echo 'ngga cukup'; 
// }

//True dan False  (boolean)

// && dan ||  yang berarti atau

// if($uang_programmer > $keyboard
// || $uang_designer > $keyboard){
//     echo 'dibeli';

// }
// else{
//     echo 'ngga cukup'; 
// }
 
//switch case

$nama = 'imam';

switch ($nama) {
    case 'Ermera':
       echo 'namanya ermera';
        break;
    case 'pampam':
        echo 'namanya pampam';
        break;
    case 'galuh':
        # code...
        echo 'namanya galuh';
    
    default:
        echo 'tidak ada yang benar';
        break;
}

 
?>
</body>
</html>
