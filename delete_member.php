<?php
include "condb.php";

$ids=$_GET['id'];
$sql="DELETE FROM member WHERE  id='$ids' ";

if(mysqli_query($conn,$sql)){
    echo "<script>alert('ລົບຂໍ້ມູນສຳເລັດ');</script>";
    echo "<script>window.location='show_member.php';</script>";
}else{
    echo "Error : " .$sql. "<br>" . mysqli.error($conn);
    echo "<script>alert('ລົບຂໍ້ມູນບໍ່ສຳເລັດ');</script>";
}

mysqli_close($conn);

?>