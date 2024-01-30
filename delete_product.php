<?php
include "condb.php";

$pids = $_GET['pro_id'];
$sql = "DELETE FROM product WHERE pro_id='$pids'";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('ລົບສິນຄ້າສຳເລັດ');</script>";
    echo "<script>window.location='show_product.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ລົບສິນຄ້າບໍ່ສຳເລັດ');</script>";
}

mysqli_close($conn);
?>