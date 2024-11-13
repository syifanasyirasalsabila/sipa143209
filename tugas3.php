<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="chekbox.css">
<div>
<body>
    <div class="hasil">
</body>
</html>

<?php
session_start();
if(isset($_POST['ok'])){
if(isset($_POST['menu1'])){
    $soto=$_POST['menu1'];
    $a=$_POST['a'];
    if($a!="" and  $soto!=""){
        {
            echo "anda membeli soto $a";
            echo "dengan harga 1 porsi";
            echo $e=15000;
            echo "totalnya adalah";
             echo  $e=15000*$a;
             echo "<br>"; 
           }   
    }
    else{
        echo "<h1><center>Data Harus Diisi</center></h1>";
    }
}


if(isset($_POST['menu2'])){
    $rawon=$_POST['menu2'];
    $b=$_POST['b'];
    if($b!="" and  $rawon!=""){
        {
            echo "anda membeli rawon $b";
            echo "dengan harga 1 porsi";
            echo $f= 18000;
            echo "totalnya adalah";
             echo  $f= 18000*$b;
             echo "<br>"; 
           }   
    }
    else{
        echo "<h1><center>Data Harus Diisi</center></h1>";
    }
}
if(isset($_POST['menu3'])){
    $teh=$_POST['menu3'];
    $c=$_POST['c'];
    if($c!="" and  $teh!=""){
        {
            echo "anda membeli teh $c";
            echo "dengan harga 1 porsi";
            echo $g=3000;
            echo "totalnya adalah";
             echo  $g=3000*$c;
             echo "<br>"; 
           }   
    }
    else{
        echo "<h1><center>Data Harus Diisi</center></h1>";
    }
}
if(isset($_POST['menu4'])){
    $kopi=$_POST['menu4'];
    $d=$_POST['d'];
    if($d!="" and  $kopi!=""){
        {
            echo "anda membeli kopi $d";
            echo "dengan harga 1 porsi";
            echo $h=5000;
            echo "totalnya adalah";
             echo  $h=5000*$d;
             echo "<br>"; 
           }   
    }
    else{
        echo "<h1><center>Data Harus Diisi</center></h1>";
    }
}
}
echo '<a href="nama.php">kembali</a>';
echo "<br>"
?>