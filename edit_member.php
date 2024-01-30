<?php
include "condb.php";
$id=$_GET['id'];
$sql="SELECT*FROM member WHERE id='$id'";
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
    <div class=" h4 text-center   alert alert-success  mb-4  mt-4" role="alert"> ແກ້ໄຂຂໍ້ມູນສະມາຊິກ</div>
    <form method="POST" action="update_member.php">
    <label>ລະຫັດສະມາຊິກ</label>
    <input type="text" name="id_mem"  class="form-control" readonly value=<?=$row["id"]?> > <br>
    <label>ຊື່</label>
    <input type="text" name="fname"  class="form-control"value=<?=$row["name"]?> > <br>
    <label>ນາມສະກຸນ</label>
    <input type="text" name="lname"  class="form-control"value=<?=$row["surname"]?> > <br>
    <label>ເບີໂທລະສັບ</label>
    <input type="number" name="telephone"  class="form-control"value=<?=$row["telephone"]?> > <br>
    <input type="submit" value="ອັບເດດ" class="btn btn-success mt-4">
    <a href="show_member.php" class="btn btn-danger mt-4" >ຍົກເລີກ</a>
</form>
</div>
</div>
</div>
</body>
</html>