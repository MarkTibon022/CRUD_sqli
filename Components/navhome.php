<?php
include_once "Config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/lib/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css//navhome.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-secondary">
        <div class="container-lg">
            <a href="" class="navbar-brand text-light text-capitalize">shoppepe</a>
                <button class="btn navbar-toggler" data-bs-toggle="collapse"           data-bs-target="#show" aria-expanded="false" aria-controls="show">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="show">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="Home.php" class="nav-link text-white">Product Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-white">Add Product</a>
                    </li>
                    <?php if (isset($_SESSION["username"])) {?>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link text-white">Log Out</a>
                        </li>
                    <?php } else {?>
                        <li class="nav-item">
                            <a href="admin_login.php" class="nav-link text-white">Log In</a>
                        </li>
                    <?php };?>
                </ul>
            </div>
        </div>
    </nav>
</body>
    <script src="Css/lib/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</html>