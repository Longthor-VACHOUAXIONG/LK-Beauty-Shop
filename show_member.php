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
    <div class=" h4 text-center   alert alert-success  mb-4  mt-4" role="alert"> ສະແດງຂໍ້ມູນສະມາຊິກ</div>
<a href="fr_member.php" class="btn btn-success  mb-4" >ເພີ່ມ</a>
<table class="table table-striped">
    <tr>
        <th>ລະຫັດ</th>
        <th>ຊື່</th>
        <th>ນາມສະກຸນ</th>
        <th>ເບີໂທລະສັບ</th>
        <th>ແກ້ໄຂ</th>
        <th>ລົບ</th>
    </tr>
  <?php
$sql = "SELECT * FROM member";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
?>
    <tr>
    <td><?=$row["id"]?></td>
    <td><?=$row["name"]?></td>
    <td><?=$row["surname"]?></td>
    <td><?=$row["telephone"]?></td>
    <td><a href="edit_member.php?id=<?=$row["id"]?>" class="btn btn-warning" >ແກ້ໄຂ</a>   </td>
    <td><a href="delete_member.php?id=<?=$row["id"]?>" class="btn btn-danger" onclick="Del(this.href);return false;" >ລົບ</a>   </td>
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