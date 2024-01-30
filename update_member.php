<?php
include 'condb.php';
$id=$_POST['id_mem'];
$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$tel=$_POST['telephone'];

$sql = "UPDATE member set name='$f_name',surname='$l_name',telephone='$tel'WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if($result){

    echo "<script>alert('ແກ້ໄຂຂໍ້ມູນສຳເລັດ');</script>";
    echo "<script>window.location='show_member.php';</script>";
}else{ 
    echo "<script>alert('ແກ້ໄຂມູນບໍ່ສຳເລັດ');</script>";
}
mysqli_close($conn);

?>