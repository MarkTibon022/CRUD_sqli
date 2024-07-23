<?php
include_once "Components/navhome.php";
include_once "Config.php";

if (isset($_POST["add"])) {
    $name = $_POST["name"];
    $price = $_POST["price"];

    if (isset($_FILES["product"])) {
        $product = $_FILES["product"] ["name"];
        $loc_img = "./image/".$product;

        if (move_uploaded_file($_FILES["product"] ["tmp_name"], $loc_img)) {
            $sql = "INSERT INTO `product_list`(`Product`, `Name`, `Price`) VALUES ('$product','$name','$price')";
            $result = $con->query($sql) or die ($con->error);
            header("location: Home.php");

        } else {
            echo "error";
        }

    } else {
        echo "no uploaded";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/lib/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/Addproduct.css">
    <title>Document</title>
</head>
<body>
    <div class="addp min-vh-100 d-flex justify-content-center align-items-center">
        <form action="" method="post" class="c-form text-center" enctype="multipart/form-data">
            <h1 class="fw-bold">Add Product</h1>
            <div class="input-group mb-3">
                <input type="file" name="product" class="form-control" required>
                <span class="input-group-text c-span">Add Product</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Product Name</span>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">₱</span>
                <input type="number" name="price" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary" name="add">Comfirm</button>
        </form>
    </div>
</body>
</html>