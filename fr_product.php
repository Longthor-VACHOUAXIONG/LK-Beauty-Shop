<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ເພີ່ມສິນຄ້າ</title>
    <!-- Bootstrap CSS -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"> 
    <div class="row"> 
        <div class="col-sm-4">  
    <div class=" h4 text-center   alert alert-success  mb-4  mt-4" role="alert"> ເພີ່ມຂໍ້ມູນສິນຄ້າ</div>
    <form method="POST" action="insert_product.php">
    <label>ຊື່ສິນຄ້າ</label>
    <input type="text" name="pname"  class="form-control"required> <br>
    <label>ລະຫັດປະເພດສິນຄ້າ</label>
    <input type="text" name="tid"  class="form-control"required> <br>
    <label>ລາຄາ</label>
    <input type="number" name="price"  class="form-control">  <br>
    <label>ຈຳນວນຄົງເຫຼືອ</label>
    <input type="number" name="amount"  class="form-control">  <br>
    <label>ຮູບພາບ</label>
    <input type="text" name="image"  class="form-control">  <br>
    <input type="submit" value="ຢືນຢັນ" class="btn btn-success mt-4">
    <a href="show_product.php" class="btn btn-danger mt-4" >ຍົກເລີກ</a>
</form>
</div>
</div>
</div>
</body>
</html>