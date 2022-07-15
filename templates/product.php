<?php
require "../config/dbcon.php";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@4.7/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css" media="screen">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../fonts/font-awesome-webfont.svg">

</head>

<body class="font">
    <div class='dashboard'>
        <div class="dashboard-nav">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fa fa-bars"></i></a>
                <a href="#" class="brand-logo"><i class="fa fa-shopping-bag"></i> <span>PRODUCT PAGE</span></a>
            </header>
            <nav class="dashboard-nav-list">
                <a href="#" class="dashboard-nav-item active "><i class="fa fa-home"></i>Home </a>
                <a href="#" class="dashboard-nav-item"><i class="fa fa-dashboard"></i> Dashboard
                </a>
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa fa-users"></i> Users </a>
                </div>
            </nav>
        </div>
        <div class='dashboard-app'>
            <div>
                <h2 style="margin-left: 20px;">Product List</h2>
            </div>
            <div class="btn">
                <a href="../templates/product_add.php"><button class="button">Add Product</button></a>
                <div method="POST">
                    <input type="submit" name="submit" id="delete-product-btn" value="Mass Delete">
                </div>
            </div>

            <!-- Display posts from database -->
            <form method="POST" action="" class="row">
                <?php foreach ($query as $q) { ?>
                    <div class="col-sm-3">
                        <div class="card">
                            <input type="checkbox" name="id[]" class="delete-checkbox">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $q['SKU']; ?></h5>
                                <p class="card-text name"><?php echo $q['Name']; ?></p>
                                <p class="card-text price">$<?php echo $q['Price']; ?></p>
                                <p class="card-text">Size: 700MB</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </form>
        </div>
    </div>

    <footer>
        <div>
            <h6>Scandiweb Test Assignment.</h6>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>