
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
    <div class=" h4 text-center   alert alert-success  mb-4  mt-4" role="alert"> ເພີ່ມຂໍ້ມູນສະມາຊິກ</div>
    <form method="POST" action="insert_member.php">
    <label>ຊື່</label>
    <input type="text" name="fname"  class="form-control"required> <br>
    <label>ນາມສະກຸນ</label>
    <input type="text" name="lname"  class="form-control"required> <br>
    <label>ເບີໂທລະສັບ</label>
    <input type="number" name="telephone"  class="form-control">
    <input type="submit" value="ຢືນຢັນ" class="btn btn-success mt-4">
    <a href="show_member.php" class="btn btn-danger mt-4" >ຍົກເລີກ</a>
</form>
</div>
</div>
</div>
</body>
</html>