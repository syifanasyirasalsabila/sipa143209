<?php
$host="localhost";
$user="root";
$pass="";
$db="umm";
$con=mysqli_connect($host,$user,$pass,$db);

if($con){
    echo "sukses";

    $data=mysqli_query($con,"SELECT * FROM `matakuliah`");
    $result=mysqli_fetch_assoc($data);
    var_dump($result);
}
else{
    echo "gagal";
}
?>