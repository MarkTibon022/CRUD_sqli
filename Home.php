<?php
session_start();
include_once "Config.php";
include_once "Components/navhome.php";

$sql = "SELECT * FROM product_list"; 
$result = $con->query($sql) or die ($con->error);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/lib/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/Home.css">
    <title>Document</title>
</head>
<body>
    <div class="container-lg">  
        <div class="row">
            <?php while ($row = $result->fetch_assoc()) {?>
                <div class="col-lg-4 col-6">
                    <div class="product-image">
                        <div class="text-center">
                            <img src="./image/<?php echo $row["Product"]; ?>" alt="" class="img-fluid c-img">
                            <h4 class="fw-bold text-capitalize pt-2 c-name"><?php echo $row["Name"];?></h4>
                            <p class="text-bold c-price " ><?php echo"₱ ".$row["Price"]; ?></p>
                            <?php  if (isset($_SESSION["username"])) {?>
                                <form action="Delete.php" method="post">
                                    <a href="Edit.php?editID=<?php echo $row["Id"]; ?>" class="btn btn-warning mb-2">Edit    Product</a>
                                    <button type="submit" name="delete" class="btn btn-danger mb-2">Delete</button>
                                    <input type="hidden" name="Id" value="<?php echo $row["Id"]; ?>">
                                </form>
                            <?php } else {?>
                                <form action="Delete.php" method="post">
                                    <a href="Edit.php?editID=<?php echo $row["Id"]; ?>" class="btn btn-warning disabled mb-2">Edit    Product</a>
                                    <button type="submit" name="delete" class="btn btn-danger disabled mb-2">Delete</button>
                                    <input type="hidden" name="Id" value="<?php echo $row["Id"]; ?>">
                                </form>
                                <?php }?>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</body>
</html>