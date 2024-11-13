<?php
if(isset($_POST['ok']))
{  
 $a=$_POST['a'];
for($i=0;$i<3;$i++)
{
    echo "nama anda adalah";
    echo "<br>";
    echo $a[$i];
    echo "<br>";

}
}
echo '<a href="nama.php">kembali</a>';


?>