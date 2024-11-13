<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="1okt.css">
<body>
<div class="for">
    <form action="proses.php" method="post">
<?php
       for($i=0;$i<3;$i++)
{      
       echo "<label>Masukkan nama</label><input type='text' name='a[]'>";
echo "<br>";       
}
?>    
        <input type="submit" value="ok" name="ok">


    </form>
</body>
<a href="nama.php">kembali</a>
</html>