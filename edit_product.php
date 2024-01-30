<?php
include "condb.php";
$id=$_GET['pro_id'];
$sql="SELECT*FROM product WHERE pro_id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ເພີ່ມສະມາຊິກ</title>
    <!-- Bootstrap CSS -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"> 
    <div class="row"> 
        <div class="col-sm-4">  
    <div class=" h4 text-center   alert alert-success  mb-4  mt-4" role="alert"> ແກ້ໄຂຂໍ້ມູນສິນຄ້າ</div>
    <form method="POST" action="update_product.php">
    <label>ລະຫັດສິນຄ້າ</label>
    <input type="text" name="pid"  class="form-control" readonly value=<?=$row["pro_id"]?> > <br>
    <label>ຊື່ສິນຄ້າ</label>
    <input type="text" name="pname"  class="form-control"value=<?=$row["pro_name"]?> > <br>
    <label>ລະຫັດປະເພດສິນຄ້າ</label>
    <input type="text" name="tid"  class="form-control"value=<?=$row["type_id"]?> > <br>
    <label>ລາຄາ</label>
    <input type="number" name="price"  class="form-control"value=<?=$row["price"]?> > <br>
    <label>ຈຳນວນ</label>
    <input type="number" name="amount"  class="form-control"value=<?=$row["amount"]?> > <br>
    <label>ຮູບພາບ</label>
    <input type="number" name="image"  class="form-control"value=<?=$row["image"]?> > <br>
    <input type="submit" value="ອັບເດດ" class="btn btn-success mt-4">
    <a href="show_product.php" class="btn btn-danger mt-4" >ຍົກເລີກ</a>
</form>
</div>
</div>
</div>
</body>
</html>