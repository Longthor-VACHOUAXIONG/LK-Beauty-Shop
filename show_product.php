<?php
include "condb.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"> 
    <div class=" h4 text-center   alert alert-success  mb-4  mt-4" role="alert"> ສະແດງຂໍ້ມູນສິນຄ້າ</div>
<a href="fr_product.php" class="btn btn-success  mb-4" >ເພີ່ມ</a>
<table class="table table-striped">
    <tr>
        <th>ລະຫັດສິຄ້າ</th>
        <th>ຊື່ສິນຄ້າ</th>
        <th>ລະຫັດປະເພດສິນຄ້າ</th>
        <th>ລາຄາ</th>
        <th>ຈໍານວນ</th>
        <th>ຮູບພາບ</th>
        <th>ແກ້ໄຂ</th>
        <th>ລົບ</th>
    </tr>
  <?php
$sql = "SELECT * FROM product";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
?>
    <tr>
    <td><?=$row["pro_id"]?></td>
    <td><?=$row["pro_name"]?></td>
    <td><?=$row["type_id"]?></td>
    <td><?=$row["price"]?></td>
    <td><?=$row["amount"]?></td>
    <td><?=$row["image"]?></td>
    <td><a href="edit_product.php?pro_id=<?=$row["pro_id"]?>" class="btn btn-warning" >ແກ້ໄຂ</a>   </td>
    <td><a href="delete_product.php?pro_id=<?=$row["pro_id"]?>" class="btn btn-danger" onclick="Del(this.href);return false;" >ລົບ</a>   </td>
<tr>
<?php
}
mysqli_close($conn);   //ປິດການເຊື່ອມຖານຂໍ້ມູນ
?>
<table>

</div>
</body>
</html>

<script language="JavaScript">
    function Del(mypage){
        var agree=confirm("ທ່ານຕ້ອງການລົບຂໍ້ມູນແທ້ບໍ່");
        if(agree){
            window.location=mypage;
        }
    }


    </script>