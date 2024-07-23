<?php
include_once "Config.php";

$ID = $_GET["editID"];

$sql = "SELECT * FROM product_list"; 
$result = $con->query($sql) or die ($con->error);
$row = $result->fetch_assoc();

if(isset($_POST["comfirm"])) {
    $product = $_POST["product"];
    $name = $_POST["name"];
    $price = $_POST["price"];

    $sql = "UPDATE `product_list` SET `Product`='$product',`Name`='$name',`Price`='$price' WHERE ID = '$ID'";
    $con->query($sql) or die ($con->error);

    header("location: Home.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/lib/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="addp min-vh-100 d-flex justify-content-center align-items-center">
        <form action="" method="post" class="w-50 text-center">
                <img src="./image/<?php echo $row["Product"]; ?>" alt="" class="img-fluid w-25">
            <div class="input-group mb-3">
                <input type="file" name="product" class="form-control" required>
                <span class="input-group-text">Add Product</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Product Name</span>
                <input type="text" name="name" class="form-control" required  value="<?php echo $row["Name"] ?>">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">₱</span>
                <input type="number" name="price" class="form-control" required  value="<?php echo $row["Price"] ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="comfirm">Comfirm</button>
        </form>
    </div>
</body>
</html>