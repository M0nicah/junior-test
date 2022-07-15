<?php 
    include "../config/dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@4.7/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css" media="screen">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../fonts/font-awesome-webfont.svg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<form method="POST" id="product_form" action="product.php" class="form">
    <div>
        <h2 style="color: #000;">Add Product</h2>
    </div>
    <div class="row mb-3">
        <label for="SKU" class="col-sm-2 col-form-label">SKU</label>
        <div class="col-sm-10">
            <input type="" class="form-control" name="SKU" id="sku" placeholder="Enter Product SKU..">
        </div>
    </div>
    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">PRODUCT NAME</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Pname" id="Pname" placeholder="Product Name..">
        </div>
    </div>
    <div class="row mb-3">
        <label for="price" class="col-sm-2 col-form-label">PRICE</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="price" id="price" placeholder="Enter Price..">
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-10 offset-sm-2">
            <input type="submit" class="save" id="N" value="Save" name="add_product">
            <input type="submit" class="close" id="N" value="Close" name="add_product">
        </div>
    </div>
</form>

    
</body>
</html>