<?php
include "condb.php";
$pname = $_POST['pname'];
$tid = $_POST['tid'];
$price = $_POST['price'];
$amount = $_POST['amount'];
$image = $_POST['image'];

$sql="INSERT INTO product(pro_name,type_id,price,amount,image) VALUES('$pname','$tid','$price','$amount','$image')";
$result=mysqli_query($conn,$sql);
if($result){

    echo "<script>alert('ເພີ່ມສິນຄ້າສຳເລັດ');</script>";
    echo "<script>window.location='show_product.php';</script>";
}else{ 
    echo "<script>alert('ເພີ່ມສິນຄ້າບໍ່ສຳເລັດ');</script>";
}
mysqli_close($conn);
?>