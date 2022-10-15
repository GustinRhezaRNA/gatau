<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="masuk_get.php" method="get">
    Nama     :     <input type="text" name="name"><br>
    Domisili : <input type="text" name="domisili"><br>
    Umur     :     <input type="text" name="umur"><br>
    Alamat   :   <input type="text" name="alamat"><br>
    Gender   : <input type="radio" name="jenis_kelamin" value="L">Laki Laki
                <input type="radio" name="jenis_kelamin" value="P">Perempuan 
                

    <input type="submit">
    <form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "get") {  
       
        if (empty($_GET["name"])) {  
             $nameErr = "Name is required";
             echo $nameErr;
        } else {  
            echo $name = input_data($_GET["name"]);                
                
        }  
    }

   
    if (empty($_GET["domisili"])) {  
        $nameErr = "Domisili is required";  
   } else {  
       $name = input_data($_GET["domisili"]);                
           
   }  

    
?>
    
</body>
</html>