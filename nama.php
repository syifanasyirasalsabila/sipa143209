<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="belajar.css">
<body>

    <script src="belajar.js"></script>
    <div class="login">
    <form action="" method="post">
        <div>
    <ol>
        <li><label>masukkan nama</label><input type="text" name="a" id="a"></li>
        <li><label>masukkan password</label><input type="password" name="b" id="b"></li>
    </ol>
        </div>
        <div>
        <input type="submit" value="ok" name="ok" onclick="tampil()";>
        </div>
    </form>
    </div>
</body>
</html>


<?php
session_start();

if(isset($_POST['ok'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $_SESSION['a']=$a;
    $_SESSION['b']=$b;
    $_SESSION['ok']=true;

    if($a=="sipa" and $b=="1234")
    {
        header ("location:tugas2.html");
    }
    else if($a=="umma" and $b=="6789")
    {
        header("location:tugas3.html");
    }
    else if($a=="sipaumma" and $b=="123")
    {
        header("location:1okt.php");
    }

}
?>