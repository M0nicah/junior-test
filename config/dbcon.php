<?php
    ini_set("display_errors", "off");

    //Database connection

    $con = mysqli_connect("localhost","root", "monica6478", "juniorTest");

    //checking database connection

    if (!$con) {
        die("<h3 class='container bg-outline-danger text-danger text-center rounded-lg '>Could not establish connection:</h3> " . mysqli_connect_error());
    }

    // Get data to display on index page
    $sql = "SELECT * FROM products";
    $query = mysqli_query($con, $sql);


    if(isset($_REQUEST["add_product"])){
        $SKU = $_REQUEST['SKU'];
        $name = $_REQUEST['Pname'];
        $price = $_REQUEST['price'];


        $sql = "INSERT INTO products VALUES ('$SKU','$name','$price')";
        mysqli_query($con, $sql);

        echo $sql;

        header("Location: product.php?info=new product added");
        exit();


    }
?>

