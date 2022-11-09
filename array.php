<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>

<h1>Array PHP</h1>

<?php
// Tipe Data ARRAY
$kotak = array('anjing','kurakura','koala');
$nama = ['endah','pambud','galuh','imut'];
$angka = ['4','6','8'];

//print_r($kotak);
//echo $nama[2];

//--------metode array-------
//array_unique= mengambil array yg unik
//array_reverse = membalik array
//shuffle =hasilnya seperti random

//sort = mengurutkan nilai sesuai abjad/angka
//sort($angka);
//print_r($angka);

//print_r(array_reverse($kotak));
//shuffle($kotak);
//print_r($kotak);

//count = jumlah dari isi array
//echo count($nama);

//assosiative array
//key = isi
$data = array("nama" => "Endah",
              "umur" => 37, 
              "kerja" => "iherte");

             //print_r($data);
$data["nama"] = "Endah Emera";
            echo "Namanya adalah  ". $data['nama'];
?>
    
</body>
</html>