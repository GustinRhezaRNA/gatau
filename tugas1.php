<?php




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Macam-macam Array pada PHP</h1>
    <h4>Indexed Array</h4>
    <p>Array berindeks PHP adalah array yang diwakili oleh nomor indeks secara default. Semua elemen array diwakili oleh nomor indeks yang dimulai dari 0.
Array terindeks PHP dapat menyimpan angka, string, atau objek apa pun. Array berindeks PHP juga dikenal sebagai array numerik.</p>
    <h4>Contoh:</h4>
    <p><?php $buah =array("Pisang","Melon","Apel");?></p>
    <p> $buah =array("banana","melon","apple");</p>
    <p><?php echo "I like $buah[1] and $buah[2]" ?></p>

    <h4>Array Assosiatif</h4>
    <p>Array Assosiatif adalah jenis array yang kebalikan dengan numeric. Jika array numeric inisialisasi indexnya menggunakan angka maka pada array assosiatif menggunakan string / huruf.</p>
    <h4>Contoh:</h4>
    <p><?php $child =array("Fahry"=>"11","Farhan"=>"5");?></p>
    <p>$child =array("Fahry"=>"11","Farhan"=>"5");</p>
    <p><?php foreach($child as $index => $jumlah) {
    echo "$index" . " have " . $jumlah . " child";
    echo "<br>";
    }
    ?>

    <h4>Multidimensional Array</h4>
    <p>Array multi dimensi adalah jenis array yang dapat menyimpan lebih dari satu bentuk index array. Biasanya jenis array multi dimensi digunakan untuk matrik.</p>
    <h4>Contoh:</h4>
    <p><?php $nama=array(
        array("Rheza",96,"A"),
        array("Bima",88,"A"),
    );
    ?></p>
    <p><?php
       echo "Nama : ". $nama[0][0] .", Nilai : ". $nama[0][1].", Predikat : ".$nama[0][2]."<br>";
       echo "Nama : ". $nama[1][0] .", Nilai : ". $nama[1][1].", Predikat : ".$nama[1][2];
       
    ?></p>


</p>

</body>
</html>