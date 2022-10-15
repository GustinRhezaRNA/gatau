<?php
$a= 8;
$b= 2;
$c= $a+$b;
$d= $a*$b;
$e= $a/$b;
$f= $a-$b;
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

    <Table border="2">
    <tr>
        <td>Operasi</td>
        <td>Hasil</td>
    <tr>
        <td>8+2</td>
        <td><?php echo "$c"?></td>   
    </tr>
    <tr>
        <td>8*2</td>
        <td><?php echo "$d"?></td>
    </tr>
    <tr>
        <td>8/2</td>
        <td><?php echo "$e"?></td>
    </tr>
    <tr>
        <td>8-2</td>
        <td><?php echo "$e"?></td>
    </tr>
    </Table>
</body>
</html>
