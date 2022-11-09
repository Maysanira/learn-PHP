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
   
//    $buah = ['anggur','semangka','durian','melon','salak'];
//    for($a=0; $a < 4; $a++)
//    {
//     echo "----------------";
//     echo $buah [$a];
//     echo "---------------<br>";
//    }
//    foreach($buah as $a){
//     echo "----------------";
//     echo $a;
//     echo "---------------<br>";
//    }
   
   $data = ['nama' => 'endah',
            'umur'=>37,
            'sifat'=> 'kesed'];
            
    foreach($data as $key=>$value){
        echo $value."<br>";
                   }
   ?> 
</body>
</html>