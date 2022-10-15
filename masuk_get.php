




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    

<?php
 extract($_GET);
 echo " <h3>
 Terima Kasih telah mengisi buku tamu kami. </h3>
</br>";

 echo 'Nama Anda : '.($_GET["name"]).' </br>';
 
 echo 'Domisili Anda : '.($_GET["domisili"]).' </br>';




 ?>


</body>
</html>