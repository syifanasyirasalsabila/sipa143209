<?php
$a=$_POST['nilai'];
if($a  >=90){
    echo "nilai anda adalah a";
    echo "<br>";
}else if( $a>=80){
    echo "nilai anda adalah b+";
}elseif($a >=70){
    echo "nilai anda adalah b";
}elseif($a>=60){
    echo "nilai anda adalah c";
}elseif( $a>=50){
    echo "nilai anda adalah d";
}
echo "<br>";
echo '<a href="nama.php">kembali</a>';
?>
