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
$data2 = array("suami" => "Sharon",
              "laptop" => "asus", 
              "kerja" => "iherte");
 

             //print_r($data);
//$data["nama"] = "Endah Emera";
 //           echo "Namanya adalah  ". $data['nama'];

//Multi dimensi array
//array_values array_keys array_merge

//print_r(array_values($data));
//print_r(array_keys($data));
//print_r(array_merge($data,$data2));

//multi dimensi array
$dat = array(
        array("programmer","21","males"),
        array("desainer","24","rajin"),
        array("manager","27","males bingit"),
);
/*note : urutan ke kanan maka yg kanan 0
         urutan ke bawah maka yang kiri 0

         00 01 02
         10 11 12
         20 21 22
*/
$dat[2][0] = "proyek manager";
echo $dat[2][0];

?>
    
</body>
</html>