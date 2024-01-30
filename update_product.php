<?php
include "condb.php";

$pid = $_POST['pid'];
$pname = $_POST['pname'];
$tid = $_POST['tid'];
$price = $_POST['price'];
$amount = $_POST['amount'];
$image = $_POST['image'];

$sql = "UPDATE product SET pro_name='$pname', type_id='$tid', price='$price', amount='$amount', image='$image' WHERE pro_id='$pid'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>alert('ແກ້ໄຂສິນຄ້າສຳເລັດ');</script>";
    echo "<script>window.location='show_product.php';</script>";
} else { 
    echo "<script>alert('ແກ້ໄຂສິນຄ່າບໍ່ສຳເລັດ');</script>";
}

mysqli_close($conn);
?>